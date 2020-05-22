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

        // factory(Libro::class, 10)->create()->each(function ($libro) {
        //     $libro->users()->save(factory(App\User::class)->make());
        // });
        /*
        ->each(function ($libro) {
            $libro->comentarios()->save(factory(App\Comentarios::class)->make());
        });
        */
        Libro::create([
            'genero_id' => '3',
            'autor' => 'Stephen King',
            'titulo' => 'It',
            'editorial' => 'DeBolsillo',
            'edicion' => 'Coleccionista',
            'portada' => 'default.jpeg',
            'anio' => '2015',
            'descripcion' => 'Es un libro sobre un payaso pasado de verga'
        ]);
        
        Libro::create([
            'genero_id' => '1',
            'autor' => 'Ryard',
            'titulo' => 'Las Tierras Virgenes',
            'portada' => 'default.jpeg',
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
            'portada' => 'default.jpeg',
            'editorial' => 'Fondo De Cultura Económica.',
            'edicion' => '8',
            'anio' => '1953',
            'descripcion' => 'Es un libro de cuentos. Estos estan inspirados en el  analfabetismo.'
        ]);

        Libro::create([
            'genero_id' => '3',
            'autor' => 'Gabriel Garcia Marquez',
            'titulo' => 'Cien años de soledad',
            'editorial' => 'Tinta en Papel',
            'portada' => 'default.jpeg',
            'edicion' => '8',
            'anio' => '1997',
            'descripcion' => 'Es un libro de cuentos. Estos estan inspirados en el  analfabetismo.'
        ]);

        Libro::create([
            'genero_id' => '4',
            'autor' => 'Miguel De Cervantes',
            'portada' => 'default.jpeg',
            'titulo' => 'Don Quijote De La Mancha',
            'editorial' => 'Porrua',
            'edicion' => '8',
            'anio' => '1980',
            'descripcion' => 'Es un libro de cuentos. Estos estan inspirados en el  analfabetismo.'
        ]);
        /*
        // ->each(function($libro){
        //     $libro->users()->save(factory(App\User::class)->make());
        // });
        */
    }
}
