<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locations;

class LocationController extends Controller
{
    public function getList(){
        $location= Locations::all();
        return view('admin.location.view',['location'=>$location]);
    }

    public function getAdd(){
        return view ('admin.location.add');
    }
    public function postAdd(Request $request){
        $this ->validate($request,
            [
                'name'=> 'required|min:3|max:50|unique:roles'
            ],
            [
                'name.required'=> 'Do not empty!',
                'name.unique'=> 'Name already exist',
                'name.min'=> 'Names must be between 3 and 50 characters',
                'name.max'=> 'Names must be between 3 and 50 characters',
            ]);
        $location = new Locations;
        $location->name = $request->name;
        $location->address= $request->address;
        $location->contactPhone= $request->contactPhone;
        $location->save();

        return redirect('admin/location/view')->with('notice','Add Successfully');
    }
    public function getEdit($id){
        $location = Locations::find($id);
        return view('admin.location.edit',['location' => $location]);
    }
    public function postEdit(Request $request, $id){
        $this ->validate($request,[
            'name' => 'required|min:3|max:50|unique:roles'
        ],[
            'name.required'=> 'Do not empty!',
            'name.unique'=> 'Name already exist',
            'name.min'=> 'Names must be between 3 and 50 characters',
            'name.max'=> 'Names must be between 3 and 50 characters',
        ]);

        $location = Locations::find($id);

        $location -> name = $request -> name;
        $location->address= $request->address;
        $location->contactPhone= $request->contactPhone;
        $location -> save();

        return redirect('admin/location/view')->with('notice', 'Edit success');
    }

    public function getDelete($id){
        $location = Locations::find($id);
        $location->delete();
        return redirect('admin/location/view')->with('notice', 'Delete success');
    }
}
