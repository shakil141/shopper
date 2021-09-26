<?php

namespace Database\Seeders;

use App\Models\UserAccess;
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

        \App\Models\User::factory(10)->create();
        $this->call([
            BrandSeeder::class,
        ]);
        

        $this->call([
            BrandSeeder::class,
        ]);


        \App\Models\User::factory(10)->create();
        $this->call([
            ProductSeeder::class,
            UsersSeeder::class,
            RoleSeeder::class,
            UserAccessSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(10)->create();
        $this->call([
           ProductSeeder::class,
           CategorySeeder::class,
           BrandSeeder::class,
        ]);
    }
}
