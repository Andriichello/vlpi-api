<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedUsRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'student',
                'display_name' => 'Student',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
        ));


    }
}
