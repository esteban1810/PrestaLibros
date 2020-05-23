<?php

use Illuminate\Database\Seeder;
use App\Comentario;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e=2;
        for($i=1; $i<6; $i++){
            Comentario::create([
                'contenido' => 'Me gustó este libro',
                'user_id' => $e++,
                'comentario_id' => $i,
                'comentario_type' => 'App\Libro'
            ]);
            Comentario::create([
                'contenido' => 'No me gustó este libro',
                'user_id' => $e++,
                'comentario_id' => $i,
                'comentario_type' => 'App\Libro'
            ]);
            Comentario::create([
                'contenido' => 'Es un libro muy profundo',
                'user_id' => $e++,
                'comentario_id' => $i,
                'comentario_type' => 'App\Libro'
            ]);
            Comentario::create([
                'contenido' => 'Es un libro aburrido',
                'user_id' => $e++,
                'comentario_id' => $i,
                'comentario_type' => 'App\Libro'
            ]);
            Comentario::create([
                'contenido' => 'Es un libro sin chiste',
                'user_id' => $e++,
                'comentario_id' => $i,
                'comentario_type' => 'App\Libro'
            ]);
            $e=2;
        }
        
        for($i=2; $i<7; $i++){
            Comentario::create([
                'contenido' => 'Cuida muy bien los libros',
                'user_id' => $e++,
                'comentario_id' => $i,
                'comentario_type' => 'App\User'
            ]);
            Comentario::create([
                'contenido' => 'Maltrata los libros',
                'user_id' => $e++,
                'comentario_id' => $i,
                'comentario_type' => 'App\User'
            ]);
            Comentario::create([
                'contenido' => 'Es una persona muy culta',
                'user_id' => $e++,
                'comentario_id' => $i,
                'comentario_type' => 'App\User'
            ]);
            Comentario::create([
                'contenido' => 'Es muy respestuoso',
                'user_id' => $e++,
                'comentario_id' => $i,
                'comentario_type' => 'App\User'
            ]);
            Comentario::create([
                'contenido' => 'Tiene una gran coleccion de libros',
                'user_id' => $e++,
                'comentario_id' => $i,
                'comentario_type' => 'App\User'
            ]);
            $e=2;
        }
        
        //factory(App\Comentario::class, 100)->create();
        // ->each(function ($comentario) {
        //     $comentario->user()->save(factory(App\User::class)->make());
        // });
    }
}
