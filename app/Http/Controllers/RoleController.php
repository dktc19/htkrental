<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{
    public function getList() {
        $role= Role::all();
        return view('admin.role.view',['role'=>$role]);
    }
    public function getAdd(){
        return view ('admin.role.add');
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
        $role = new Role;
        $role->name = $request->name;
        $role->save();

        return redirect('admin/role/add')->with('notice','Add Successfully');
    }

    public function getEdit($id){
        $role = Role::find($id);
        return view('admin.role.edit',['role' => $role]);
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

        $role = Role::find($id);

        $role -> name = $request -> name;

        $role -> save();

        return redirect('admin/role/view')->with('notice', 'Edit success');
    }

    public function getDelete($id){
        $role = Role::find($id);
        $role->delete();
        return redirect('admin/role/view')->with('notice', 'Delete success');
    }
}
