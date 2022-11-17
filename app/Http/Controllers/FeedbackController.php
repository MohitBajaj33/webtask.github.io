<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index(Request $request){
        $post = $request->all();
       // dd($post);
        $feedback = new Feedback;
        $feedback->name=$post['user_name'];
        $feedback->email=$post['email'];
        $feedback->mobile=$post['phone_number'];
        $feedback->description=$post['description'];
       $feedback->save();
        
    }
}
