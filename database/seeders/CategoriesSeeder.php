<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Beauty'],
            ['name' => 'Books'],
            ['name' => 'Electronics'],
            ['name' => 'Fashion'],
            ['name' => 'Furniture'],
            ['name' => 'Grocery']
        ];
        Categories::insert($categories);
    }
}
