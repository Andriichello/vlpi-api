<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    private array $roles = [
        'admin',
        'student',
    ];

    public function run()
    {
        foreach ($this->roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
