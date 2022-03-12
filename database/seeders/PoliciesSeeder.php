<?php

namespace Database\Seeders;

use App\Models\Policies;
use Illuminate\Database\Seeder;

class PoliciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $policie1 = new Policies();
        $policie1->title = 'Code of conduct';
        $policie1->body = 'A code of conduct is a common policy found in most businesses. It is a set of rules that companies expect employees to follow. The rules establish the expected behavioural standards for all employees. A code of conduct policy may cover the following: Attendance and absence,Employee behaviour';
        $policie1->provider_id = 1;
        $policie1->save();

        $policie2 = new Policies();
        $policie2->title = 'Recruitment policy';
        $policie2->body = 'A recruitment policy outlines how the company hires new people. It outlines the hiring process and aims to promote consistency in the recruitment process. Its an important document for employees to access. It may cover the following things:Internal and external hiring preferences,Equal opportunity and anti-discrimination';
        $policie2->provider_id = 1;
        $policie2->save();

        $policie3 = new Policies();
        $policie3->title = 'Internet and email policy';
        $policie3->body = 'This policy outlines how companies expect employees to use their email accounts and the internet. It helps to save time and promote efficiency. It also sets up procedures to minimise risk, which is especially important for secure networks. An internet and email policy may cover the following things:Internet access rules,Appropriate online usage';
        $policie3->provider_id = 2;
        $policie3->save();
    }
}
