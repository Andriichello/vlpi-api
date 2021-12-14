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
                'user_id' => 1,
                'title' => 'Automated testing: General',
                'description' => NULL,
                'max_choices' => 13,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 1,
                'title' => 'Integration Testing: Process',
                'description' => NULL,
                'max_choices' => 12,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 1,
                'title' => 'Unit testing: Structure',
                'description' => NULL,
                'max_choices' => 10,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 1,
                'title' => 'Unit testing: Structure',
                'description' => NULL,
                'max_choices' => 12,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            4 =>
            array (
                'id' => 5,
                'user_id' => 1,
                'title' => 'Manual Testing: Postman',
                'description' => NULL,
                'max_choices' => 9,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
        ));


    }
}
