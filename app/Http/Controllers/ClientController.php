<?php

namespace App\Http\Controllers;

use App\Bookings;
use App\Locations;
use App\Products;
use App\Reviews;
use App\TypeProducts;


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
        $product = Products::all();
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
            return redirect('home');
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
        $user->idRole= 0;
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


    public function getLogout(){
        Auth::logout();
        return redirect('home');
    }

    public function getUser(){
        return view('pages.user');
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

    }


    public function getListProduct( Request $request){
        $product= Products::orderBy('created_at','asc')->paginate(6);
        $typeproduct =TypeProducts::all();
        $id_typeproduct= $request->id_typeproduct;
        return view('pages.listproduct',['product'=>$product,'typeproduct'=>$typeproduct,'id_typeproduct'=>$id_typeproduct]);
    }

    public function getListDetail($id){
        $product= Products::find($id);
        $review =Reviews::all();
        $user = User::all();
        return view('pages.listdetail',['product'=>$product,'review'=>$review,'user'=>$user]);
    }

    public function postComment($id, Request $request){
        $review = new Reviews;
        $review->idProduct= $id;
        $review->idUser = Auth::user()->id;
        $review->Description = $request->contentcomment;
        $review->Rating= 0;
        $review->save();

        return redirect("listdetail/".$id)->with('notice','Comment Success');
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
        $product= Products::where('title','like','%'.$request->key.'%')->get();
        $product= Products::orderBy('created_at','asc')->paginate(6);
        $id_receivelc = $request->id_receivelc;
        $location =Locations::all();
        $typeproduct = TypeProducts::all();
        $bookings = Bookings::all();
        return view('pages.search',['product'=>$product,'typeproduct'=>$typeproduct,'location'=>$location,'id_receivelc'=>$id_receivelc,'bookings'=>$bookings]);
    }
}
