<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;
use Faker\Factory as Faker;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('empresas')->insert([
                'nombre' => $faker->company,
                'tramo' => $faker->word, // Puedes cambiar esto según tus necesidades
                'tipo' => $faker->word, // Puedes cambiar esto según tus necesidades
                'nit' => $faker->numerify('######-#'), // Genera un formato de NIT
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
