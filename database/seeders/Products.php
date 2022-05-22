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
                'images'=>"https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-12-family-select-2021?wid=940&hei=1112&fmt=jpeg&qlt=90&.v=1617135051000",
            ],
            [
                'name' => 'Galaxy S22',
                'description' => 'Smart phone from Samsung',
                'price' => 1100,
                'category' => 'mobile',
                'images'=>"https://cdn.dsmcdn.com/ty348/product/media/images/20220304/16/62572857/403703180/1/1_org_zoom.jpg",
            ],
            [
                'name' => 'M1 MacBook',
                'description' => 'Laptop from Apple',
                'price' => 1300,
                'category' => 'laptop',
                'images'=>"https://cdn.vatanbilgisayar.com/Upload/PRODUCT/apple/thumb/114746_large.jpg",
            ],
            [
                'name' => 'Dell xps 13',
                'description' => 'Laptop from Dell',
                'price' => 600,
                'category' => 'Laptop',
                'images'=>"https://www.notebookcheck-tr.com/uploads/tx_nbc2/xps.jpg",
            ],
            [
                'name' => 'Cannon EOS 3000D',
                'description' => 'High resolution Camera',
                'price' => 4000,
                'category' => 'camera',
                'images'=>"https://m.media-amazon.com/images/I/916GGqnsG+L._SL1500_.jpg",
            ],
        ]);
    }
}
