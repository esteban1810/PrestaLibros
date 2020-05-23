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
            RoleSeeder::class,
            UserSeeder::class,
            GeneroSeeder::class,
            LibroSeeder::class,
            UsLibSeeder::class,
            ComentarioSeeder::class,
        ]);
        //$this->call(GenerosTableSeeder::class);
    }
}
