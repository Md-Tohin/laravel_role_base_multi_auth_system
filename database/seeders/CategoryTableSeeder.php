<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Electronics', 'discount' => 10, 'status' => 1],
            ['name' => 'Clothing', 'discount' => 5, 'status' => 0]
        ];

        Category::insert($data);
    }
}
