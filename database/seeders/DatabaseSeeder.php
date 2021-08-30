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
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();
        $this->call([
            BrandSeeder::class,
        ]);
        
=======
        \App\Models\User::factory(10)->create();
        $this->call([

            ProductSeeder::class,
        ]);
>>>>>>> f4882f09503791f60d5cf01145b8ac0d7a77096f
    }
}
