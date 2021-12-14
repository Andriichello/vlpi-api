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
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 1,
                'mark' => 58,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 4,
            ),
            1 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 5,
                'id' => 2,
                'mark' => 83,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 4,
            ),
            2 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 4,
                'id' => 3,
                'mark' => 90,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 4,
            ),
            3 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 5,
                'id' => 4,
                'mark' => 66,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 5,
            ),
            4 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 5,
                'id' => 5,
                'mark' => 91,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 5,
            ),
            5 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 5,
                'id' => 6,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 5,
            ),
            6 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 1,
                'id' => 7,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 5,
            ),
            7 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 3,
                'id' => 8,
                'mark' => 62,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 5,
            ),
            8 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 2,
                'id' => 9,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 5,
            ),
            9 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 2,
                'id' => 10,
                'mark' => 66,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 5,
            ),
            10 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 2,
                'id' => 11,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 5,
            ),
            11 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 4,
                'id' => 12,
                'mark' => 54,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 5,
            ),
            12 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 3,
                'id' => 13,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 6,
            ),
            13 =>
            array (
                'created_at' => '2021-12-14 21:02:03',
                'exercise_id' => 5,
                'id' => 14,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:03',
                'user_id' => 6,
            ),
            14 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 5,
                'id' => 15,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 6,
            ),
            15 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 5,
                'id' => 16,
                'mark' => 83,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 6,
            ),
            16 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 4,
                'id' => 17,
                'mark' => 81,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 6,
            ),
            17 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 1,
                'id' => 18,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 6,
            ),
            18 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 2,
                'id' => 19,
                'mark' => 66,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 6,
            ),
            19 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 2,
                'id' => 20,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 6,
            ),
            20 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 2,
                'id' => 21,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 6,
            ),
            21 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 1,
                'id' => 22,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 7,
            ),
            22 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 4,
                'id' => 23,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 7,
            ),
            23 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 4,
                'id' => 24,
                'mark' => 90,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 7,
            ),
            24 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 4,
                'id' => 25,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 7,
            ),
            25 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 5,
                'id' => 26,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 8,
            ),
            26 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 5,
                'id' => 27,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 8,
            ),
            27 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 2,
                'id' => 28,
                'mark' => 83,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 8,
            ),
            28 =>
            array (
                'created_at' => '2021-12-14 21:02:04',
                'exercise_id' => 2,
                'id' => 29,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:04',
                'user_id' => 8,
            ),
            29 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 2,
                'id' => 30,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 8,
            ),
            30 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 4,
                'id' => 31,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 9,
            ),
            31 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 4,
                'id' => 32,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 9,
            ),
            32 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 4,
                'id' => 33,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 9,
            ),
            33 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 1,
                'id' => 34,
                'mark' => 77,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 9,
            ),
            34 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 5,
                'id' => 35,
                'mark' => 83,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 9,
            ),
            35 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 5,
                'id' => 36,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 9,
            ),
            36 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 5,
                'id' => 37,
                'mark' => 91,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 10,
            ),
            37 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 5,
                'id' => 38,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 10,
            ),
            38 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 2,
                'id' => 39,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 10,
            ),
            39 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 2,
                'id' => 40,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 10,
            ),
            40 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 2,
                'id' => 41,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 10,
            ),
            41 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 4,
                'id' => 42,
                'mark' => 72,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 10,
            ),
            42 =>
            array (
                'created_at' => '2021-12-14 21:02:05',
                'exercise_id' => 1,
                'id' => 43,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:05',
                'user_id' => 10,
            ),
            43 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 1,
                'id' => 44,
                'mark' => 88,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 10,
            ),
            44 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 1,
                'id' => 45,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 10,
            ),
            45 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 3,
                'id' => 46,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 10,
            ),
            46 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 3,
                'id' => 47,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 10,
            ),
            47 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 5,
                'id' => 48,
                'mark' => 75,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 11,
            ),
            48 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 5,
                'id' => 49,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 11,
            ),
            49 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 5,
                'id' => 50,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 11,
            ),
            50 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 2,
                'id' => 51,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 11,
            ),
            51 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 2,
                'id' => 52,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 11,
            ),
            52 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 3,
                'id' => 53,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 11,
            ),
            53 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 3,
                'id' => 54,
                'mark' => 75,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 11,
            ),
            54 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 3,
                'id' => 55,
                'mark' => 75,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 11,
            ),
            55 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 4,
                'id' => 56,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 11,
            ),
            56 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 4,
                'id' => 57,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:06',
                'user_id' => 11,
            ),
            57 =>
            array (
                'created_at' => '2021-12-14 21:02:06',
                'exercise_id' => 4,
                'id' => 58,
                'mark' => 81,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 11,
            ),
            58 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 2,
                'id' => 59,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 12,
            ),
            59 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 5,
                'id' => 60,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 12,
            ),
            60 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 3,
                'id' => 61,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 12,
            ),
            61 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 3,
                'id' => 62,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 12,
            ),
            62 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 3,
                'id' => 63,
                'mark' => 50,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 12,
            ),
            63 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 4,
                'id' => 64,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 12,
            ),
            64 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 4,
                'id' => 65,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 12,
            ),
            65 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 1,
                'id' => 66,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 12,
            ),
            66 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 1,
                'id' => 67,
                'mark' => 66,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 13,
            ),
            67 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 1,
                'id' => 68,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 13,
            ),
            68 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 2,
                'id' => 69,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 13,
            ),
            69 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 2,
                'id' => 70,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 13,
            ),
            70 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 2,
                'id' => 71,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 13,
            ),
            71 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 4,
                'id' => 72,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 13,
            ),
            72 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 3,
                'id' => 73,
                'mark' => 100,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 13,
            ),
            73 =>
            array (
                'created_at' => '2021-12-14 21:02:07',
                'exercise_id' => 3,
                'id' => 74,
                'mark' => NULL,
                'status' => 'draft',
                'updated_at' => '2021-12-14 21:02:07',
                'user_id' => 13,
            ),
            74 =>
            array (
                'created_at' => '2021-12-14 21:02:08',
                'exercise_id' => 3,
                'id' => 75,
                'mark' => 75,
                'status' => 'graded',
                'updated_at' => '2021-12-14 21:02:08',
                'user_id' => 13,
            ),
        ));


    }
}
