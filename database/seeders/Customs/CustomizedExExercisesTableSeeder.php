<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedExExercisesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('exercises')->delete();

        \DB::table('exercises')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 3,
                'title' => 'Automated testing: General',
                'description' => NULL,
                'max_choices' => 13,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-14 11:21:50',
                'updated_at' => '2021-12-14 11:21:50',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 3,
                'title' => 'Integration Testing: Process',
                'description' => NULL,
                'max_choices' => 12,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 3,
                'title' => 'Unit testing: Structure',
                'description' => NULL,
                'max_choices' => 10,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
        ));


    }
}
