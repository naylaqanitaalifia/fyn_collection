<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
// use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view services,',
            'create services,',
            'update services,',
            'delete services,',
        ];

        foreach($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }

        $adminRole = Role::create([
            'name' => 'admin'
        ]);

        $adminRole->givePermissionTo([
            'view services,',
            'create services,',
            'update services,',
            'delete services,',
        ]);

        $customerRole = Role::create([
            'name' => 'customer'
        ]);

        $customerRole->givePermissionTo([
            'view services,',
        ]);

        // data user super admin
        $user = User::create([
            'name' => 'Nayla',
            'email' => 'nayla@admin.com',
            'password' => bcrypt('123123123')
        ]);

        $user->assignRole($adminRole);

    }
}
