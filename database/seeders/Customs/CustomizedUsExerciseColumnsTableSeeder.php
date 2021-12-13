<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedUsExerciseColumnsTableSeeder extends Seeder
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
                'title' => '',
                'max_choices' => 4,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            1 =>
            array (
                'id' => 2,
                'exercise_id' => 1,
                'title' => 'Whole process',
                'max_choices' => 5,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            2 =>
            array (
                'id' => 3,
                'exercise_id' => 1,
                'title' => 'Execution',
                'max_choices' => 4,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            3 =>
            array (
                'id' => 4,
                'exercise_id' => 2,
                'title' => '',
                'max_choices' => 6,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            4 =>
            array (
                'id' => 5,
                'exercise_id' => 2,
                'title' => 'Process',
                'max_choices' => 6,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            5 =>
            array (
                'id' => 6,
                'exercise_id' => 3,
                'title' => '',
                'max_choices' => 2,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            6 =>
            array (
                'id' => 7,
                'exercise_id' => 3,
                'title' => 'General structure',
                'max_choices' => 5,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            7 =>
            array (
                'id' => 8,
                'exercise_id' => 3,
                'title' => 'AAA',
                'max_choices' => 3,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            8 =>
            array (
                'id' => 9,
                'exercise_id' => 4,
                'title' => 'Some column title',
                'max_choices' => 3,
                'created_at' => '2021-12-13 07:23:25',
                'updated_at' => '2021-12-13 07:23:25',
            ),
        ));


    }
}
