<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(Request $request){
    $post = $request->all();
    $register = new Register;
    $register->name=$post['name'];
    $register->mobile=$post['mobile'];
    $register->gender=$post['gender'];
    $register->email=$post['email'];
    $register->password=Hash::make($post['password']);
    $register->address=$post['address'];
    $register->save();


    return redirect('login');
}
}
