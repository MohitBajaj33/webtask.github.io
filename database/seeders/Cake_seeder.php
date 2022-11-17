<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\Models\Cake;


class Cake_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cake')->insert([
            [
            'name'=>'Vanilla Cake',
            'category'=>'Cakes',
            'description'=>'This Vanilla Cake',
            'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/15.jpg',
            'cost'=>'300 Rs/Kg',
            ],
            [
                'name'=>'Butter Cake',
                'category'=>'Cakes',
                'description'=>'This Butter Cake',
                'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/17.jpg',
                'cost'=>'400 Rs/Kg',
                ],
                
              [
                'name'=>'Chochlate Cake',
                'category'=>'Cakes',
                'description'=>'This Chochlate Cake',
                'image'=>'http://localhost:8000/assets.limetray.com/assets/user_images/content_images/original/14.jpg',
                'cost'=>'480 Rs/Kg',
      ],
      [
        'name'=>'Candy Cake',
        'category'=>'Cakes',
        'description'=>'This Candy Cake',
        'image'=>'https://assets.limetray.com/assets/user_images/content_images/original/20.jpg',
        'cost'=>'250 Rs/Kg',
]
        ]);
    }
}
