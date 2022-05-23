<?php

namespace Database\Seeders;

use App\Models\Worker;
use App\Models\WorkerWorkSpace;
use Illuminate\Database\Seeder;

class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $worker1 = new Worker();
        $worker1->name = 'John';
        $worker1->email = 'John@gmail.com';
        $worker1->password = bcrypt('123456');
        $worker1->job_title = 'Developer';
        $worker1->avatar = '/providers/kGAcCMoaZ3vGHgQzAf2wI9DBToPFt1l8uWqKrblH.jpg';
//        $worker1->you_did = 'yes';
        $worker1->type = 'team';
        $worker1->save();

        $workerWorkSpace1 = new WorkerWorkSpace();
        $workerWorkSpace1->date= '2022-05-03';
        $workerWorkSpace1->worker_id= $worker1->id;
        $workerWorkSpace1->work_space_id= 1;
        $workerWorkSpace1->save();

        $worker2 = new Worker();
        $worker2->name = 'Yara';
        $worker2->email = 'Yara@gmail.com';
        $worker2->password = bcrypt('123456');
        $worker2->job_title = 'Designer';
        $worker2->avatar = '/providers/J6KNTtcvZJkB9UNI8B5Vd2pMYNbYUzAwSF6eAOOq.jpg';
//        $worker2->you_did = 'no';
        $worker2->type = 'individual';
        $worker2->save();

        $workerWorkSpace2 = new WorkerWorkSpace();
        $workerWorkSpace2->date= '2022-04-01';
        $workerWorkSpace2->worker_id= $worker2->id;
        $workerWorkSpace2->work_space_id= 2;
        $workerWorkSpace2->save();

        $workerWorkSpace3 = new WorkerWorkSpace();
        $workerWorkSpace3->date= '2022-04-07';
        $workerWorkSpace3->worker_id= $worker2->id;
        $workerWorkSpace3->work_space_id= 1;
        $workerWorkSpace3->save();
    }
}
