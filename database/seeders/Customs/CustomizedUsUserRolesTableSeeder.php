<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedUsUserRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('user_roles')->delete();



    }
}
