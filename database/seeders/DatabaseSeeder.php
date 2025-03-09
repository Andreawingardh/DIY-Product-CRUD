<?php

namespace Database\Seeders;

use Database\Seeders\BrandSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\AdminUserSeeder;
use Database\Seeders\UserSeeder;

use App\View\Components\products;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */


    public function run(): void
{
    $this->call([
        CategorySeeder::class,
        BrandSeeder::class,
        ProductSeeder::class,
        AdminUserSeeder::class,
        UserSeeder::class
        
    ]);
}
}
    

