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
                'created_at' => '2021-12-14 21:02:02',
                'description' => NULL,
                'id' => 1,
                'max_choices' => 13,
                'min_mark' => 80,
                'title' => 'Automated testing: General',
                'type' => 'ordering',
                'updated_at' => '2021-12-14 21:02:02',
                'user_id' => 1,
            ),
            1 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'description' => NULL,
                'id' => 2,
                'max_choices' => 12,
                'min_mark' => 80,
                'title' => 'Integration Testing: Process',
                'type' => 'ordering',
                'updated_at' => '2021-12-14 21:02:02',
                'user_id' => 1,
            ),
            2 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'description' => NULL,
                'id' => 3,
                'max_choices' => 10,
                'min_mark' => 90,
                'title' => 'Unit testing: Structure',
                'type' => 'ordering',
                'updated_at' => '2021-12-14 21:02:02',
                'user_id' => 1,
            ),
            3 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'description' => NULL,
                'id' => 4,
                'max_choices' => 12,
                'min_mark' => 70,
                'title' => 'Unit testing: Structure',
                'type' => 'ordering',
                'updated_at' => '2021-12-14 21:02:02',
                'user_id' => 1,
            ),
            4 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'description' => NULL,
                'id' => 5,
                'max_choices' => 19,
                'min_mark' => 85,
                'title' => 'Manual Testing: Postman',
                'type' => 'ordering',
                'updated_at' => '2021-12-14 21:02:02',
                'user_id' => 1,
            ),
        ));


    }
}
