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
         $this->call(UsersTableSeeder::class);
         $this->call(catDelegacionTableSeeder::class);
         $this->call(CtTableSeeder::class);
         $this->call(permisosSeeder::class);
         $this->call(cuadrantesSeeder::class);

    }
}
