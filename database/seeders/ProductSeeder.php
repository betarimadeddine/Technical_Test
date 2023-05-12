<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'category_id' => 1,
                'name' => 'iPhone',
                'slug' => Str::of('iPhone')->slug('-'),
                'stock' => 50,
            ],
            [
                'category_id' => 1,
                'name' => 'Samsung Galaxy',
                'slug' => Str::of('Samsung Galaxy')->slug('-'),
                'stock' => 20,
            ],
            [
                'category_id' => 2,
                'name' => 'MacBook Pro',
                'slug' => Str::of('MacBook Pro')->slug('-'),
                'stock' => 30,
            ],
            [
                'category_id' => 2,
                'name' => 'Dell XPS',
                'slug' => Str::of('Dell XPS')->slug('-'),
                'stock' => 50,
            ],
            [
                'category_id' => 2,
                'name' => 'HP Spectre',
                'slug' => Str::of('HP Spectre')->slug('-'),
                'stock' => 20,
            ],
            [
                'category_id' => 3,
                'name' => 'Samsung QLED',
                'slug' => Str::of('Samsung QLED')->slug('-'),
                'stock' => 30,
            ],
            [
                'category_id' => 3,
                'name' => 'LG OLED',
                'slug' => Str::of('LG OLED')->slug('-'),
                'stock' => 50,
            ],
            [
                'category_id' => 3,
                'name' => 'Sony Bravi',
                'slug' => Str::of('Sony Bravi')->slug('-'),
                'stock' => 20,
            ],
            [
                'category_id' => 4,
                'name' => 'PlayStation 5',
                'slug' => Str::of('PlayStation 5')->slug('-'),
                'stock' => 30,
            ],
            [
                'category_id' => 4,
                'name' => 'Xbox Series X',
                'slug' => Str::of('Xbox Series X')->slug('-'),
                'stock' => 50,
            ],
            [
                'category_id' => 4,
                'name' => 'Nintendo Switch',
                'slug' => Str::of('Nintendo Switch')->slug('-'),
                'stock' => 20,
            ],
        ];

        Product::insert($data);
    }
}
