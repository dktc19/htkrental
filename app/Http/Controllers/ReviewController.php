<?php

namespace App\Http\Controllers;
use App\Products;
use App\Reviews;

use http\Client\Curl\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function getList(){
        $review= Reviews::all();
        $user= \App\User::all();
        $product= Products::all();
        return view('admin.review.view',['review'=>$review,'user'=>$user,'product'=>$product]);
    }
}
