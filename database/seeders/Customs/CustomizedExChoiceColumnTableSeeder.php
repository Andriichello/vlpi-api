<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedExChoiceColumnTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('choice_column')->delete();

        \DB::table('choice_column')->insert(array (
            0 =>
            array (
                'id' => 1,
                'choice_id' => 5,
                'column_id' => 1,
                'order' => 1,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            1 =>
            array (
                'id' => 2,
                'choice_id' => 6,
                'column_id' => 1,
                'order' => 2,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            2 =>
            array (
                'id' => 3,
                'choice_id' => 7,
                'column_id' => 1,
                'order' => 3,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            3 =>
            array (
                'id' => 4,
                'choice_id' => 8,
                'column_id' => 1,
                'order' => 4,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            4 =>
            array (
                'id' => 5,
                'choice_id' => 9,
                'column_id' => 1,
                'order' => 5,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            5 =>
            array (
                'id' => 6,
                'choice_id' => 10,
                'column_id' => 2,
                'order' => 1,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            6 =>
            array (
                'id' => 7,
                'choice_id' => 11,
                'column_id' => 2,
                'order' => 2,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            7 =>
            array (
                'id' => 8,
                'choice_id' => 12,
                'column_id' => 2,
                'order' => 3,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            8 =>
            array (
                'id' => 9,
                'choice_id' => 13,
                'column_id' => 2,
                'order' => 4,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            9 =>
            array (
                'id' => 10,
                'choice_id' => 20,
                'column_id' => 3,
                'order' => 1,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            10 =>
            array (
                'id' => 11,
                'choice_id' => 21,
                'column_id' => 3,
                'order' => 2,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            11 =>
            array (
                'id' => 12,
                'choice_id' => 22,
                'column_id' => 3,
                'order' => 3,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            12 =>
            array (
                'id' => 13,
                'choice_id' => 23,
                'column_id' => 3,
                'order' => 4,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            13 =>
            array (
                'id' => 14,
                'choice_id' => 24,
                'column_id' => 3,
                'order' => 5,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            14 =>
            array (
                'id' => 15,
                'choice_id' => 25,
                'column_id' => 3,
                'order' => 6,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            15 =>
            array (
                'id' => 16,
                'choice_id' => 28,
                'column_id' => 4,
                'order' => 1,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            16 =>
            array (
                'id' => 17,
                'choice_id' => 29,
                'column_id' => 4,
                'order' => 2,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            17 =>
            array (
                'id' => 18,
                'choice_id' => 30,
                'column_id' => 4,
                'order' => 3,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            18 =>
            array (
                'id' => 19,
                'choice_id' => 31,
                'column_id' => 4,
                'order' => 4,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            19 =>
            array (
                'id' => 20,
                'choice_id' => 32,
                'column_id' => 4,
                'order' => 5,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            20 =>
            array (
                'id' => 21,
                'choice_id' => 33,
                'column_id' => 5,
                'order' => 1,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            21 =>
            array (
                'id' => 22,
                'choice_id' => 34,
                'column_id' => 5,
                'order' => 2,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            22 =>
            array (
                'id' => 23,
                'choice_id' => 35,
                'column_id' => 5,
                'order' => 3,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            23 =>
            array (
                'id' => 24,
                'choice_id' => 37,
                'column_id' => 6,
                'order' => 1,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            24 =>
            array (
                'id' => 25,
                'choice_id' => 38,
                'column_id' => 6,
                'order' => 2,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            25 =>
            array (
                'id' => 26,
                'choice_id' => 39,
                'column_id' => 6,
                'order' => 3,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            26 =>
            array (
                'id' => 27,
                'choice_id' => 40,
                'column_id' => 6,
                'order' => 4,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            27 =>
            array (
                'id' => 28,
                'choice_id' => 41,
                'column_id' => 6,
                'order' => 5,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            28 =>
            array (
                'id' => 29,
                'choice_id' => 42,
                'column_id' => 7,
                'order' => 1,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            29 =>
            array (
                'id' => 30,
                'choice_id' => 43,
                'column_id' => 7,
                'order' => 2,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            30 =>
            array (
                'id' => 31,
                'choice_id' => 44,
                'column_id' => 7,
                'order' => 3,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            31 =>
            array (
                'id' => 32,
                'choice_id' => 45,
                'column_id' => 7,
                'order' => 4,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            32 =>
            array (
                'id' => 33,
                'choice_id' => 46,
                'column_id' => 7,
                'order' => 5,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            33 =>
            array (
                'id' => 34,
                'choice_id' => 47,
                'column_id' => 7,
                'order' => 6,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            34 =>
            array (
                'id' => 35,
                'choice_id' => 49,
                'column_id' => 8,
                'order' => 1,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            35 =>
            array (
                'id' => 36,
                'choice_id' => 50,
                'column_id' => 8,
                'order' => 2,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            36 =>
            array (
                'id' => 37,
                'choice_id' => 51,
                'column_id' => 8,
                'order' => 3,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            37 =>
            array (
                'id' => 38,
                'choice_id' => 52,
                'column_id' => 8,
                'order' => 4,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            38 =>
            array (
                'id' => 39,
                'choice_id' => 53,
                'column_id' => 8,
                'order' => 5,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            39 =>
            array (
                'id' => 40,
                'choice_id' => 54,
                'column_id' => 8,
                'order' => 6,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            40 =>
            array (
                'id' => 41,
                'choice_id' => 55,
                'column_id' => 8,
                'order' => 7,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            41 =>
            array (
                'id' => 42,
                'choice_id' => 56,
                'column_id' => 8,
                'order' => 8,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
        ));


    }
}
