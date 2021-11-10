<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'name' => 'Everick',
            'email' => 'ever1ever14@gmail.com',
            'password' => bcrypt('tkm.forever')
        ]);

         \App\Models\Autor::factory(7)->create();
         \App\Models\Libro::factory(20)->create();
    }
}
