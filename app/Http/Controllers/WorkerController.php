<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Provider;
use App\Models\Rating;
use App\Models\Worker;
use App\Models\WorkerWorkSpace;
use App\Models\WorkSpace;
use App\Models\WorkSpaceAddons;
use App\Models\WorkSpaceAttribute;
use App\Models\WorkSpaceRating;
use App\Models\WorkSpaceService;
use App\Models\WorkSpaceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class WorkerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:worker_access', ['only' => ['index']]);
        $this->middleware('permission:reservations_show', ['only' => ['reservations']]);
//        $this->middleware('permission:workspace_edit', ['only' => ['edit','update']]);
//        $this->middleware('permission:workspace_delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $worker = Worker::withTrashed()->get();
//        dd($worker[0]->workSpace);
        return view('admin.worker.worker', compact('worker'));
    }

    public function reservations($id)
    {
        $worker = Worker::withTrashed()->findOrFail($id);
        $reservations = WorkerWorkSpace::where('worker_id', $worker->id)->get();
        return view('admin.worker.reservations.reservations', compact('reservations'));
    }

    public function home()
    {
        $workspace_types=WorkSpaceType::all();
        $workspaces=WorkSpaceRating::where('rate_avg','>',4)->get();
//        $workspace_rating=WorkSpaceRating::where('rate_avg',)->get();
        return view('publicSite.home',compact('workspace_types','workspaces'));
    }

    public function aboutus()
    {
        return view('publicSite.aboutUs');
    }

    public function simplesearch(Request $request)
    {
        $search = $request->input('search');
//        $workspaces = Provider::query()->where('name', 'LIKE', "%{$search}%")->get();
        $providers = Provider::query()->where('name', 'LIKE', "%{$search}%")->get();

        return view('publicSite.simpleSearch', compact('providers'));
    }

    public function search(Request $request)
    {
        $address = $request->input('address');
        $work_space_type_id = $request->input('work_space_type_id');
        $date = $request->input('date');
        $capacity = $request->input('capacity');
        $workspaces = WorkSpace::query()->where('capacity', $capacity)->where('work_space_type_id', $work_space_type_id)->get();
        $provider = Provider::query()->where('address','LIKE', "%{$address}%")->get();
        $reservation = WorkerWorkSpace::where('date', $date)->exists();
//        dd($workspaces->isEmpty(),$provider->isEmpty(),$reservation == true);
        if (($workspaces->isEmpty() or $provider->isEmpty() and $reservation) == false){
            return view('publicSite.search', compact('workspaces','provider'));
        }
        elseif (($workspaces->isEmpty() or $provider->isEmpty())==true ){
            if ( $reservation== false){
                return back()->with('success', trans('messages.search.not_found'));
            }
            else{
                return back()->with('success', trans('messages.search.reserved'));
            }


        }
//        else{
//            return back()->with('success', trans('messages.search.not_found'));
//        }

    }

    public function providers()
    {
        $providers = Provider::all();

        return view('publicSite.providers', compact('providers'));
    }

    public function review($id)
    {
        $workspace = WorkSpace::find($id);
        return view('publicSite.review', compact('workspace'));
    }

    public function storereview(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'message' => 'required',
            'rate' => 'required',
            'is_back' => 'required',
            'tips' => 'required',
            'work_space_id' => 'required',
        ]);
        if (! Rating::where('mac_address',$request->ip())->where('work_space_id',$request->input('work_space_id'))->first()) {
            $rate = new Rating();
            $rate->title = $request->input('title');
            $rate->mac_address = $request->ip();
            $rate->message = $request->input('message');
            $rate->rate = $request->input('rate');
            $rate->is_back = $request->input('is_back');
            $rate->tips = $request->input('tips');
            $rate->work_space_id = $request->input('work_space_id');
            $rate->save();

            $workspaceRate = WorkSpaceRating::where('work_space_id', $rate->work_space_id)->first();
            $allRates = Rating::all();
            $avg = 0;
            foreach ($allRates as $myrate) {
                $sum = 0;
                $rate = $myrate->where('work_space_id', $workspaceRate->work_space_id)->pluck('rate');
                for ($i = 0; $i < count($rate); $i++) {
                    $sum += $rate[$i];
                    $avg = $sum / count($rate);
                }
            }
            $myworkspace = WorkSpaceRating::find($workspaceRate->id);
            $myworkspace->rate_avg = $avg;
            $myworkspace->rate_count = count($rate);
            $myworkspace->update();

            return back()->with('success', trans('messages.review.review_created'));
        } else {
            return back()->with('success', trans('messages.review.review_repeated'));
        }
    }

    public function providerdetails($id)
    {
        $provider = Provider::find($id);
        $workspaces = WorkSpace::where('provider_id',$id)->get();
        return view('publicSite.providerDetails', compact('provider','workspaces'));
    }
    public function workspacedetails($id)
    {
        $workspace = WorkSpace::find($id);
//        $workspace_type = WorkSpaceType::all();
        $workspace_services=WorkSpaceService::all();
        return view('publicSite.workspaceDetails', compact('workspace','workspace_services'));
    }

    public function contactus()
    {
        return view('publicSite.contactUs');
    }

    public function contactstore(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $contact = new ContactUs();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();
        $details = array(
            'title' => 'Mail from ' . $request->input('name'),
            'body' => 'This is for ' . $request->input('message'),
        );
        $emails = ['dinashadiakeela@gmail.com', 'hanieman86@gmail.com', 'jumanashawwa1@gmail.com', 'dalia.5.6.2000@gmail.com'];

        Mail::send('emails.ContactMail', $details, function ($message) use ($request, $emails) {
            $message->to($emails, $request->input('name'))->subject
            ('Mail From Contact Us Catch Space');
            $message->from($request->input('email'), 'Catch Space');
        });
        return back()->with('success', trans('messages.contactus.contactus_created'));
    }

    public function login()
    {
        return view('publicSite.login');
    }

    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $db_password=Worker::select('password')->where('email', $email)->first();
//        dd(password_verify($password,$db_password['password'] ));
//dd(Worker::where('email', $email)->first(),Hash::check('password', $password));
        if (Worker::where('email', $email)->first() != null and password_verify($password,$db_password['password'] ) !=false) {
            $workspace_types=WorkSpaceType::all();
            return view('publicSite.home',compact('workspace_types'));

        }
        return back()->with('success', trans('messages.worker.worker_login'));


    }
    public function profile(){
        return view('publicSite.profile');
    }

//    public function logout() {
//        Session::flush();
//        Worker::logout();
//
//        return view('publicSite.login');
//    }

    public function create()
    {
        return view('publicSite.signUp');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'job_title' => 'required',
            'avatar' => 'required',
//            'you_did' => 'required',
//            'work_space_id' => 'required',
            'type' => 'required',
        ]);

        $worker = new Worker();
        $worker->name = $request->input('name');
        $worker->email = $request->input('email');
        $worker->password = bcrypt($request->input('password'));
        $worker->job_title = $request->input('job_title');
        $worker->avatar = storeImage('workers', 'avatar');
//        $worker->you_did = $request->input('you_did');
        $worker->type = $request->input('type');
        $worker->save();

        return back()->with('success', trans('messages.worker.worker_added'));
    }

    public function forgetpassword()
    {
        return view('publicSite.forgetPassword');
    }

    public function resetpassword()
    {
        return view('publicSite.resetPassword');
    }
}
