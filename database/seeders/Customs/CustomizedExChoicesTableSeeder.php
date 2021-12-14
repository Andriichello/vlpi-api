<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedExChoicesTableSeeder extends Seeder
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
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            1 =>
            array (
                'id' => 2,
                'exercise_id' => 1,
                'title' => 'Setting up constructor',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            2 =>
            array (
                'id' => 3,
                'exercise_id' => 1,
                'title' => 'Write first test method',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            3 =>
            array (
                'id' => 4,
                'exercise_id' => 1,
                'title' => 'Runnig fact method',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            4 =>
            array (
                'id' => 5,
                'exercise_id' => 1,
                'title' => 'Test tool selection',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            5 =>
            array (
                'id' => 6,
                'exercise_id' => 1,
                'title' => 'Define scope of Automation',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            6 =>
            array (
                'id' => 7,
                'exercise_id' => 1,
                'title' => 'Planning, Design and Development',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            7 =>
            array (
                'id' => 8,
                'exercise_id' => 1,
                'title' => 'Test Execution',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            8 =>
            array (
                'id' => 9,
                'exercise_id' => 1,
                'title' => 'Maintenance',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            9 =>
            array (
                'id' => 10,
                'exercise_id' => 1,
                'title' => 'Create a test project in your execution environment',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            10 =>
            array (
                'id' => 11,
                'exercise_id' => 1,
                'title' => 'Open test case/test suite',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            11 =>
            array (
                'id' => 12,
                'exercise_id' => 1,
                'title' => 'Check your test progress',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            12 =>
            array (
                'id' => 13,
                'exercise_id' => 1,
                'title' => 'Fill the report',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            13 =>
            array (
                'id' => 14,
                'exercise_id' => 2,
                'title' => 'Create test cases and use cases',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            14 =>
            array (
                'id' => 15,
                'exercise_id' => 2,
                'title' => 'Repeat the testing cycle until all bugs are fixed',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:39',
                'updated_at' => '2021-12-14 19:18:39',
            ),
            15 =>
            array (
                'id' => 16,
                'exercise_id' => 2,
                'title' => 'Detect errors',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            16 =>
            array (
                'id' => 17,
                'exercise_id' => 2,
                'title' => 'Write a test plan',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            17 =>
            array (
                'id' => 18,
                'exercise_id' => 2,
                'title' => 'Run tests after unit integration',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            18 =>
            array (
                'id' => 19,
                'exercise_id' => 2,
                'title' => 'Retest the functionality after bug fixing',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            19 =>
            array (
                'id' => 20,
                'exercise_id' => 2,
                'title' => 'Write a test plan',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            20 =>
            array (
                'id' => 21,
                'exercise_id' => 2,
                'title' => 'Create test cases and use cases',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            21 =>
            array (
                'id' => 22,
                'exercise_id' => 2,
                'title' => 'Run tests after unit integration',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            22 =>
            array (
                'id' => 23,
                'exercise_id' => 2,
                'title' => 'Detect errors',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            23 =>
            array (
                'id' => 24,
                'exercise_id' => 2,
                'title' => 'Retest the functionality after bug fixing',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            24 =>
            array (
                'id' => 25,
                'exercise_id' => 2,
                'title' => 'Repeat the testing cycle until all bugs are fixed',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            25 =>
            array (
                'id' => 26,
                'exercise_id' => 3,
                'title' => 'Acknowledge',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            26 =>
            array (
                'id' => 27,
                'exercise_id' => 3,
                'title' => 'Alert',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            27 =>
            array (
                'id' => 28,
                'exercise_id' => 3,
                'title' => 'Test setup',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            28 =>
            array (
                'id' => 29,
                'exercise_id' => 3,
                'title' => 'Setting up mocks',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            29 =>
            array (
                'id' => 30,
                'exercise_id' => 3,
                'title' => 'Calling tested service',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            30 =>
            array (
                'id' => 31,
                'exercise_id' => 3,
                'title' => 'Checking results',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            31 =>
            array (
                'id' => 32,
                'exercise_id' => 3,
                'title' => 'Fixing errors',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            32 =>
            array (
                'id' => 33,
                'exercise_id' => 3,
                'title' => 'Arrange',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            33 =>
            array (
                'id' => 34,
                'exercise_id' => 3,
                'title' => 'Act',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            34 =>
            array (
                'id' => 35,
                'exercise_id' => 3,
                'title' => 'Assert',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            35 =>
            array (
                'id' => 36,
                'exercise_id' => 4,
                'title' => 'Publish test project to Azure',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            36 =>
            array (
                'id' => 37,
                'exercise_id' => 4,
                'title' => 'Download .NET SDK',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            37 =>
            array (
                'id' => 38,
                'exercise_id' => 4,
                'title' => 'Create XUnit test project',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            38 =>
            array (
                'id' => 39,
                'exercise_id' => 4,
                'title' => 'Write first Fact method',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            39 =>
            array (
                'id' => 40,
                'exercise_id' => 4,
                'title' => 'Write first Theory method',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            40 =>
            array (
                'id' => 41,
                'exercise_id' => 4,
                'title' => 'Run facts',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            41 =>
            array (
                'id' => 42,
                'exercise_id' => 4,
                'title' => 'Download Java SDK',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            42 =>
            array (
                'id' => 43,
                'exercise_id' => 4,
                'title' => 'Create NUnit test project',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            43 =>
            array (
                'id' => 44,
                'exercise_id' => 4,
                'title' => 'Write first test setup',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            44 =>
            array (
                'id' => 45,
                'exercise_id' => 4,
                'title' => 'Write first test method',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            45 =>
            array (
                'id' => 46,
                'exercise_id' => 4,
                'title' => 'Write first test fixture teardown',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            46 =>
            array (
                'id' => 47,
                'exercise_id' => 4,
                'title' => 'Run tests',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            47 =>
            array (
                'id' => 48,
                'exercise_id' => 5,
                'title' => 'Open browser',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            48 =>
            array (
                'id' => 49,
                'exercise_id' => 5,
                'title' => 'Open Postman',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            49 =>
            array (
                'id' => 50,
                'exercise_id' => 5,
                'title' => 'Create new project',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            50 =>
            array (
                'id' => 51,
                'exercise_id' => 5,
                'title' => 'Create new HTTP method',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            51 =>
            array (
                'id' => 52,
                'exercise_id' => 5,
                'title' => 'Select POST method type',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            52 =>
            array (
                'id' => 53,
                'exercise_id' => 5,
                'title' => 'Enter API link',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            53 =>
            array (
                'id' => 54,
                'exercise_id' => 5,
                'title' => 'Open Body section',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            54 =>
            array (
                'id' => 55,
                'exercise_id' => 5,
                'title' => 'Enter JSON',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
            55 =>
            array (
                'id' => 56,
                'exercise_id' => 5,
                'title' => 'Send request',
                'tooltip' => NULL,
                'created_at' => '2021-12-14 19:18:40',
                'updated_at' => '2021-12-14 19:18:40',
            ),
        ));


    }
}
