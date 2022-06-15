<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\Documento;
class DocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documento::factory()->create();
    }
}
