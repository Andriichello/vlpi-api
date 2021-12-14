<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedVoMenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('menu_items')->delete();

        \DB::table('menu_items')->insert(array (
            0 =>
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-14 15:00:56',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-14 15:00:56',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-14 15:00:56',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-14 15:00:56',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:14:41',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:14:41',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:14:41',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:14:41',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-14 15:00:56',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Exercises',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-pen',
                'color' => NULL,
                'parent_id' => 15,
                'order' => 1,
                'created_at' => '2021-12-13 07:08:46',
                'updated_at' => '2021-12-13 07:14:47',
                'route' => 'voyager.exercises.index',
                'parameters' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Choices',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 15,
                'order' => 3,
                'created_at' => '2021-12-13 07:10:08',
                'updated_at' => '2021-12-13 07:14:47',
                'route' => 'voyager.choices.index',
                'parameters' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Choice Columns',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-check',
                'color' => NULL,
                'parent_id' => 15,
                'order' => 4,
                'created_at' => '2021-12-13 07:11:44',
                'updated_at' => '2021-12-13 07:14:47',
                'route' => 'voyager.choice-column.index',
                'parameters' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Exercise Columns',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-window-list',
                'color' => NULL,
                'parent_id' => 15,
                'order' => 2,
                'created_at' => '2021-12-13 07:13:35',
                'updated_at' => '2021-12-13 07:14:47',
                'route' => 'voyager.exercise-columns.index',
                'parameters' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Exercises',
                'url' => 'entities',
                'target' => '_self',
                'icon_class' => 'voyager-book',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2021-12-13 07:14:35',
                'updated_at' => '2021-12-14 15:01:15',
                'route' => NULL,
                'parameters' => '',
            ),
            15 =>
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Exercise Column Passings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-documentation',
                'color' => NULL,
                'parent_id' => 18,
                'order' => 2,
                'created_at' => '2021-12-14 14:52:42',
                'updated_at' => '2021-12-14 15:00:50',
                'route' => 'voyager.exercise-column-passings.index',
                'parameters' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Exercise Passings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => 18,
                'order' => 1,
                'created_at' => '2021-12-14 14:56:40',
                'updated_at' => '2021-12-14 15:00:50',
                'route' => 'voyager.exercise-passings.index',
                'parameters' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Passings',
                'url' => 'passings',
                'target' => '_self',
                'icon_class' => 'voyager-archive',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2021-12-14 15:00:43',
                'updated_at' => '2021-12-14 15:00:56',
                'route' => NULL,
                'parameters' => '',
            ),
        ));


    }
}
