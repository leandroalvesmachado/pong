<?php

namespace Database\Seeders;

use App\Models\Profile;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();

            $profiles = [
                [
                    'code' => 1,
                    'name' => 'Administrador',
                    'description' => 'Perfil com acesso total ao sistema, responsável pela gestão geral do torneio.'
                ],
                [
                    'code' => 2,
                    'name' => 'Clube',
                    'description' => 'Perfil destinado ao responsável por um clube participante, com permissão para cadastrar e gerenciar atletas.'
                ],
                [
                    'code' => 3,
                    'name' => 'Atleta',
                    'description' => 'Perfil para os atletas participantes, com acesso limitado às suas informações e partidas.',
                ],
            ];

            foreach ($profiles as $profile) {
                $profileSeeder = new Profile();
                $profileSeeder->code = $profile['code'];
                $profileSeeder->name = $profile['name'];
                $profileSeeder->description = $profile['description'];
                $profileSeeder->save();
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
