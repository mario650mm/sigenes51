<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
            factory('App\User', 50)->create();
            factory('App\Applicant', 20)->create();
            factory('App\Partner', 50)->create();
            factory('App\Teacher', 50)->create();
        Model::reguard();
    }
}
