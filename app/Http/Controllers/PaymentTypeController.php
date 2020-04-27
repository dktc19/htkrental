<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentType;
class PaymentTypeController extends Controller
{
    public function getList() {
        $paymenttype= PaymentType::all();
        return view('admin.paymenttype.view',['paymenttype'=>$paymenttype]);
    }
    public function getAdd(){
        return view ('admin.paymenttype.add');
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
        $paymenttype = new PaymentType;
        $paymenttype->name = $request->name;
        $paymenttype->save();

        return redirect('admin/paymenttype/add')->with('notice','Add Successfully');
    }

    public function getEdit($id){
        $paymenttype = PaymentType::find($id);
        return view('admin.paymenttype.edit',['paymenttype' => $paymenttype]);
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

        $paymenttype = PaymentType::find($id);

        $paymenttype -> name = $request -> name;

        $paymenttype -> save();

        return redirect('admin/paymenttype/view')->with('notice', 'Edit success');
    }

    public function getDelete($id){
        $paymenttype = PaymentType::find($id);
        $paymenttype->delete();
        return redirect('admin/paymenttype/view')->with('notice', 'Delete success');
    }
}
