<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()

    {


        DB::table('products')->insert([
            [
                'name' => 'MilkShake',
                'description' => 'Vanilla Milkshake',
                'image' => asset('storage/assets/images/' . $item['Venilla_PNG-1.png']),
                'category' => 'Food & Beverage',
                'price' => 'RS:199',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Spinz',
                'description' => 'Spinz-BB-Creme-NEW-Tub',
                'image' => 'https://cavinkare.com/img/2017/10/Spinz-BB-Creme-NEW-Tub-09-10-17-2.png',
                'category' => 'Bueaty Product',
                'price' => 'RS:1999',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Butter ',
                'description' => 'Cooking-Butter',
                'image' => 'https://cavinkare.com/img/2017/03/Cooking-Butter.jpg',
                'category' => 'Food',
                'price' => 'RS:99',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'MilkShake',
                'description' => 'Strawberry MilkShake',
                'image' => 'https://cavinkare.com/img/2017/03/Strawberry_PNG-1.png',
                'category' => 'Category 2',
                'price' => '19.99',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chik',
                'description' => 'Chik-egg-shape-fin',
                'image' => 'https://cavinkare.com/img/2017/03/180ml-Chik-egg-shape-fin-M.png',
                'category' => 'Category 2',
                'price' => '19.99',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
}}


