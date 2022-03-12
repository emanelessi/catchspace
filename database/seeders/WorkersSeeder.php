<?php

namespace Database\Seeders;

use App\Models\Worker;
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
        $worker1->job_title = 'Developer';
        $worker1->avatar = '/providers/kGAcCMoaZ3vGHgQzAf2wI9DBToPFt1l8uWqKrblH.jpg';
        $worker1->you_did = 'yes';
        $worker1->work_space_id  = 1;
        $worker1->save();

        $worker2 = new Worker();
        $worker2->name = 'Yara';
        $worker2->job_title = 'Designer';
        $worker2->avatar = '/providers/J6KNTtcvZJkB9UNI8B5Vd2pMYNbYUzAwSF6eAOOq.jpg';
        $worker2->you_did = 'no';
        $worker2->work_space_id  = 2;
        $worker2->save();
    }
}
