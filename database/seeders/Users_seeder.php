<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class Users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Mohit Bajaj',
            'email'=>'mohitbajaj89955@gmail.com',
            'password'=>Hash::make('123'),
            'mobile'=>'9720161885'
        ]);
    }
}
