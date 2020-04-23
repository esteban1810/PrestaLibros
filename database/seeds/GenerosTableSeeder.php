<?php

use App\Genero;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create(['nombre' => 'Aventura']);
        Genero::create(['nombre' => 'Ciencia Ficcion']);
        Genero::create(['nombre' => 'Terror']);
        Genero::create(['nombre' => 'Infantil']);
        Genero::create(['nombre' => 'Drama']);
        Genero::create(['nombre' => 'Romance']);
        Genero::create(['nombre' => 'Poesia']);
    }
}
