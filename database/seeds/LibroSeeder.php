<?php

use Illuminate\Database\Seeder;
use App\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Libro::class, 10)->create()->each(function ($libro) {
            $libro->users()->save(factory(App\User::class)->make());
        });
        /*
        ->each(function ($libro) {
            $libro->comentarios()->save(factory(App\Comentarios::class)->make());
        });
        */
        /*
        Libro::create([
            'genero_id' => '3',
            'autor' => 'Stephen King',
            'titulo' => 'It',
            'editorial' => 'DeBolsillo',
            'edicion' => 'Coleccionista',
            'anio' => '2015',
            'descripcion' => 'Es un libro sobre un payaso pasado de verga'
        ])->each(function($libro){
            $libro->users()->save(factory(App\User::class)->make());
        });
        
        Libro::create([
            'genero_id' => '1',
            'autor' => 'Ryard',
            'titulo' => 'Las Tierras Virgenes',
            'editorial' => 'DeBolsillo',
            'edicion' => 'Macmillan Publishers',
            'anio' => '1894',
            'descripcion' => 'Es un libro sobre un niño super chetado.'
        ]);
        // ->each(function($libro){
        //     $libro->users()->save(factory(App\User::class)->make());
        // });
        Libro::create([
            'genero_id' => '5',
            'autor' => 'Juan Rulfo',
            'titulo' => 'El Llano En Llamas',
            'editorial' => 'Fondo De Cultura Económica.',
            'edicion' => '8',
            'anio' => '1953',
            'descripcion' => 'Es un libro de cuentos. Estos estan inspirados en el  analfabetismo.'
        ]);
        // ->each(function($libro){
        //     $libro->users()->save(factory(App\User::class)->make());
        // });
        */
    }
}
