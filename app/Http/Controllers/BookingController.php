<?php

namespace App\Http\Controllers;


use App\Locations;
use App\Payments;
use App\PaymentType;
use App\Reviews;
use App\TypeProducts;
use App\User;
use Illuminate\Http\Request;
use App\Bookings;
use Prophecy\Prophecy\Revealer;

class BookingController extends Controller
{
    public function getList(){
        $booking= Bookings::all();
        $user=User::all();
        $location=Locations::all();
        $review = Reviews::all();
        $payment = Payments::all();
        $paymenttype = PaymentType::all();
        return view('admin.booking.view',['booking'=>$booking,'user'=>$user,'location'=>$location,'review'=>$review,'payment'=>$payment,'paymenttype'=>$paymenttype]);
    }


}
