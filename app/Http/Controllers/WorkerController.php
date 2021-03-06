<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\Provider;
use App\Models\Rating;
use App\Models\Worker;
use App\Models\WorkerWorkSpace;
use App\Models\WorkSpace;
use App\Models\WorkSpaceAddons;
use App\Models\WorkSpaceRating;
use App\Models\WorkSpaceService;
use App\Models\WorkSpaceType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class WorkerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:worker_access', ['only' => ['index']]);
        $this->middleware('permission:reservations_show', ['only' => ['reservations']]);
    }

    public function update(Request $request)
    {
        $id = request('id');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'job_title' => 'required',
            'avatar' => 'required',
            'type' => 'required',
        ]);

        $worker = Worker::withTrashed()->findOrFail($id);
        $worker->name = $request->input('name');
        $worker->email = $request->input('email');
        $worker->password = bcrypt($request->input('password'));
        $worker->job_title = $request->input('job_title');
        $worker->avatar = storeImage('workers','avatar' );
        $worker->type = $request->input('type');
        $worker->save();
        return back()->with('success', trans('messages.worker.worker_updated'));
    }
    public function destroy($id)
    {
        $reservation= WorkerWorkSpace::findOrFail($id)->delete();
        return back()->with('success', trans('messages.workspace.workspace_deleted'));
    }

    public function restore($id)
    {
        WorkerWorkSpace::where('id', $id)->withTrashed()->restore();

        return back()->with('success', trans('messages.workspace.workspace_restored'));
    }

    public function index()
    {
        $worker = Worker::withTrashed()->get();
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
        $workspace_types = WorkSpaceType::all();
        $workspaces = WorkSpaceRating::where('rate_avg', '>', 4)->with('workSpace')->get();
        return view('publicSite.home', compact('workspace_types', 'workspaces'));
    }

    public function aboutUs()
    {
        return view('publicSite.aboutUs');
    }

    public function simpleSearch(Request $request)
    {
        $search = $request->input('search');
        $providers = Provider::query()->where('name', 'LIKE', "%{$search}%")->get();

        return view('publicSite.simpleSearch', compact('providers'));
    }

    public function search(Request $request)
    {
        $address = $request->input('address');
        $work_space_type_id = $request->input('work_space_type_id');
        $date = $request->input('date');
        $capacity = $request->input('capacity');
        $workspaces = WorkSpace::query()->where('capacity', $capacity)
            ->where('work_space_type_id', $work_space_type_id)->get();
        $provider = Provider::query()->where('address', 'LIKE', "%{$address}%")->get();
        $reservation = WorkerWorkSpace::where('date', $date)->exists();
        if (($workspaces->isEmpty() or $provider->isEmpty() and $reservation) == false) {
            return view('publicSite.search', compact('workspaces', 'provider'));
        } elseif (($workspaces->isEmpty() or $provider->isEmpty()) == true) {
            if ($reservation == false) {
                return back()->with('success', trans('messages.search.not_found'));
            } else {
                return back()->with('success', trans('messages.search.reserved'));
            }
        }
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

    public function storeReview(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'message' => 'required',
            'rate' => 'required',
            'is_back' => 'required',
            'tips' => 'required',
            'work_space_id' => 'required',
        ]);
        if (!Rating::where('mac_address', $request->ip())->where('work_space_id', $request->input('work_space_id'))->first()) {
            $rate = new Rating();
            $rate->title = $request->input('title');
            $rate->mac_address = $request->ip();
            $rate->message = $request->input('message');
            $rate->rate = $request->input('rate');
            $rate->is_back = $request->input('is_back');
            $rate->tips = $request->input('tips');
            if ($auth_worker = \Illuminate\Support\Facades\Session::get('worker')) {
                $rate->worker_id = $auth_worker->id;
            }
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

    public function providerDetails($id)
    {
        $provider = Provider::find($id);
        $workspaces = WorkSpace::where('provider_id', $id)->get();
        return view('publicSite.providerDetails', compact('provider', 'workspaces'));
    }

    public function workspaceDetails($id)
    {
        $workspace = WorkSpace::find($id);
        $workspace_rating = Rating::where('work_space_id',$id)->where('worker_id','!=',null)->get();
        $work_space_ratings = WorkSpaceRating::where('work_space_id',$id)->first();
        $workspace_services = WorkSpaceService::where('work_space_id',$id)->get();
        return view('publicSite.workspaceDetails', compact('workspace',
            'workspace_services', 'workspace_rating', 'work_space_ratings'));
    }

    public function workspaceReserve(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'id' => 'required',
            'price' => 'required',
        ]);
        $auth_worker = \Illuminate\Support\Facades\Session::get('worker');
        if ($auth_worker != null) {
            $workers=WorkerWorkSpace::where('date',$request['date'])->where('work_space_id',$request['id'])->first();
            if ($workers == null){
                $reservation = new WorkerWorkSpace();
                $reservation->worker_id = $auth_worker->id;
                $reservation->date = $request['date'];
                $reservation->work_space_id = $request['id'];
                $reservation->work_space_addon_id = $request['addons'] ?? null;
                $reservation->pricing_id = $request['price'];
                $reservation->save();
                return back()->with('success', trans('messages.reserve.reserve_added'));
            }else{
                return back()->with('success', trans('messages.search.reserved'));
            }

        }else{
            return back()->with('success', 'You should Login first!!');
        }
    }

    public function contactus()
    {
        return view('publicSite.contactUs');
    }

    public function contactStore(Request $request)
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
        $db_password = Worker::select('password')->where('email', $email)->first();
        if (Worker::where('email', $email)->first() != null and password_verify($password, $db_password['password']) != false) {
            $workspace_types = WorkSpaceType::all();
            $workspaces = WorkSpaceRating::where('rate_avg', '>', 4)->get();
            $worker = Worker::where('email', $email)->first();
            Session::put('worker', $worker);
            return view('publicSite.home', compact('workspace_types', 'workspaces'));

        }
        return back()->with('success', trans('messages.worker.worker_login'));


    }

    public function profile($id)
    {
        $worker_profile = Worker::withTrashed()->find($id);
        $worker_workspace = WorkerWorkSpace::withTrashed()->where('worker_id',$id )->get();
        return view('publicSite.profile', compact('worker_profile','worker_workspace'));
    }

    public function logout()
    {
        Session::flush();

        return view('publicSite.login');
    }

    public function getEmail()
    {

        return view('publicSite.forgetPassword');
    }

    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );

        Mail::send('emails.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });

        return view('publicSite.sentEmail');
    }

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
            'type' => 'required',
        ]);

        $worker = new Worker();
        $worker->name = $request->input('name');
        $worker->email = $request->input('email');
        $worker->password = bcrypt($request->input('password'));
        $worker->job_title = $request->input('job_title');
        $worker->avatar = storeImage('workers', 'avatar');
        $worker->type = $request->input('type');
        $worker->save();

        return back()->with('success', trans('messages.worker.worker_added'));
    }


    public function showResetPasswordForm($token)
    {
        return view('publicSite.resetPassword', ['token' => $token]);
    }


    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $worker = Worker::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        return view('publicSite.login')->with('success', 'Your password has been changed!');
    }
}
