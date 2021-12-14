<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedExExercisePassingsTableSeeder extends Seeder
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
                'user_id' => 4,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 4,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 4,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 4,
                'exercise_id' => 3,
                'status' => 'graded',
                'mark' => 87,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            4 =>
            array (
                'id' => 5,
                'user_id' => 5,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 44,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            5 =>
            array (
                'id' => 6,
                'user_id' => 5,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 88,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            6 =>
            array (
                'id' => 7,
                'user_id' => 5,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            7 =>
            array (
                'id' => 8,
                'user_id' => 5,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            8 =>
            array (
                'id' => 9,
                'user_id' => 5,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            9 =>
            array (
                'id' => 10,
                'user_id' => 5,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            10 =>
            array (
                'id' => 11,
                'user_id' => 5,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            11 =>
            array (
                'id' => 12,
                'user_id' => 5,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            12 =>
            array (
                'id' => 13,
                'user_id' => 6,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            13 =>
            array (
                'id' => 14,
                'user_id' => 6,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 66,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            14 =>
            array (
                'id' => 15,
                'user_id' => 6,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            15 =>
            array (
                'id' => 16,
                'user_id' => 6,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            16 =>
            array (
                'id' => 17,
                'user_id' => 6,
                'exercise_id' => 3,
                'status' => 'graded',
                'mark' => 75,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            17 =>
            array (
                'id' => 18,
                'user_id' => 6,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            18 =>
            array (
                'id' => 19,
                'user_id' => 7,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            19 =>
            array (
                'id' => 20,
                'user_id' => 7,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 50,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            20 =>
            array (
                'id' => 21,
                'user_id' => 7,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 50,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            21 =>
            array (
                'id' => 22,
                'user_id' => 7,
                'exercise_id' => 3,
                'status' => 'graded',
                'mark' => 75,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            22 =>
            array (
                'id' => 23,
                'user_id' => 8,
                'exercise_id' => 3,
                'status' => 'graded',
                'mark' => 87,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            23 =>
            array (
                'id' => 24,
                'user_id' => 8,
                'exercise_id' => 3,
                'status' => 'graded',
                'mark' => 62,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            24 =>
            array (
                'id' => 25,
                'user_id' => 8,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            25 =>
            array (
                'id' => 26,
                'user_id' => 8,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 50,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            26 =>
            array (
                'id' => 27,
                'user_id' => 8,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            27 =>
            array (
                'id' => 28,
                'user_id' => 8,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 66,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            28 =>
            array (
                'id' => 29,
                'user_id' => 8,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            29 =>
            array (
                'id' => 30,
                'user_id' => 9,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            30 =>
            array (
                'id' => 31,
                'user_id' => 9,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            31 =>
            array (
                'id' => 32,
                'user_id' => 9,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            32 =>
            array (
                'id' => 33,
                'user_id' => 10,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            33 =>
            array (
                'id' => 34,
                'user_id' => 10,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            34 =>
            array (
                'id' => 35,
                'user_id' => 10,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            35 =>
            array (
                'id' => 36,
                'user_id' => 11,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 66,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            36 =>
            array (
                'id' => 37,
                'user_id' => 11,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:52',
                'updated_at' => '2021-12-14 11:21:52',
            ),
            37 =>
            array (
                'id' => 38,
                'user_id' => 11,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            38 =>
            array (
                'id' => 39,
                'user_id' => 11,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            39 =>
            array (
                'id' => 40,
                'user_id' => 12,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            40 =>
            array (
                'id' => 41,
                'user_id' => 12,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            41 =>
            array (
                'id' => 42,
                'user_id' => 12,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 33,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            42 =>
            array (
                'id' => 43,
                'user_id' => 12,
                'exercise_id' => 3,
                'status' => 'graded',
                'mark' => 87,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            43 =>
            array (
                'id' => 44,
                'user_id' => 12,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 66,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            44 =>
            array (
                'id' => 45,
                'user_id' => 12,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            45 =>
            array (
                'id' => 46,
                'user_id' => 12,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 88,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            46 =>
            array (
                'id' => 47,
                'user_id' => 13,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            47 =>
            array (
                'id' => 48,
                'user_id' => 13,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            48 =>
            array (
                'id' => 49,
                'user_id' => 13,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            49 =>
            array (
                'id' => 50,
                'user_id' => 13,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            50 =>
            array (
                'id' => 51,
                'user_id' => 13,
                'exercise_id' => 3,
                'status' => 'graded',
                'mark' => 87,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            51 =>
            array (
                'id' => 52,
                'user_id' => 13,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 66,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            52 =>
            array (
                'id' => 53,
                'user_id' => 13,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => null,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
            53 =>
            array (
                'id' => 54,
                'user_id' => 13,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 11:21:53',
                'updated_at' => '2021-12-14 11:21:53',
            ),
        ));


    }
}
