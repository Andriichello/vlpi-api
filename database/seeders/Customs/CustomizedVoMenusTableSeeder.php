<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedVoMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('menus')->delete();

        \DB::table('menus')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
        ));


    }
}
