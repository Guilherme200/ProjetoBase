<?php

use App\Enums\UserTypes;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the seed.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::firstOrCreate([
            'name' => UserTypes::ADMIN,
            'guard_name' => 'web',
        ]);

        $permissions = Permission::all();
        $adminRole->syncPermissions($permissions);
    }
}
