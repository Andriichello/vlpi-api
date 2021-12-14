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
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 1,
                'title' => 'Maintenance',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            1 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 2,
                'title' => 'Setting up constructor',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            2 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 3,
                'title' => 'Write first test method',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            3 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 4,
                'title' => 'Runnig fact method',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            4 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 5,
                'title' => 'Test tool selection',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            5 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 6,
                'title' => 'Define scope of Automation',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            6 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 7,
                'title' => 'Planning, Design and Development',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            7 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 8,
                'title' => 'Test Execution',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            8 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 9,
                'title' => 'Maintenance',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            9 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 10,
                'title' => 'Create a test project in your execution environment',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            10 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 11,
                'title' => 'Open test case/test suite',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            11 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 12,
                'title' => 'Check your test progress',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            12 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 1,
                'id' => 13,
                'title' => 'Fill the report',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            13 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 14,
                'title' => 'Create test cases and use cases',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            14 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 15,
                'title' => 'Repeat the testing cycle until all bugs are fixed',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            15 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 16,
                'title' => 'Detect errors',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            16 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 17,
                'title' => 'Write a test plan',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            17 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 18,
                'title' => 'Run tests after unit integration',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            18 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 19,
                'title' => 'Retest the functionality after bug fixing',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            19 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 20,
                'title' => 'Write a test plan',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            20 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 21,
                'title' => 'Create test cases and use cases',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            21 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 22,
                'title' => 'Run tests after unit integration',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            22 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 23,
                'title' => 'Detect errors',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            23 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 24,
                'title' => 'Retest the functionality after bug fixing',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            24 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 2,
                'id' => 25,
                'title' => 'Repeat the testing cycle until all bugs are fixed',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            25 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 26,
                'title' => 'Acknowledge',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            26 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 27,
                'title' => 'Alert',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            27 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 28,
                'title' => 'Test setup',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            28 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 29,
                'title' => 'Setting up mocks',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            29 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 30,
                'title' => 'Calling tested service',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            30 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 31,
                'title' => 'Checking results',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            31 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 32,
                'title' => 'Fixing errors',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            32 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 33,
                'title' => 'Arrange',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            33 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 34,
                'title' => 'Act',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            34 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 3,
                'id' => 35,
                'title' => 'Assert',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            35 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 36,
                'title' => 'Publish test project to Azure',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            36 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 37,
                'title' => 'Download .NET SDK',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            37 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 38,
                'title' => 'Create XUnit test project',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            38 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 39,
                'title' => 'Write first Fact method',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            39 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 40,
                'title' => 'Write first Theory method',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            40 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 41,
                'title' => 'Run facts',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            41 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 42,
                'title' => 'Download Java SDK',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            42 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 43,
                'title' => 'Create NUnit test project',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            43 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 44,
                'title' => 'Write first test setup',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            44 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 45,
                'title' => 'Write first test method',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            45 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 46,
                'title' => 'Write first test fixture teardown',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            46 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 4,
                'id' => 47,
                'title' => 'Run tests',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            47 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 48,
                'title' => 'Open browser',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            48 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 49,
                'title' => '[',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            49 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 50,
                'title' => '\\',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            50 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 51,
                'title' => ']',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            51 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 52,
                'title' => '"password:password"',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            52 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 53,
                'title' => 'password = password',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            53 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 54,
                'title' => 'email = admin@mail.com',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            54 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 55,
                'title' => 'Open Postman',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            55 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 56,
                'title' => 'Create new project',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            56 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 57,
                'title' => 'Create new HTTP method',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            57 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 58,
                'title' => 'Select POST method type',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            58 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 59,
                'title' => 'Enter API link',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            59 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 60,
                'title' => 'Open Body section',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            60 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 61,
                'title' => 'Enter JSON',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            61 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 62,
                'title' => 'Send request',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            62 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 63,
                'title' => '{',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            63 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 64,
                'title' => '"email":"admin@mail.com",',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            64 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 65,
                'title' => '"password":"password"',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
            65 =>
            array (
                'created_at' => '2021-12-14 21:02:02',
                'exercise_id' => 5,
                'id' => 66,
                'title' => '}',
                'tooltip' => NULL,
                'updated_at' => '2021-12-14 21:02:02',
            ),
        ));


    }
}
