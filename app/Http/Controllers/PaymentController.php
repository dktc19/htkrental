<?php

namespace App\Http\Controllers;

use App\PaymentType;
use Illuminate\Http\Request;
use App\Payments;
class PaymentController extends Controller
{
    public function getList(){
        $payment= Payments::all();
        $paymenttype = PaymentType::all();
        return view('admin.payment.view',['payment'=>$payment,'paymenttype'=>$paymenttype]);
    }
}
