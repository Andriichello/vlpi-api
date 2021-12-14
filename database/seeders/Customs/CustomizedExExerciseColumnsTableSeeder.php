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
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 1,
                'max_choices' => 5,
                'title' => 'Whole process',
                'updated_at' => '2021-12-14 21:02:02',
            ),
            1 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 2,
                'max_choices' => 4,
                'title' => 'Execution',
                'updated_at' => '2021-12-14 21:02:02',
            ),
            2 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 3,
                'max_choices' => 6,
                'title' => 'Process',
                'updated_at' => '2021-12-14 21:02:02',
            ),
            3 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 4,
                'max_choices' => 5,
                'title' => 'General structure',
                'updated_at' => '2021-12-14 21:02:02',
            ),
            4 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 5,
                'max_choices' => 3,
                'title' => 'AAA',
                'updated_at' => '2021-12-14 21:02:02',
            ),
            5 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 6,
                'max_choices' => 5,
                'title' => 'Start with XUnit',
                'updated_at' => '2021-12-14 21:02:02',
            ),
            6 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 7,
                'max_choices' => 6,
                'title' => 'Start with NUnit',
                'updated_at' => '2021-12-14 21:02:02',
            ),
            7 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 8,
                'max_choices' => 8,
                'title' => 'General',
                'updated_at' => '2021-12-14 21:02:02',
            ),
            8 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 9,
                'max_choices' => 4,
                'title' => 'JSON',
                'updated_at' => '2021-12-14 21:02:02',
            ),
        ));


    }
}
