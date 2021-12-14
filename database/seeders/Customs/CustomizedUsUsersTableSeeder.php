<?php

namespace Database\Seeders\Customs;

use Illuminate\Database\Seeder;

class CustomizedUsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Administrator',
                'email' => 'admin@mail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:16',
                'password' => '$2y$10$MYL8EiVcI.ETKC7HKXRpqetABaAf5FKOXmuUaHK9I1jAudWikZtc6',
                'remember_token' => 'IJAznrpXhPMOGrZvNwx0bSEKt4d1VV4Jz3B2LFrxaWULtg16n5zW6enj6yyw',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:16',
                'updated_at' => '2021-12-13 07:07:16',
            ),
            1 =>
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Adalberto Wolff',
                'email' => 'enoch32@example.net',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:16',
                'password' => '$2y$10$SuY7jpunque5Bk5zcUs7deoBWBNOdP3IOQ1/hlANP8cbiUC3vjogi',
                'remember_token' => 'bizZa77Vvi',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            2 =>
            array (
                'id' => 3,
                'role_id' => 1,
                'name' => 'Bridie Ernser',
                'email' => 'adela.gutkowski@example.org',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:17',
                'password' => '$2y$10$3WrR.iA/uHb0hWG1rjfgZOaR6DVS7gUgtTxPxKs3AcI.GqsFPq3Ea',
                'remember_token' => 'kqjvMeE0He',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            3 =>
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Student',
                'email' => 'student@mail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:17',
                'password' => '$2y$10$PHv7MbI8CQv2dPwGbrNFG.GA/K8nQwev/nC4ZWppEA8k7OdwP1Gza',
                'remember_token' => '5B21cRtMy4',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            4 =>
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Dr. Shaniya Kohler',
                'email' => 'lupe.hoeger@example.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:17',
                'password' => '$2y$10$trQjyjRw1ErqVV4Y.TFhtOmX2pWDrTTZZBxWIgAZPF7zVlmiOVWI2',
                'remember_token' => 'n4OxEA6myU',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            5 =>
            array (
                'id' => 6,
                'role_id' => 3,
                'name' => 'Mr. Domingo King MD',
                'email' => 'rosemarie75@example.org',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:17',
                'password' => '$2y$10$kYXI97CUBkR.sNxq.NCT..1tw1thvgbJ4FJs3zuvfMPxpFcW6sadK',
                'remember_token' => 'Q0CrCsrxnS',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            6 =>
            array (
                'id' => 7,
                'role_id' => 3,
                'name' => 'Prof. Rasheed Feil IV',
                'email' => 'harmony13@example.org',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:17',
                'password' => '$2y$10$owe3KauaI2xX4NnpgB4dj.QZrNnvvqFLulkyF8pOnk4sDn03vVA4a',
                'remember_token' => 'jA07Q4kLQb',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            7 =>
            array (
                'id' => 8,
                'role_id' => 3,
                'name' => 'Coby O\'Kon II',
                'email' => 'percival.bruen@example.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:17',
                'password' => '$2y$10$quhH6cma2X8pjeW98v7L6eVEdgJMajmPVS0zhF.jRzCMMqiFgXWo2',
                'remember_token' => 'Z1nLkE0E34',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            8 =>
            array (
                'id' => 9,
                'role_id' => 3,
                'name' => 'Isabell Hyatt',
                'email' => 'luz.lang@example.org',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:17',
                'password' => '$2y$10$jHOVE8goEEOboVlgmuImM.Lw5yPrqe3I.uw66TS.5ULfq/XgtxbDS',
                'remember_token' => 'uo7VdruN3K',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            9 =>
            array (
                'id' => 10,
                'role_id' => 3,
                'name' => 'Delilah Lesch',
                'email' => 'mireille20@example.net',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:17',
                'password' => '$2y$10$2qEooBsS8TgStyOg3cLbPu.MCQu6e8Sdxr/AgrBWgCRk0xog0Bxza',
                'remember_token' => 'hf9WyMME2E',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            10 =>
            array (
                'id' => 11,
                'role_id' => 3,
                'name' => 'Mr. Akeem Ritchie',
                'email' => 'flesch@example.net',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:17',
                'password' => '$2y$10$Ofww4msFWgyPQUmrUdUFjuom0tS2NZv.WLcccnIarke28wH6fQ8da',
                'remember_token' => 'wVLs3Rv2N2',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            11 =>
            array (
                'id' => 12,
                'role_id' => 3,
                'name' => 'Freeda Ortiz',
                'email' => 'schmeler.letitia@example.org',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:17',
                'password' => '$2y$10$MoqaKboTgoESgsTLX53d7e6u0NEAZcZw3av52v6CRW/WiY6Ff.mIa',
                'remember_token' => 'wBqB0Ygwrs',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
            12 =>
            array (
                'id' => 13,
                'role_id' => 3,
                'name' => 'Katlyn Langosh',
                'email' => 'iwunsch@example.net',
                'avatar' => 'users/default.png',
                'email_verified_at' => '2021-12-13 07:07:17',
                'password' => '$2y$10$5hzcAjBeTbaYPyPkMLyyqu11JQBYSLoz/oWfAPcXsXeB3MK7b4.vm',
                'remember_token' => 'RASWHZcnf8',
                'settings' => NULL,
                'created_at' => '2021-12-13 07:07:17',
                'updated_at' => '2021-12-13 07:07:17',
            ),
        ));


    }
}
