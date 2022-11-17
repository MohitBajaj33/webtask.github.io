<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\Models\Cake_down;

class Cake_down_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cake_down')->insert([
            [
            'name'=>'Vanilla Cake',
            'category'=>'Cakes',
            'description'=>'This Vanilla Cake',
            'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/asdadadsaasd.jpg',
            'cost'=>'300 Rs/Kg',
            ],
            [
                'name'=>'Butter Cake',
                'category'=>'Cakes',
                'description'=>'This Butter Cake',
                'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/13.jpg',
                'cost'=>'400 Rs/Kg',
                ],
                [
                    'name'=>'Pineapple Cake',
                    'category'=>'Cakes',
                    'description'=>'This Pineapple Cake',
                    'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/23.jpg',
                    'cost'=>'200 Rs/Kg',
                    ],
                 [
                        'name'=>'Pineapple Cake',
                        'category'=>'Cakes',
                        'description'=>'This Pineapple Cake',
                        'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/24.jpg',
                        'cost'=>'280 Rs/Kg',
              ],
              [
                'name'=>'Chochlate Cake',
                'category'=>'Cakes',
                'description'=>'This Chochlate Cake',
                'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/156.jpg',
                'cost'=>'480 Rs/Kg',
      ]
        ]);
    }
}
