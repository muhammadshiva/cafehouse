<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Americano 1',
                'content' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.',
                'image' => 'img/menu-1.jpg',
                'price' => '<span class="tm-product-price-currency">$</span>30'
            ],
            [
                'title' => 'Americano 2',
                'content' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.',
                'image' => 'img/menu-2.jpg',
                'price' => '<span class="tm-product-price-currency">$</span>20'
            ],
            [
                'title' => 'Americano 3',
                'content' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.',
                'image' => 'img/menu-3.jpg',
                'price' => '<span class="tm-product-price-currency">$</span>15'
            ],
            [
                'title' => 'Americano 4',
                'content' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.',
                'image' => 'img/menu-4.jpg',
                'price' => '<span class="tm-product-price-currency">$</span>25'
            ],
            [
                'title' => 'Americano 5',
                'content' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.',
                'image' => 'img/menu-5.jpg',
                'price' => '<span class="tm-product-price-currency">$</span>45'
            ],
        ];

        DB::table('menus')->insert($data);
    }
}
