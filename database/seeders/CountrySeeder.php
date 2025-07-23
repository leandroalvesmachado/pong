<?php

namespace Database\Seeders;

use App\Models\Country;
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

            $countries = [
                ['name' => 'Brazil', 'code' => 'BR', 'currency' => 'BRL'],
            ];

            foreach ($countries as $country) {
                $countrySeeder = new Country();
                $countrySeeder->name = $country['name'];
                $countrySeeder->code = $country['code'];
                $countrySeeder->currency = $country['currency'];
                $countrySeeder->created_by = $country['created_by'];
                $countrySeeder->updated_by = $country['updated_by'];
                $countrySeeder->deleted_by = $country['deleted_by'];
                $countrySeeder->save();
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
