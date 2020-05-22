<?php

use Illuminate\Database\Seeder;

class UsLibSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=2; $i<7; $i++){
            for($e=1; $e<6; $e++){
                DB::table('libro_user')->insert([
                    'user_id' => $i,
                    'libro_id' => $e
                ]);
            }
        }
    }
}
