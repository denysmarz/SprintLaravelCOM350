<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tema;
use Illuminate\Support\Facades\DB;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('temas')->insert([
            'nombre' => 'Biologia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('temas')->insert([
            'nombre' => 'Historia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('temas')->insert([
            'nombre' => 'Matematica',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('temas')->insert([
            'nombre' => 'Fisica',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('temas')->insert([
            'nombre' => 'Ficcion',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //Tema::factory(5)->create();
    }
}
