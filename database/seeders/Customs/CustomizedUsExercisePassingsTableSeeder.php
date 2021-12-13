<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedUsExercisePassingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('exercise_passings')->delete();

        \DB::table('exercise_passings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 10,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => 0,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 8,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => 0,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 10,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => 0,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 6,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => 0,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            4 =>
            array (
                'id' => 5,
                'user_id' => 13,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => 0,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            5 =>
            array (
                'id' => 6,
                'user_id' => 4,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => 0,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            6 =>
            array (
                'id' => 7,
                'user_id' => 4,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => 0,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            7 =>
            array (
                'id' => 8,
                'user_id' => 13,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => 0,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            8 =>
            array (
                'id' => 9,
                'user_id' => 7,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => 0,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            9 =>
            array (
                'id' => 10,
                'user_id' => 8,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => 0,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
        ));


    }
}
