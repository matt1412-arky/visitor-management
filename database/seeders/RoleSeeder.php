<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles  = [
            'superadmin',
            'employee',
            'vendor',
            'security',
            'cleaningservice',
            'visitor'
        ];
        foreach ($roles as $role) {
            Role::insert([
                'role_name' => $role
            ]);
        }
    }
}
