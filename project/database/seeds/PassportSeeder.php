<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PassportSeeder extends Seeder
{
    public function run()
    {
        DB::table('oauth_clients')->delete();

        $dateTimeNow = Carbon::now();
        $oauthClient = [
            [
                'id' => 9999,
                'secret' => 'NYeFbBy8kUSLw9v6ANVlur9gAgFcQ48PhkPAXMRK',
                'name' => 'Dev App Token',
                'redirect' => 'http://localhost',
                'personal_access_client' => false,
                'password_client' => true,
                'revoked' => false,
                'created_at' => $dateTimeNow,
                'updated_at' => $dateTimeNow,
            ],
        ];

        DB::table('oauth_clients')->insert($oauthClient);
    }
}
