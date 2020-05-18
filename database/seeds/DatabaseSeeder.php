<?php

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
            UserSeeder::class,
            GeneroSeeder::class,
            LibroSeeder::class,
            ComentarioSeeder::class,
        ]);
        //$this->call(GenerosTableSeeder::class);
    }
}
