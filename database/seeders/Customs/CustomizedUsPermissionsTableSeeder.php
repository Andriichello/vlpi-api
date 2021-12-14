<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedUsPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            1 =>
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            2 =>
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            3 =>
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            4 =>
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            5 =>
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            6 =>
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            7 =>
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            8 =>
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            9 =>
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            10 =>
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            11 =>
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            12 =>
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            13 =>
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            14 =>
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            15 =>
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            16 =>
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            17 =>
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            18 =>
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            19 =>
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            20 =>
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            21 =>
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            22 =>
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            23 =>
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            24 =>
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            25 =>
            array (
                'id' => 26,
                'key' => 'browse_exercises',
                'table_name' => 'exercises',
                'created_at' => '2021-12-13 07:08:46',
                'updated_at' => '2021-12-13 07:08:46',
            ),
            26 =>
            array (
                'id' => 27,
                'key' => 'read_exercises',
                'table_name' => 'exercises',
                'created_at' => '2021-12-13 07:08:46',
                'updated_at' => '2021-12-13 07:08:46',
            ),
            27 =>
            array (
                'id' => 28,
                'key' => 'edit_exercises',
                'table_name' => 'exercises',
                'created_at' => '2021-12-13 07:08:46',
                'updated_at' => '2021-12-13 07:08:46',
            ),
            28 =>
            array (
                'id' => 29,
                'key' => 'add_exercises',
                'table_name' => 'exercises',
                'created_at' => '2021-12-13 07:08:46',
                'updated_at' => '2021-12-13 07:08:46',
            ),
            29 =>
            array (
                'id' => 30,
                'key' => 'delete_exercises',
                'table_name' => 'exercises',
                'created_at' => '2021-12-13 07:08:46',
                'updated_at' => '2021-12-13 07:08:46',
            ),
            30 =>
            array (
                'id' => 31,
                'key' => 'browse_choices',
                'table_name' => 'choices',
                'created_at' => '2021-12-13 07:10:08',
                'updated_at' => '2021-12-13 07:10:08',
            ),
            31 =>
            array (
                'id' => 32,
                'key' => 'read_choices',
                'table_name' => 'choices',
                'created_at' => '2021-12-13 07:10:08',
                'updated_at' => '2021-12-13 07:10:08',
            ),
            32 =>
            array (
                'id' => 33,
                'key' => 'edit_choices',
                'table_name' => 'choices',
                'created_at' => '2021-12-13 07:10:08',
                'updated_at' => '2021-12-13 07:10:08',
            ),
            33 =>
            array (
                'id' => 34,
                'key' => 'add_choices',
                'table_name' => 'choices',
                'created_at' => '2021-12-13 07:10:08',
                'updated_at' => '2021-12-13 07:10:08',
            ),
            34 =>
            array (
                'id' => 35,
                'key' => 'delete_choices',
                'table_name' => 'choices',
                'created_at' => '2021-12-13 07:10:08',
                'updated_at' => '2021-12-13 07:10:08',
            ),
            35 =>
            array (
                'id' => 36,
                'key' => 'browse_choice_column',
                'table_name' => 'choice_column',
                'created_at' => '2021-12-13 07:11:44',
                'updated_at' => '2021-12-13 07:11:44',
            ),
            36 =>
            array (
                'id' => 37,
                'key' => 'read_choice_column',
                'table_name' => 'choice_column',
                'created_at' => '2021-12-13 07:11:44',
                'updated_at' => '2021-12-13 07:11:44',
            ),
            37 =>
            array (
                'id' => 38,
                'key' => 'edit_choice_column',
                'table_name' => 'choice_column',
                'created_at' => '2021-12-13 07:11:44',
                'updated_at' => '2021-12-13 07:11:44',
            ),
            38 =>
            array (
                'id' => 39,
                'key' => 'add_choice_column',
                'table_name' => 'choice_column',
                'created_at' => '2021-12-13 07:11:44',
                'updated_at' => '2021-12-13 07:11:44',
            ),
            39 =>
            array (
                'id' => 40,
                'key' => 'delete_choice_column',
                'table_name' => 'choice_column',
                'created_at' => '2021-12-13 07:11:44',
                'updated_at' => '2021-12-13 07:11:44',
            ),
            40 =>
            array (
                'id' => 41,
                'key' => 'browse_exercise_columns',
                'table_name' => 'exercise_columns',
                'created_at' => '2021-12-13 07:13:35',
                'updated_at' => '2021-12-13 07:13:35',
            ),
            41 =>
            array (
                'id' => 42,
                'key' => 'read_exercise_columns',
                'table_name' => 'exercise_columns',
                'created_at' => '2021-12-13 07:13:35',
                'updated_at' => '2021-12-13 07:13:35',
            ),
            42 =>
            array (
                'id' => 43,
                'key' => 'edit_exercise_columns',
                'table_name' => 'exercise_columns',
                'created_at' => '2021-12-13 07:13:35',
                'updated_at' => '2021-12-13 07:13:35',
            ),
            43 =>
            array (
                'id' => 44,
                'key' => 'add_exercise_columns',
                'table_name' => 'exercise_columns',
                'created_at' => '2021-12-13 07:13:35',
                'updated_at' => '2021-12-13 07:13:35',
            ),
            44 =>
            array (
                'id' => 45,
                'key' => 'delete_exercise_columns',
                'table_name' => 'exercise_columns',
                'created_at' => '2021-12-13 07:13:35',
                'updated_at' => '2021-12-13 07:13:35',
            ),
            45 =>
            array (
                'id' => 46,
                'key' => 'browse_exercise_column_passings',
                'table_name' => 'exercise_column_passings',
                'created_at' => '2021-12-14 15:23:22',
                'updated_at' => '2021-12-14 15:23:22',
            ),
            46 =>
            array (
                'id' => 47,
                'key' => 'read_exercise_column_passings',
                'table_name' => 'exercise_column_passings',
                'created_at' => '2021-12-14 15:23:22',
                'updated_at' => '2021-12-14 15:23:22',
            ),
            47 =>
            array (
                'id' => 48,
                'key' => 'edit_exercise_column_passings',
                'table_name' => 'exercise_column_passings',
                'created_at' => '2021-12-14 15:23:22',
                'updated_at' => '2021-12-14 15:23:22',
            ),
            48 =>
            array (
                'id' => 49,
                'key' => 'add_exercise_column_passings',
                'table_name' => 'exercise_column_passings',
                'created_at' => '2021-12-14 15:23:22',
                'updated_at' => '2021-12-14 15:23:22',
            ),
            49 =>
            array (
                'id' => 50,
                'key' => 'delete_exercise_column_passings',
                'table_name' => 'exercise_column_passings',
                'created_at' => '2021-12-14 15:23:22',
                'updated_at' => '2021-12-14 15:23:22',
            ),
            50 =>
            array (
                'id' => 51,
                'key' => 'browse_exercise_passings',
                'table_name' => 'exercise_passings',
                'created_at' => '2021-12-14 15:23:57',
                'updated_at' => '2021-12-14 15:23:57',
            ),
            51 =>
            array (
                'id' => 52,
                'key' => 'read_exercise_passings',
                'table_name' => 'exercise_passings',
                'created_at' => '2021-12-14 15:23:57',
                'updated_at' => '2021-12-14 15:23:57',
            ),
            52 =>
            array (
                'id' => 53,
                'key' => 'edit_exercise_passings',
                'table_name' => 'exercise_passings',
                'created_at' => '2021-12-14 15:23:57',
                'updated_at' => '2021-12-14 15:23:57',
            ),
            53 =>
            array (
                'id' => 54,
                'key' => 'add_exercise_passings',
                'table_name' => 'exercise_passings',
                'created_at' => '2021-12-14 15:23:57',
                'updated_at' => '2021-12-14 15:23:57',
            ),
            54 =>
            array (
                'id' => 55,
                'key' => 'delete_exercise_passings',
                'table_name' => 'exercise_passings',
                'created_at' => '2021-12-14 15:23:57',
                'updated_at' => '2021-12-14 15:23:57',
            ),
        ));


    }
}
