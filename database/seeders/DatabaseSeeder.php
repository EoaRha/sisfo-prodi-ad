<?php

namespace Database\Seeders;
namespace Database\Factories\ProductFactory;
namespace Database\Factories\CategoryFactory;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Category::factory(15)->create();

        Product::factory(50)->create();
    }
}
