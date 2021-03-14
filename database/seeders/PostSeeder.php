<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
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
                'title' => '<span class="tm-handwriting-font bigger-first-letter">a</span>mericano',
                'content' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.',
                'image' => 'img/popular-1.jpg'
            ],
            [
                'title' => '<span class="tm-handwriting-font bigger-first-letter">c</span>appuccino',
                'content' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.',
                'image' => 'img/popular-2.jpg'
            ],
            [
                'title' => '<span class="tm-handwriting-font bigger-first-letter">m</span>ocha',
                'content' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.',
                'image' => 'img/popular-3.jpg'
            ],
            [
                'title' => '<span class="tm-handwriting-font bigger-first-letter">a</span>mericano',
                'content' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.',
                'image' => 'img/popular-1.jpg'
            ],
            [
                'title' => '<span class="tm-handwriting-font bigger-first-letter">c</span>appuccino',
                'content' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.',
                'image' => 'img/popular-2.jpg'
            ],
            [
                'title' => '<span class="tm-handwriting-font bigger-first-letter">m</span>ocha',
                'content' => 'Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque. sed ipsum.',
                'image' => 'img/popular-3.jpg'
            ],
        ];

        DB::table('posts')->insert($data);
    }
}
