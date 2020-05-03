<?php

use Illuminate\Database\Seeder;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comentario::class, 500)->create();
        // ->each(function ($comentario) {
        //     $comentario->user()->save(factory(App\User::class)->make());
        // });
    }
}
