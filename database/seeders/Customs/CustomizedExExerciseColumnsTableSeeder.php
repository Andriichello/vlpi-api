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
                'created_at' => '2021-12-14 11:21:50',
                'updated_at' => '2021-12-14 11:21:50',
            ),
            1 =>
            array (
                'id' => 2,
                'exercise_id' => 1,
                'title' => 'Execution',
                'max_choices' => 4,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            2 =>
            array (
                'id' => 3,
                'exercise_id' => 2,
                'title' => 'Process',
                'max_choices' => 6,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            3 =>
            array (
                'id' => 4,
                'exercise_id' => 3,
                'title' => 'General structure',
                'max_choices' => 5,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            4 =>
            array (
                'id' => 5,
                'exercise_id' => 3,
                'title' => 'AAA',
                'max_choices' => 3,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
        ));


    }
}
