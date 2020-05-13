<?php

namespace App\Http\Controllers;

use App\Bookings;
use App\Locations;
use App\Payments;
use App\PaymentType;
use App\Products;
use App\Reviews;
use App\TypeProducts;
use Carbon\Carbon;

use Illuminate\Pagination\Paginator;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use PhpParser\Node\Expr\New_;


class ClientController extends Controller
{

    public function getList()
    {
        $product = Products::orderBy('created_at', 'desc')->take(5)->get();
        $typeproduct =TypeProducts::all();
        $location = Locations::all();

        return view('pages.homepage',['product'=>$product,'typeproduct'=>$typeproduct,'location'=>$location]);
    }

    public function getLogin()
    {
        return view('pages.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:3|max:50'
        ], [
            'email.required' => 'Please input email',
            'password.required' => 'Please input password',
            'password.min' => 'Password must be more than 3 characters',
            'password.max' => 'Password must be less than 50 characters'

        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        } else {
            return redirect('login')->with('notice', 'Login Failed');
        }
    }

    public function postRegister(Request $request){
        $this ->validate($request,
            [
                'email'=>'required|unique:users',
                'password'=>'required|min:3|max:30|same:repassword',
            ],
            [
                'password.required'=>'Please input the password',
                'password.min'=>'The password must be at least 3 characters',
                'password.max'=>'The password maximum 30 characters',
                'email.required'=>'You are not input Email',
                'email.unique'=>'Email already exist',
            ]);
        $user= new User;
        $user->name =$request->name;
        $user->email= $request->email;
        $user->password= bcrypt($request->password);
        $user->idRole= 2;
        $user->active = 0;
        $user->save();
        $id= $user->id;
        $activesuccess = $user->email;
        Mail::send('pages.email.active',[
            'id'=>$id],function ($message)use ($activesuccess){
            $message->to($activesuccess,'Visitors')->subject('Active Email success');
        });

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]));

        return redirect('login')->with('noticeRe','Register Successfully');

    }
    public function getActiveSuccess($id){
        $user =User::find($id);
        $user->active = 1;
        $user->save();
        return view('pages.activesuccess');
    }

    public function getActiveEmail($id){
        $user =User::find($id);
        $user->active = 1;
        $user->save();
        return view('pages.activesuccess');
    }


    public function getLogout(){
        Auth::logout();
        return redirect('home');
    }

    public function getUser(){
        $booking = Bookings::all();
        $user = User::all();
        return view('pages.user',['booking'=>$booking,'user'=>$user]);
    }

   public function postUser(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3',
            'address'=>'required',
            'gender'=>'required',
            'phone'=>'required|max:10',
        ],[
            'name.required'=>'Please Input the Name of User',
            'name.min'=>'Name must be at least 3 characters',
            'address.required'=>'Please Input address',
            'gender.required'=>'Please Input gender',
            'phone.required'=>'Please Input Your Phone',
            'phone.max'=> 'Phone numbers have a maximum of 10 characters'
        ]);

        $id=Auth::user()->id;
        $user = User::find($id);
        $user->name=$request->name;
        $user->address=$request->address;
        $user->gender= $request->gender;
       if ($request->hasFile('image')){
           $file = $request->file('image');
           $image=$file->getClientOriginalName();
           $file->move('upload/image/image_user',$image);
           $user->image=$image;
       }
        $user->phone= $request->phone;
        $user->DateofBirth= $request->DateofBirth;

        $user->save();
       return redirect('user')->with('notice','Edit Profile Success');
    }


    public function getListProduct( Request $request){
//        $product= Products::orderBy('created_at','asc')->paginate(4);
        $product= Products::orderBy('created_at','asc')->get();
        $typeproduct =TypeProducts::all();
        $id_typeproduct= $request->id_typeproduct;
        $price_min = $request->price_min;
        $price_max = $request->price_max;
        return view('pages.listproduct',['product'=>$product,'typeproduct'=>$typeproduct,'id_typeproduct'=>$id_typeproduct,'price_min'=>$price_min,'price_max'=>$price_max]);
    }

    public function getListDetail(Request $request ,$id){
        $product= Products::find($id);
        $review =Reviews::all();
        $user = User::all();
        $location =Locations::all();


        return view('pages.listdetail',['product'=>$product,'review'=>$review,'user'=>$user,'location'=>$location]);
    }

    public function postComment($id, Request $request){
        $review = new Reviews;
        $review->idProduct= $id;
        $review->idUser = Auth::user()->id;
        $review->Description = $request->description;
        $review->Rating= 0;
        $review->save();
        return redirect("listdetail/".$id);
    }

    public function getAbout(){
        return view('pages.about');
    }

    public function getContactus(){
        return view('pages.contactus');
    }

    public function postContactus(Request $request){
        $this ->validate($request,
            [
                'email'=>'required',
                'name'=>'required',
                'contentEmail'=>'required',
                'subject'=>'required',
            ],
            [
                'name.required'=>'Please input the password',
                'email.required'=>'You are not input Email',
                'contentEmail.required'=>'Please input the content',
                'subject.required'=>'Please input the subject',
            ]);
        $email= $request->email;
        $name = $request->name;
        $content=$request->contentEmail;
        $subject=$request->subject;

        Mail::send('pages.email.content',['content'=>$content
            ],function ($message) use ($email,$name,$subject){
            $message->from($email,$name);
            $message->to('htkrental@gmail.com')->subject($subject);
        });
        return redirect('contactus')->with('notice','Sent Email Successfully');
    }

    public function getSearch(Request $request){
        $product= Products::where('title','like','%'.$request->id_name.'%')->get();
        $id_receivelc = $request->id_receivelc;
        $location =Locations::all();
        $typeproduct = TypeProducts::all();
        $bookings = Bookings::all();
        return view('pages.search',compact('product'),['product'=>$product,'typeproduct'=>$typeproduct,'location'=>$location,'id_receivelc'=>$id_receivelc,'bookings'=>$bookings]);
    }

    public function getCheckout(Request $request, $id){
        $this ->validate($request, [
                'pickupDate'=>'required',
                'returnDate'=>'required',
                'pickupLocation'=>'required',
                'dropLocation'=>'required',
            ],
            [
                'pickupDate.required'=>'Please input the pick up day',
                'returnDate.required'=>'Please input the drop up day',
                'pickupLocation.required'=>'Please input the pick up location',
                'dropLocation.required'=>'Please input the drop location',
            ]);
        $product= Products::find($id);
        $user = User::all();
        $pickupLocation = $request->pickupLocation;
        $dropLocation = $request->dropLocation;
        $pickupDate = $request->pickupDate;
        $returnDate = $request->returnDate;
        Carbon::parse($pickupDate);
        Carbon::parse($returnDate);
        $dayrent= Carbon::parse($pickupDate)->diffInDays(Carbon::parse($returnDate));
        $totalprice=($dayrent*$product->daily_price);
        $location = Locations::all();
        return view('pages.checkout',['user'=>$user,'product'=>$product,
            'pickupLocation'=>$pickupLocation,'dropLocation'=>$dropLocation,'pickupDate'=>$pickupDate,
            'returnDate'=>$returnDate,'location'=>$location,'dayrent'=>$dayrent,'totalprice'=>$totalprice]);
    }
    public function postCheckout(Request $request,$id){

        $booking = new Bookings;

        $booking->pickupDay = Carbon::parse( $request->pickupDate);

        $booking->dropDay = Carbon::parse( $request->returnDate);
        $booking->idProduct = $request->id;
        $booking->idLocation = $request->pickupLocation;
        $booking->iddropLocation = $request->dropLocation;
        $booking->totalprice = $request->totalprice;
        $booking->idUser=Auth::user()->id;
        $booking->save();

        $idUser=Auth::user()->id;
        $User=User::find($idUser);
        $User->address = $request->address;
        $User->phone = $request->phone;
        $User->save();

        $findidProduct = $booking ->idProduct;
        $product = Products::find($findidProduct);
        $product->status = 1;
        $product->save();

       return redirect("checkout/".$id)->with('noticebk','Booking Success');
    }

    public function getProcessing(){
        $booking = Bookings::all();
        $user = User::all();
        $location =Locations::all();
        $product = Products::all();
        return view('pages.processing',['booking'=>$booking,
            'user'=>$user,'location'=>$location,'product'=>$product]);
    }
    public function getConfirm($id){
        $booking = Bookings::find($id);
        $booking->status = 3;
        $booking->save();
        $findidProduct = $booking ->idProduct;
        $product = Products::find($findidProduct);
        $product->status = 0;
        $product->save();
        return redirect('processing');
    }

    public function getProcessingbooking($id){
        $booking = Bookings::find($id);
        $user=  User::all();
        $booking->status = 1;
        $booking->save();
        $findidProduct = $booking ->idProduct;
        $product = Products::find($findidProduct);
        $product->status = 1;
        $product->save();
        foreach ($user as $us){
            if($booking->idUser == $us->id){
                $emailUser = $us->email;
            }
}
        Mail::send('pages.email.payment',[
            'id'=>$id],function ($message)use ($emailUser){
            $message->to($emailUser,'Visitors')->subject('Please perform payment');
        });

        return redirect('processing');
    }
    public function getPerforming($id){
        $booking = Bookings::find($id);
        $user=  User::all();
        $booking->status = 2;
        $booking->save();
        $findidProduct = $booking ->idProduct;
        $product = Products::find($findidProduct);
        $product->status = 1;
        $product->save();
        foreach ($user as $us){
            if($booking->idUser == $us->id){
                $confirmEmail = $us->email;
            }
        }
        Mail::send('pages.email.confirm',[
            'id'=>$id],function ($message)use ($confirmEmail){
            $message->to($confirmEmail,'Visitors')
                ->subject('Booking Success');
        });
        return redirect('processing');
    }
    public function getPaymentSuccess(){
        return view('pages.email.paymentsuccess');
    }

    public function getViewbookingUser(){
        $booking = Bookings::all();
        $user = User::all();
        $location =Locations::all();
        $product = Products::all();
        return view('pages.viewbooking',['booking'=>$booking,'user'=>$user,'location'=>$location,'product'=>$product]);
    }

    public function getError(){
        return view('pages.error');
    }
}
