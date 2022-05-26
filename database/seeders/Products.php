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
                'category' => 'laptop',
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
                'category' => 'display',
                'images' => "https://productimages.hepsiburada.net/s/118/550/110000067891416.jpg/format:webp",
            ],
            [
                'name' => ' Saba SB50F352',
                'description' => '127 4K Ultra HD Android LED TV',
                'price' => 4000,
                'category' => 'display',
                'images' => "https://productimages.hepsiburada.net/s/193/550/110000160062594.jpg/format:webp",
            ],



            [
                'name' => 'iPhone SE 128 GB',
                'description' => 'Another Apple product',
                'price' => 2200,
                'category' => 'mobile',
                'images' => "https://productimages.hepsiburada.net/s/189/550/110000155170552.jpg/format:webp",
            ],
            [
                'name' => 'iPhone 13 Pro 256 GB ',
                'description' => 'Not smart yet Expensive phone',
                'price' => 21000,
                'category' => 'mobile',
                'images' => "https://productimages.hepsiburada.net/s/189/550/110000155170738.jpg/format:webp",
            ],
            [
                'name' => 'iPhone 13 Pro Max 128 GB ',
                'description' => 'Not smart yet Expensive phone',
                'price' => 4000,
                'category' => 'mobile',
                'images' => "https://productimages.hepsiburada.net/s/189/550/110000155170747.jpg/format:webp",
            ],
            [
                'name' => 'Casper Nirvana S500.1135-8E00T-G',
                'description' => 'Casper Nirvana S500.1135-8E00T-G-F Intel Core i5 1135G7 8GB 500GB SSD Windows 11 Home 15.6" FHD ',
                'price' => 14000,
                'category' => 'laptop',
                'images' => "https://productimages.hepsiburada.net/s/159/550/110000117273165.jpg/format:webp",
            ],
            [
                'name' => 'Asus Tuf Gaming F15 FX506HCB-HN183 ',
                'description' => 'Asus Tuf Gaming F15 FX506HCB-HN183 Intel Core I5 -11400H 16GB Ram 512GB SSD 4GB RTX3050 15.6 FHD',
                'price' => 14000,
                'category' => 'laptop',
                'images' => "https://productimages.hepsiburada.net/s/193/550/110000160062594.jpg/format:webp",
            ],
            [
                'name' => 'Asus TUF Gaming FX506LH-HN004',
                'description' => 'Asus TUF Gaming FX506LH-HN004 Intel Core i5 10300H 8GB 512GB SSD GTX1650 Freedos 15.6" FHD',
                'price' => 37000,
                'category' => 'laptop',
                'images' => "https://productimages.hepsiburada.net/s/86/550/110000028846421.jpg/format:webp",
            ],
            [
                'name' => 'HP Pavilion 15-DK207NT ',
                'description' => 'HP Pavilion 15-DK207NT Intel Core i5 11300H 8GB 512GB SSD RTX3050 Freedos 15.6" 54T32EA ',
                'price' => 32000,
                'category' => 'laptop',
                'images' => "https://productimages.hepsiburada.net/s/199/550/110000170364823.jpg/format:webp",
            ],

        ]);
    }
}
