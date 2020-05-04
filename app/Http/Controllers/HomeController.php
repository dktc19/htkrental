<?php

namespace App\Http\Controllers;
use App\Bookings;
use App\Locations;
use App\Products;
use App\Reviews;
use App\User;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function getList(){
        $review= Reviews::all();
        $allBike = Products::count();
        $allBooking = Bookings::count();
        $allUser = User::count();
        $allLocation = Locations::count();
        return view('admin.home.view',['allBike'=>$allBike, 'review'=>$review,'allBooking'=>$allBooking,'allUser'=>$allUser,'allLocation'=>$allLocation]);
    }
}
