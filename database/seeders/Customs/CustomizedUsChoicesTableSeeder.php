<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedUsChoicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('choices')->delete();

        \DB::table('choices')->insert(array (
            0 =>
            array (
                'id' => 1,
                'exercise_id' => 1,
                'title' => 'Maintenance',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            1 =>
            array (
                'id' => 2,
                'exercise_id' => 1,
                'title' => 'Setting up constructor',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            2 =>
            array (
                'id' => 3,
                'exercise_id' => 1,
                'title' => 'Write first test method',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            3 =>
            array (
                'id' => 4,
                'exercise_id' => 1,
                'title' => 'Runnig fact method',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            4 =>
            array (
                'id' => 5,
                'exercise_id' => 1,
                'title' => 'Test tool selection',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            5 =>
            array (
                'id' => 6,
                'exercise_id' => 1,
                'title' => 'Define scope of Automation',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            6 =>
            array (
                'id' => 7,
                'exercise_id' => 1,
                'title' => 'Planning, Design and Development',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            7 =>
            array (
                'id' => 8,
                'exercise_id' => 1,
                'title' => 'Test Execution',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            8 =>
            array (
                'id' => 9,
                'exercise_id' => 1,
                'title' => 'Maintenance',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            9 =>
            array (
                'id' => 10,
                'exercise_id' => 1,
                'title' => 'Create a test project in your execution environment',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            10 =>
            array (
                'id' => 11,
                'exercise_id' => 1,
                'title' => 'Open test case/test suite',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            11 =>
            array (
                'id' => 12,
                'exercise_id' => 1,
                'title' => 'Check your test progress',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            12 =>
            array (
                'id' => 13,
                'exercise_id' => 1,
                'title' => 'Fill the report',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            13 =>
            array (
                'id' => 14,
                'exercise_id' => 2,
                'title' => 'Create test cases and use cases',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            14 =>
            array (
                'id' => 15,
                'exercise_id' => 2,
                'title' => 'Repeat the testing cycle until all bugs are fixed',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            15 =>
            array (
                'id' => 16,
                'exercise_id' => 2,
                'title' => 'Detect errors',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            16 =>
            array (
                'id' => 17,
                'exercise_id' => 2,
                'title' => 'Write a test plan',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            17 =>
            array (
                'id' => 18,
                'exercise_id' => 2,
                'title' => 'Run tests after unit integration',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            18 =>
            array (
                'id' => 19,
                'exercise_id' => 2,
                'title' => 'Retest the functionality after bug fixing',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            19 =>
            array (
                'id' => 20,
                'exercise_id' => 2,
                'title' => 'Write a test plan',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            20 =>
            array (
                'id' => 21,
                'exercise_id' => 2,
                'title' => 'Create test cases and use cases',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            21 =>
            array (
                'id' => 22,
                'exercise_id' => 2,
                'title' => 'Run tests after unit integration',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            22 =>
            array (
                'id' => 23,
                'exercise_id' => 2,
                'title' => 'Detect errors',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            23 =>
            array (
                'id' => 24,
                'exercise_id' => 2,
                'title' => 'Retest the functionality after bug fixing',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            24 =>
            array (
                'id' => 25,
                'exercise_id' => 2,
                'title' => 'Repeat the testing cycle until all bugs are fixed',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            25 =>
            array (
                'id' => 26,
                'exercise_id' => 3,
                'title' => 'Acknowledge',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            26 =>
            array (
                'id' => 27,
                'exercise_id' => 3,
                'title' => 'Alert',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            27 =>
            array (
                'id' => 28,
                'exercise_id' => 3,
                'title' => 'Test setup',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            28 =>
            array (
                'id' => 29,
                'exercise_id' => 3,
                'title' => 'Setting up mocks',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            29 =>
            array (
                'id' => 30,
                'exercise_id' => 3,
                'title' => 'Calling tested service',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            30 =>
            array (
                'id' => 31,
                'exercise_id' => 3,
                'title' => 'Checking results',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            31 =>
            array (
                'id' => 32,
                'exercise_id' => 3,
                'title' => 'Fixing errors',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            32 =>
            array (
                'id' => 33,
                'exercise_id' => 3,
                'title' => 'Arrange',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            33 =>
            array (
                'id' => 34,
                'exercise_id' => 3,
                'title' => 'Act',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
            34 =>
            array (
                'id' => 35,
                'exercise_id' => 3,
                'title' => 'Assert',
                'tooltip' => NULL,
                'created_at' => '2021-12-13 07:07:18',
                'updated_at' => '2021-12-13 07:07:18',
            ),
        ));


    }
}
