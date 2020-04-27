<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function getList(){
        $user= User::all();
        $role= Role::all(); //define
        return view('admin.user.view',['user'=>$user,'role'=>$role]);
    }

    public function getAdd(){
        $Role = Role::all();
        return view ('admin.user.add',['Role'=>$Role]);
    }

    public function postAdd(Request $request){
        $this ->validate($request,
            [
                'name'=> 'required|min:3|max:50|unique:users',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:3|max:30'

            ],
            [
                'name.required'=> 'Do not empty!',
                'name.unique'=> 'Name already exist',
                'name.min'=> 'Names must be between 3 and 50 characters',
                'name.max'=> 'Names must be between 3 and 50 characters',
                'password.required'=>'Please input the password',
                'password.min'=>'The password must be at least 3 characters',
                'password.max'=>'The password maximum 30 characters',
                'email.required'=>'You are not input Email',
                'email.email'=>'Please Input Email Format',
                'email.unique'=>'Email already exist',
            ]);
        $user = new User;
        $user->name = $request->name;
        $user->email= $request->email;
        $user->password= bcrypt($request->password);
        $user->address= $request->address;
        $user->gender= $request->gender;
        $user->idRole= $request->idRole;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $image=$file->getClientOriginalName();
            $file->move('upload/image/image_user',$image);
            $user->image=$image;
        }
        $user->phone= $request->phone;
        $user->DateofBirth= $request->DateofBirth;
        $user->save();

        return redirect('admin/user/add')->with('notice','Add Successfully');
    }

    public function getEdit($id){
        $user = User::find($id);
        $Role = Role::all();
        return view('admin.user.edit',['user' => $user,'Role'=>$Role]);
    }
    public function postEdit(Request $request, $id){
        $this ->validate($request,[
            'name' => 'required|min:3|max:50|unique:roles',
//            'password'=>'required|min:3|max:30',
            'address'=>'required',
            'gender'=>'required',
            'phone'=>'required|max:10',
        ],[
            'name.required'=> 'Do not empty!',
            'name.unique'=> 'Name already exist',
            'name.min'=> 'Names must be between 3 and 50 characters',
            'name.max'=> 'Names must be between 3 and 50 characters',
//            'password.required'=>'You are not input password',
//            'password.min'=>'Password must be 3 characters',
//            'password.max'=>'Maximum password  30 characters',
            'address.required'=>'Please Input address',
            'gender.required'=>'Please Input gender',
            'phone.required'=>'Please Input Your Phone',
            'phone.max'=> 'Phone numbers have a maximum of 10 characters'
        ]);

        $user = User::find($id);

        $user -> name = $request -> name;
        $user->email= $request->email;
        $user->password= bcrypt($request->password);
        $user->address= $request->address;
        $user->gender= $request->gender;
        $user->idRole= $request->idRole;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $image=$file->getClientOriginalName();
            $file->move('upload/image/image_user',$image);
            $user->image=$image;
        }
        $user->phone= $request->phone;
        $user->DateofBirth= $request->DateofBirth;
        $user -> save();

        return redirect('admin/user/view')->with('notice', 'Edit success');
    }

    public function getDelete($id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/view')->with('notice', 'Delete success');
    }
}
