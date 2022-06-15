<?php

namespace Database\Seeders;

use App\Models\Estante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TemaSeeder::class,
            EstanteSeeder::class,
            DocumentoSeeder::class,]);
    }
}
