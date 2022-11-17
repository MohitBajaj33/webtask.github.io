<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use \App\Models\Cake;
use \App\Models\Cake_down;

class CakeController extends Controller
{
    public function index(){

  $cake= Cake::all();
  $data['cakes']= $cake;

  $cake_down= Cake_down::all();
  $data_down['cakes_down']= $cake_down;

//   Cake_down::all();

    return view('index',$data,$data_down);
    }

    public function ShowDetails($id){
       // dd($id);
      $cake= DB::table('cake')->find($id);
      $cake_down= DB::table('cake_down')->find($id);
     
       return view ('cake',['cake'=>$cake],['cake_down'=> $cake_down]);
    }

   public function addToCart($cake_id){

    if(!session()->has('Register')){
        return redirect('login');
    }
//insert code
$user_id = session()->get('Register')->id;

 DB::table('carts')->insert([
     'user_id'=>$user_id,
     'cake_id'=>$cake_id,
 ]);

   return redirect('mycart');
   }

 public function showCart(){
    $user_id=session()->get('Register')->id;

    // $cart_items = DB::table('carts')
    // ->select('cake_down.*','carts.id as cart_id','carts.cake_id')
    //   ->join('cake_down','cake_down.id','=','carts.cake_id')
    //       ->where('user_id',$user_id)->get();

          $cart_items = DB::table('carts')
          ->select('cake.*','carts.id as cart_id','carts.cake_id')
      ->join('cake','cake.id','=','carts.cake_id')
          ->where('user_id',$user_id)->get();
    
    return view ('cart',['cart_items'=>$cart_items]);
   }

public function deletItem(Request $request){
    
      DB::table('carts')->where('cake_id',$request->cart_id)->delete();
      return redirect('mycart');
    }

    public function buynow($cake_id,$cart_id=''){
      if(!session()->has('Register')){
        return redirect('login');
    }
       
     $cake=DB::table('cake')->where('id',$cake_id)->first();

      return view('buy',['cake'=>$cake]);
    }

    public function FinalOrder(Request $request){
      $user_id=session()->get('Register')->id;
      DB::table('orders')->insert([
          'cart_id'=>$request->cart_id,
          'cake_id'=>$request->cake_id,
          'User_id'=>$request->$user_id,
          'price'=>$request->cost,
          'name'=>$request->name,
          'mobile'=>$request->mobile,
          'address'=>$request->address,
          'pincode'=>$request->pincode,
          'status'=>'Order Placed',
          'created_at'=>date('Y-m-d'),
          'created_at'=>date('Y-m-d'),
      ]);
 if(!empty($request->cart_id)){
       DB::table('carts')->where('id',$request->cart_id)->delete();
       return redirect('mycart');
 }
 return redirect('/');
    }

}
