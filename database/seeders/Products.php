<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//use Illuminate\Support\Str;


class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Iphone 12',
                'description' => 'Smart phone from Apple',
                'price' => 999,
                'category' => 'mobile',
            ],
            [
                'name' => 'Galaxy S22',
                'description' => 'Smart phone from Samsung',
                'price' => 1100,
                'category' => 'mobile',
            ],
            [
                'name' => 'M1 MacBook',
                'description' => 'Laptop from Apple',
                'price' => 1300,
                'category' => 'laptop',
            ],
            [
                'name' => 'Dell 3000H',
                'description' => 'Laptop from Dell',
                'price' => 600,
                'category' => 'Laptop',
            ],
            [
                'name' => 'Cannon 300S',
                'description' => 'High resolution Camera',
                'price' => 4000,
                'category' => 'camera',
            ],
        ]);
    }
}
