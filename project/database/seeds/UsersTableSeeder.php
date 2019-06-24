<?php

use App\Enums\UserRoles;
use App\Enums\UserTypes;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::firstOrNew([
            'email' => 'admin@letsgrow.com.br',
        ]);

        $user->fill([
            'name' => 'Administrador Letsgrow',
            'email' => 'admin@letsgrow.com.br',
            'password' => \Hash::make('123456'),
            'email_verified_at' => now(),
        ]);

        $user->save();

        $userType = new UserType();
        $userType->type = UserTypes::ADMIN;
        $user->userTypes()->save($userType);

        if (!$user->hasRole(UserRoles::ADMIN)) {
            $user->assignRole(UserRoles::ADMIN);
        }
    }
}
