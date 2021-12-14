<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedExExerciseColumnsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('exercise_columns')->delete();

        \DB::table('exercise_columns')->insert(array (
            0 =>
            array (
                'id' => 1,
                'exercise_id' => 1,
                'title' => 'Whole process',
                'max_choices' => 5,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            1 =>
            array (
                'id' => 2,
                'exercise_id' => 1,
                'title' => 'Execution',
                'max_choices' => 4,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            2 =>
            array (
                'id' => 3,
                'exercise_id' => 2,
                'title' => 'Process',
                'max_choices' => 6,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            3 =>
            array (
                'id' => 4,
                'exercise_id' => 3,
                'title' => 'General structure',
                'max_choices' => 5,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            4 =>
            array (
                'id' => 5,
                'exercise_id' => 3,
                'title' => 'AAA',
                'max_choices' => 3,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            5 =>
            array (
                'id' => 6,
                'exercise_id' => 4,
                'title' => 'Start with XUnit',
                'max_choices' => 5,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            6 =>
            array (
                'id' => 7,
                'exercise_id' => 4,
                'title' => 'Start with NUnit',
                'max_choices' => 6,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            7 =>
            array (
                'id' => 8,
                'exercise_id' => 5,
                'title' => 'General',
                'max_choices' => 8,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
        ));


    }
}
