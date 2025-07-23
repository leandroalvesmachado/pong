<?php

namespace Database\Seeders;

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

            $users = [
                ['name' => 'Brazil', 'code' => 'BR', 'currency' => 'BRL'],
            ];

            foreach ($users as $user) {
                $countrySeeder = new User();
                $countrySeeder->name = $country['name'];
                $countrySeeder->save();
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
