<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
                'title' => 'Laptop ROG',
                'slug' => 'laptop-rog',
                'price' => 20000000,
                'image' => 'rog.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mouse Pebble',
                'slug' => 'mouse-pebble',
                'price' => 200000,
                'image' => 'pebble.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Macbook Pro',
                'slug' => 'macbook-pro',
                'price' => 20000000,
                'image' => 'macbook-pro.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Xiaomi Redmi 3s',
                'slug' => 'xiaomi-redmi-3s',
                'price' => 1000000,
                'image' => 'xiaomi-redmi-3s.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Western Digital SSD',
                'slug' => 'western-digital-ssd',
                'price' => 685000,
                'image' => 'western-digital-ssd.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Xiaomi Haylou GT1 XR TWS APTX Wireless',
                'slug' => 'xiaomi-tws',
                'price' => 293000,
                'image' => 'xiaomi-haylou-gt1-xr.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Soundpeats Trueengine 2',
                'slug' => 'soundpeats-trueengine-2',
                'price' => 485000,
                'image' => 'soundpeats-trueengine-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Soundpeats Trueshift 2',
                'slug' => 'soundpeats-trueshift-2',
                'price' => 393000,
                'image' => 'soundpeats-trueshift-2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UNEED T-LED Kabel Data',
                'slug' => 'uneed-t-led-kabel-data',
                'price' => 34320,
                'image' => 'uneed-t-led-kabel-data.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'ACOME Kabel Data',
                'slug' => 'acome-kabel-data',
                'price' => 29900,
                'image' => 'acome-kabel-data.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
