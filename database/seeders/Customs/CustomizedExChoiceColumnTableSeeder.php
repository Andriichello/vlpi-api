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
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            1 =>
            array (
                'id' => 2,
                'choice_id' => 6,
                'column_id' => 1,
                'order' => 2,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            2 =>
            array (
                'id' => 3,
                'choice_id' => 7,
                'column_id' => 1,
                'order' => 3,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            3 =>
            array (
                'id' => 4,
                'choice_id' => 8,
                'column_id' => 1,
                'order' => 4,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            4 =>
            array (
                'id' => 5,
                'choice_id' => 9,
                'column_id' => 1,
                'order' => 5,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            5 =>
            array (
                'id' => 6,
                'choice_id' => 10,
                'column_id' => 2,
                'order' => 1,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            6 =>
            array (
                'id' => 7,
                'choice_id' => 11,
                'column_id' => 2,
                'order' => 2,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            7 =>
            array (
                'id' => 8,
                'choice_id' => 12,
                'column_id' => 2,
                'order' => 3,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            8 =>
            array (
                'id' => 9,
                'choice_id' => 13,
                'column_id' => 2,
                'order' => 4,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            9 =>
            array (
                'id' => 10,
                'choice_id' => 20,
                'column_id' => 3,
                'order' => 1,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            10 =>
            array (
                'id' => 11,
                'choice_id' => 21,
                'column_id' => 3,
                'order' => 2,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            11 =>
            array (
                'id' => 12,
                'choice_id' => 22,
                'column_id' => 3,
                'order' => 3,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            12 =>
            array (
                'id' => 13,
                'choice_id' => 23,
                'column_id' => 3,
                'order' => 4,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            13 =>
            array (
                'id' => 14,
                'choice_id' => 24,
                'column_id' => 3,
                'order' => 5,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            14 =>
            array (
                'id' => 15,
                'choice_id' => 25,
                'column_id' => 3,
                'order' => 6,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            15 =>
            array (
                'id' => 16,
                'choice_id' => 28,
                'column_id' => 4,
                'order' => 1,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            16 =>
            array (
                'id' => 17,
                'choice_id' => 29,
                'column_id' => 4,
                'order' => 2,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            17 =>
            array (
                'id' => 18,
                'choice_id' => 30,
                'column_id' => 4,
                'order' => 3,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            18 =>
            array (
                'id' => 19,
                'choice_id' => 31,
                'column_id' => 4,
                'order' => 4,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            19 =>
            array (
                'id' => 20,
                'choice_id' => 32,
                'column_id' => 4,
                'order' => 5,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            20 =>
            array (
                'id' => 21,
                'choice_id' => 33,
                'column_id' => 5,
                'order' => 1,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            21 =>
            array (
                'id' => 22,
                'choice_id' => 34,
                'column_id' => 5,
                'order' => 2,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
            22 =>
            array (
                'id' => 23,
                'choice_id' => 35,
                'column_id' => 5,
                'order' => 3,
                'created_at' => '2021-12-14 11:21:51',
                'updated_at' => '2021-12-14 11:21:51',
            ),
        ));


    }
}
