<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class UserSeeder extends Seeder
{
    public function run()
    {
        /** @var User $admin */
        $admin = User::factory()
            ->create([
                'email' => 'admin@gmail.com',
            ]);

        $admin->assignRole('admin');

        /** @var User[]|Collection $admins */
        $students = User::factory()
            ->count(9)
            ->create();

        $students->each(function (User $admin) {
            $admin->assignRole('student');
        });
    }
}
