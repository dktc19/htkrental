<?php

namespace App\Http\Controllers;
use App\Locations;
use App\Products;
use App\TypeProducts;
use App\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getList(){
        $product= Products::all();
        $location =Locations::all();
        $typeproduct = TypeProducts::all();
        return view('admin.product.view',['product'=>$product,'location'=>$location,'typeproduct'=>$typeproduct]);
    }
    public function getAdd(){
        $Location = Locations::all();
        $Typeproduct =  TypeProducts::all();
        return view ('admin.product.add',['Location'=>$Location,'Typeproduct'=>$Typeproduct]);
    }

    public function postAdd(Request $request){
        $this ->validate($request,
            [

            ],
            [


            ]);
        $product = new Products();
        $product->title = $request->title;
        $product->idLocation = $request->idLocation;
        $product->idModel = $request->idModel;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $image=$file->getClientOriginalName();
            $file->move('upload/image/image_product',$image);
            $product->image=$image;
        }
        $product->daily_price = $request->daily_price;
        $product->save();

        return redirect('admin/product/add')->with('notice','Add Successfully');
    }
    public function getEdit($id){
        $product = Products::find($id);
        $Location = Locations::all();
        $Typeproduct = TypeProducts::all();
        return view('admin.product.edit',['product' => $product,'Location'=>$Location,'Typeproduct'=>$Typeproduct]);
    }
    public function postEdit(Request $request, $id){
        $this ->validate($request,[

        ],[

        ]);

        $product = Products::find($id);

        $product -> idLocation = $request -> idLocation;
        $product ->idModel =$request->idModel;
        $product-> daily_price =$request->daily_price;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $image=$file->getClientOriginalName();
            $file->move('upload/image/image_product',$image);
            $product->image=$image;
        }
        $product -> save();

        return redirect('admin/product/view')->with('notice', 'Edit success');
    }
    public function getDelete($id){
        $product = Products::find($id);
        $product->delete();
        return redirect('admin/product/view')->with('notice', 'Delete success');
    }
}
