<?php

namespace App\Http\Controllers;
use App\Manufactures;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    public function getList() {
        $manufacture= Manufactures::all();
        return view('admin.manufacture.view',['manufacture'=>$manufacture]);
    }
    public function getAdd(){
        return view ('admin.manufacture.add');
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
        $manufacture = new Manufactures;
        $manufacture->name = $request->name;
        $manufacture->save();

        return redirect('admin/manufacture/add')->with('notice','Add Successfully');
    }

    public function getEdit($id){
        $manufacture = Manufactures::find($id);
        return view('admin.manufacture.edit',['manufacture' => $manufacture]);
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

        $manufacture = Manufactures::find($id);

        $manufacture -> name = $request -> name;

        $manufacture -> save();

        return redirect('admin/manufacture/view')->with('notice', 'Edit success');
    }

    public function getDelete($id){
        $manufacture = Manufactures::find($id);
        $manufacture->delete();
        return redirect('admin/manufacture/view')->with('notice', 'Delete success');
    }
}
