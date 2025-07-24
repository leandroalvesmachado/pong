<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();

            $name = env('USER_NAME');
            $email = env('USER_EMAIL');
            $password = env('USER_PASSWORD');

            $profile = Profile::where('code', 1)->get()->first();

            if (!User::where('email', $email)->exists()) {
                $userSeeder = new User();
                $userSeeder->name = $name;
                $userSeeder->email = $email;
                $userSeeder->email_verified_at = date('Y-m-d H:i:s');
                $userSeeder->profile_id = $profile->id;
                $userSeeder->password = $password;
                $userSeeder->save();
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
