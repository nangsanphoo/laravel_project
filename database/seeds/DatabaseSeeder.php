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
        // $this->call(UserSeeder::class);run the class you want with command php artisan db:seed
        //$this->call(StudentTableSeeder::class);
        //$this->call(BrandTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
    }
}
