<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => 'password',
                'remember_token' => Str::random(10),
                'role_id' => $role->id,
            ]);
        }
    }
}
