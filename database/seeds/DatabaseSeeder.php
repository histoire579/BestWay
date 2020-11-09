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
        // $this->call(UserSeeder::class);

        factory(App\Models\TypeCompte::class, 2)->create();
        factory(App\Models\Compte::class, 2)->create();
    }
}
