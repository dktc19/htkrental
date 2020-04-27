<?php

namespace App\Http\Controllers;
use App\Manufactures;
use App\TypeProducts;
use Illuminate\Http\Request;

class TypeProductController extends Controller
{
    public function getList(){
        $typeproduct= TypeProducts::all();
        $manufacture =Manufactures::all();
        return view('admin.typeproduct.view',['typeproduct'=>$typeproduct,'manufacture'=>$manufacture]);
    }
    public function getAdd(){
        $Manufacture = Manufactures::all();
        return view ('admin.typeproduct.add',['Manufacture'=>$Manufacture]);
    }

    public function postAdd(Request $request){
        $this ->validate($request,
            [
                'name'=> 'required|min:3|max:50|unique:users'
            ],
            [
                'name.required'=> 'Do not empty!',
                'name.unique'=> 'Name already exist',
                'name.min'=> 'Names must be between 3 and 50 characters',
                'name.max'=> 'Names must be between 3 and 50 characters',
            ]);
        $typeproduct = new TypeProducts;
        $typeproduct->name = $request->name;
        $typeproduct->idManufacture = $request->idManufacture;
        $typeproduct->save();

        return redirect('admin/typeproduct/add')->with('notice','Add Successfully');
    }
    public function getEdit($id){
        $typeproduct = TypeProducts::find($id);
        $Manufacture = Manufactures::all();
        return view('admin.typeproduct.edit',['typeproduct' => $typeproduct,'Manufacture'=>$Manufacture]);
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

        $typeproduct = TypeProducts::find($id);

        $typeproduct -> name = $request -> name;
        $typeproduct ->idManufacture =$request->idManufacture;
        $typeproduct -> save();

        return redirect('admin/typeproduct/view')->with('notice', 'Edit success');
    }
    public function getDelete($id){
        $typeproduct = TypeProducts::find($id);
        $typeproduct->delete();
        return redirect('admin/typeproduct/view')->with('notice', 'Delete success');
    }
}
