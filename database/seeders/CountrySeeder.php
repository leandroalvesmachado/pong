<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\User;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();

            $user = User::where('email', 'leandroalvesmachado@gmail.com')->first();

            $countries = [
                ['name' => 'Brazil', 'code' => 'BR', 'currency' => 'BRL'],
            ];

            foreach ($countries as $country) {
                $countrySeeder = new Country();
                $countrySeeder->name = $country['name'];
                $countrySeeder->code = $country['code'];
                $countrySeeder->currency = $country['currency'];
                $countrySeeder->created_by = $user->id;
                $countrySeeder->updated_by = $user->id;
                $countrySeeder->deleted_by = null;
                $countrySeeder->save();
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
