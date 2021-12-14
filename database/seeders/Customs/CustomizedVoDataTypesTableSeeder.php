<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedVoDataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('data_types')->delete();

        \DB::table('data_types')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'exercises',
                'slug' => 'exercises',
                'display_name_singular' => 'Exercise',
                'display_name_plural' => 'Exercises',
                'icon' => 'voyager-pen',
                'model_name' => 'App\\Models\\Exercise',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"created_at","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2021-12-13 07:08:45',
                'updated_at' => '2021-12-14 15:04:45',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'choices',
                'slug' => 'choices',
                'display_name_singular' => 'Choice',
                'display_name_plural' => 'Choices',
                'icon' => 'voyager-list',
                'model_name' => 'App\\Models\\Choice',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"exercise_id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2021-12-13 07:10:08',
                'updated_at' => '2021-12-14 15:04:23',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'choice_column',
                'slug' => 'choice-column',
                'display_name_singular' => 'Choice Column',
                'display_name_plural' => 'Choice Columns',
                'icon' => 'voyager-check',
                'model_name' => 'App\\Models\\ChoiceColumn',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"column_id","order_display_column":"id","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2021-12-13 07:11:44',
                'updated_at' => '2021-12-14 15:04:17',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'exercise_columns',
                'slug' => 'exercise-columns',
                'display_name_singular' => 'Exercise Column',
                'display_name_plural' => 'Exercise Columns',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\\Models\\ExerciseColumn',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"exercise_id","order_display_column":"title","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2021-12-13 07:13:35',
                'updated_at' => '2021-12-14 15:04:34',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'exercise_column_passings',
                'slug' => 'exercise-column-passings',
                'display_name_singular' => 'Exercise Column Passing',
                'display_name_plural' => 'Exercise Column Passings',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Models\\ExerciseColumnPassing',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"passing_id","order_display_column":"id","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2021-12-14 14:52:42',
                'updated_at' => '2021-12-14 15:04:27',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'exercise_passings',
                'slug' => 'exercise-passings',
                'display_name_singular' => 'Exercise Passing',
                'display_name_plural' => 'Exercise Passings',
                'icon' => 'voyager-categories',
                'model_name' => 'App\\Models\\ExercisePassing',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"updated_at","order_display_column":"id","order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2021-12-14 14:56:40',
                'updated_at' => '2021-12-14 15:04:40',
            ),
        ));


    }
}
