<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(User::class,20)->create();
        factory(User::class,20)->create()->each(function($user){
            dd(factory(App\Libro::class)->make());
            //$user->libros()->save(factory(App\Libro::class)->make());
        });
    }
}
