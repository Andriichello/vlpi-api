<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Str;
use TCG\Voyager\Models\Role;

class  UserSeeder extends Seeder
{
    public function run()
    {
        $role = Role::query()
            ->where(['name' => 'admin'])
            ->firstOrFail();

        /** @var User $admin */
        $admin = User::factory()
            ->create([
                'name' => 'Administrator',
                'email' => 'admin@mail.com',
                'password' => 'password',
                'remember_token' => Str::random(10),
                'role_id' => $role->id,
            ]);

        /** @var User[]|Collection $admins */
        $admins = User::factory()
            ->count(2)
            ->create([
                'role_id' => $role->id,
            ]);


        $role = Role::query()
            ->where(['name' => 'student'])
            ->firstOrFail();

        /** @var User $student */
        $student = User::factory()
            ->create([
                'name' => 'Student',
                'email' => 'student@mail.com',
                'password' => 'password',
                'remember_token' => Str::random(10),
                'role_id' => $role->id,
            ]);

        /** @var User[]|Collection $students */
        $students = User::factory()
            ->count(9)
            ->create([
                'role_id' => $role->id,
            ]);
    }
}
