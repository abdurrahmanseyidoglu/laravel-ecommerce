<?php

namespace Database\Seeders;

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
                'images' => "https://productimages.hepsiburada.net/s/49/550/10986386784306.jpg/format:webp",
            ],
            [
                'name' => 'Galaxy S22',
                'description' => 'Smart phone from Samsung',
                'price' => 1100,
                'category' => 'mobile',
                'images' => "https://productimages.hepsiburada.net/s/177/550/110000141598673.jpg/format:webp",
            ],
            [
                'name' => 'M1 MacBook',
                'description' => 'Laptop from Apple',
                'price' => 1300,
                'category' => 'laptop',
                'images' => "https://productimages.hepsiburada.net/s/49/550/10983949860914.jpg/format:webp",
            ],
            [
                'name' => 'Dell xps 13',
                'description' => 'Laptop from Dell',
                'price' => 600,
                'category' => 'Laptop',
                'images' => "https://productimages.hepsiburada.net/s/70/550/110000011321899.jpg/format:webp",
            ],
            [
                'name' => 'Cannon 3000D',
                'description' => 'High resolution Camera',
                'price' => 4000,
                'category' => 'camera',
                'images' => "https://productimages.hepsiburada.net/s/19/550/9853227532338.jpg/format:webp",
            ],
            [
                'name' => 'MSI Optix',
                'description' => '144Hz 1ms (HDMI+Display) Freesync Premium Full HD Monitor',
                'price' => 2000,
                'category' => 'Display',
                'images' => "https://productimages.hepsiburada.net/s/118/550/110000067891416.jpg/format:webp",
            ],
            [
                'name' => ' Saba SB50F352',
                'description' => '127 4K Ultra HD Android LED TV',
                'price' => 4000,
                'category' => 'Display',
                'images' => "https://productimages.hepsiburada.net/s/193/550/110000160062594.jpg/format:webp",
            ],

        ]);
    }
}
