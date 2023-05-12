<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Smartphones'],
            ['name' => 'Laptops'],
            ['name' => 'Televisions'],
            ['name' => 'Gaming '],
        ];
        Category::insert($data);
    }
}
