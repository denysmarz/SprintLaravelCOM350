<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estante;
use Illuminate\Support\Facades\DB;
class EstanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        DB::table('estantes')->insert([
            'tema' => 'Biologia',
            'comlumna' => '3',
            'fila' => '4',
            'tema_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estantes')->insert([
            'tema' => 'Biologia',
            'comlumna' => '4',
            'fila' => '4',
            'tema_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estantes')->insert([
            'tema' => 'Historia',
            'comlumna' => '2',
            'fila' => '3',
            'tema_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('estantes')->insert([
            'tema' => 'Ficcion',
            'comlumna' => '4',
            'fila' => '2',
            'tema_id' => '5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
