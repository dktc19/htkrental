<?php

namespace App\Http\Controllers;
use App\Reviews;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function getList(){
        $review= Reviews::all();
        return view('admin.review.view',['review'=>$review]);
    }
}
