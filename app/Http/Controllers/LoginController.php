<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Register;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(Request $request){
       
    $email =$request->email;
    $password =$request->password;
    
    $user =Register::where(['email'=>$email])->first();
    if(Hash::check($password,$user->password)){
        
        $request->session()->put('Register',$user);
        return redirect('/?Status=LoggedIn');
      }else{
        return redirect('/login?Status=Login-Failed');
       }

     }

     public function logout(Request $request){
        $request->session()->forget('Register');
       return redirect('/?Status=Logout-Succesfully');
     }
}
