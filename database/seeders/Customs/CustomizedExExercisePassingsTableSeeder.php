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
                'exercise_id' => 3,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 4,
                'exercise_id' => 4,
                'status' => 'graded',
                'mark' => 90,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 4,
                'exercise_id' => 5,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 4,
                'exercise_id' => 5,
                'status' => 'graded',
                'mark' => 37,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            4 =>
            array (
                'id' => 5,
                'user_id' => 4,
                'exercise_id' => 5,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            5 =>
            array (
                'id' => 6,
                'user_id' => 4,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 66,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            6 =>
            array (
                'id' => 7,
                'user_id' => 4,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 88,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            7 =>
            array (
                'id' => 8,
                'user_id' => 4,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            8 =>
            array (
                'id' => 9,
                'user_id' => 4,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            9 =>
            array (
                'id' => 10,
                'user_id' => 4,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 50,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            10 =>
            array (
                'id' => 11,
                'user_id' => 5,
                'exercise_id' => 4,
                'status' => 'graded',
                'mark' => 72,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            11 =>
            array (
                'id' => 12,
                'user_id' => 5,
                'exercise_id' => 5,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            12 =>
            array (
                'id' => 13,
                'user_id' => 5,
                'exercise_id' => 5,
                'status' => 'graded',
                'mark' => 37,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            13 =>
            array (
                'id' => 14,
                'user_id' => 5,
                'exercise_id' => 3,
                'status' => 'graded',
                'mark' => 87,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            14 =>
            array (
                'id' => 15,
                'user_id' => 5,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 33,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            15 =>
            array (
                'id' => 16,
                'user_id' => 5,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 33,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            16 =>
            array (
                'id' => 17,
                'user_id' => 6,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            17 =>
            array (
                'id' => 18,
                'user_id' => 6,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            18 =>
            array (
                'id' => 19,
                'user_id' => 6,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 66,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            19 =>
            array (
                'id' => 20,
                'user_id' => 6,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            20 =>
            array (
                'id' => 21,
                'user_id' => 6,
                'exercise_id' => 4,
                'status' => 'graded',
                'mark' => 72,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:41',
            ),
            21 =>
            array (
                'id' => 22,
                'user_id' => 6,
                'exercise_id' => 4,
                'status' => 'graded',
                'mark' => 90,
                'created_at' => '2021-12-14 19:18:41',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            22 =>
            array (
                'id' => 23,
                'user_id' => 6,
                'exercise_id' => 4,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            23 =>
            array (
                'id' => 24,
                'user_id' => 6,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            24 =>
            array (
                'id' => 25,
                'user_id' => 6,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            25 =>
            array (
                'id' => 26,
                'user_id' => 7,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 88,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            26 =>
            array (
                'id' => 27,
                'user_id' => 7,
                'exercise_id' => 4,
                'status' => 'graded',
                'mark' => 81,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            27 =>
            array (
                'id' => 28,
                'user_id' => 7,
                'exercise_id' => 5,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            28 =>
            array (
                'id' => 29,
                'user_id' => 7,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            29 =>
            array (
                'id' => 30,
                'user_id' => 7,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            30 =>
            array (
                'id' => 31,
                'user_id' => 8,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            31 =>
            array (
                'id' => 32,
                'user_id' => 8,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 66,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            32 =>
            array (
                'id' => 33,
                'user_id' => 9,
                'exercise_id' => 4,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            33 =>
            array (
                'id' => 34,
                'user_id' => 9,
                'exercise_id' => 4,
                'status' => 'graded',
                'mark' => 81,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:42',
            ),
            34 =>
            array (
                'id' => 35,
                'user_id' => 9,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 50,
                'created_at' => '2021-12-14 19:18:42',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            35 =>
            array (
                'id' => 36,
                'user_id' => 9,
                'exercise_id' => 1,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            36 =>
            array (
                'id' => 37,
                'user_id' => 9,
                'exercise_id' => 5,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            37 =>
            array (
                'id' => 38,
                'user_id' => 9,
                'exercise_id' => 5,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            38 =>
            array (
                'id' => 39,
                'user_id' => 9,
                'exercise_id' => 5,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            39 =>
            array (
                'id' => 40,
                'user_id' => 10,
                'exercise_id' => 3,
                'status' => 'graded',
                'mark' => 62,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            40 =>
            array (
                'id' => 41,
                'user_id' => 10,
                'exercise_id' => 5,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            41 =>
            array (
                'id' => 42,
                'user_id' => 10,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 66,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            42 =>
            array (
                'id' => 43,
                'user_id' => 10,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            43 =>
            array (
                'id' => 44,
                'user_id' => 10,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            44 =>
            array (
                'id' => 45,
                'user_id' => 10,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            45 =>
            array (
                'id' => 46,
                'user_id' => 10,
                'exercise_id' => 4,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            46 =>
            array (
                'id' => 47,
                'user_id' => 10,
                'exercise_id' => 4,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            47 =>
            array (
                'id' => 48,
                'user_id' => 10,
                'exercise_id' => 4,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            48 =>
            array (
                'id' => 49,
                'user_id' => 11,
                'exercise_id' => 1,
                'status' => 'graded',
                'mark' => 77,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            49 =>
            array (
                'id' => 50,
                'user_id' => 11,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:43',
                'updated_at' => '2021-12-14 19:18:43',
            ),
            50 =>
            array (
                'id' => 51,
                'user_id' => 11,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 66,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            51 =>
            array (
                'id' => 52,
                'user_id' => 11,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            52 =>
            array (
                'id' => 53,
                'user_id' => 11,
                'exercise_id' => 4,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            53 =>
            array (
                'id' => 54,
                'user_id' => 11,
                'exercise_id' => 4,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            54 =>
            array (
                'id' => 55,
                'user_id' => 11,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            55 =>
            array (
                'id' => 56,
                'user_id' => 11,
                'exercise_id' => 3,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            56 =>
            array (
                'id' => 57,
                'user_id' => 11,
                'exercise_id' => 3,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            57 =>
            array (
                'id' => 58,
                'user_id' => 12,
                'exercise_id' => 5,
                'status' => 'graded',
                'mark' => 75,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            58 =>
            array (
                'id' => 59,
                'user_id' => 12,
                'exercise_id' => 5,
                'status' => 'graded',
                'mark' => 50,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            59 =>
            array (
                'id' => 60,
                'user_id' => 12,
                'exercise_id' => 4,
                'status' => 'graded',
                'mark' => 81,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            60 =>
            array (
                'id' => 61,
                'user_id' => 13,
                'exercise_id' => 5,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            61 =>
            array (
                'id' => 62,
                'user_id' => 13,
                'exercise_id' => 5,
                'status' => 'graded',
                'mark' => 50,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            62 =>
            array (
                'id' => 63,
                'user_id' => 13,
                'exercise_id' => 2,
                'status' => 'draft',
                'mark' => NULL,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
            63 =>
            array (
                'id' => 64,
                'user_id' => 13,
                'exercise_id' => 2,
                'status' => 'graded',
                'mark' => 100,
                'created_at' => '2021-12-14 19:18:44',
                'updated_at' => '2021-12-14 19:18:44',
            ),
        ));


    }
}
