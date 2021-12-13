<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedUsExercisesTableSeeder extends Seeder
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
                'user_id' => 2,
                'title' => 'Automated testing: General',
                'description' => NULL,
                'max_choices' => 13,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 2,
                'title' => 'Integration Testing: Process',
                'description' => NULL,
                'max_choices' => 12,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 2,
                'title' => 'Unit testing: Structure',
                'description' => NULL,
                'max_choices' => 10,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => NULL,
                'title' => 'Some exercise',
                'description' => 'Some description',
                'max_choices' => 10,
                'type' => 'ordering',
                'min_mark' => 60,
                'created_at' => '2021-12-13 07:17:33',
                'updated_at' => '2021-12-13 07:17:33',
            ),
        ));


    }
}
