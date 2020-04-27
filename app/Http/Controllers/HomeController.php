<?php

namespace App\Http\Controllers;
use App\Products;
use App\Reviews;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function getList(){
        $review= Reviews::all();
        return view('admin.home.view',['review'=>$review]);
    }
}
