<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use App\Suppliers;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('store.products', ['products'=> $products]);
    }

    public function viewDetails($id){
        $product=Products::find($id);
        $categories=Categories::pluck('name','id');
        $suppliers= Suppliers::pluck('name','id');
        return view('store.product',compact(['product','categories','suppliers']));
    }

    public function adminIndex(){
        $products = Products::all();
        return view('admin.management.products.index', compact('products'));
    }

    public function create()
    {
        $categories= Categories::pluck('name','id');
        $suppliers= Suppliers::pluck('name','id');
        return view('admin.management.products.create',compact(['categories','suppliers']));
    }

    public function createPost(Request $request)
    {
        $formInput=$request->except('image');
        // validation
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'stock'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);
        // image upload
        $image=$request->image;
        if($image){
            $imageName=$imageName=time(). $image->getClientOriginalName();
            $image->move('storage/uploads/',$imageName);
            $formInput['image']=$imageName;
        }
        Products::create($formInput);
        return redirect()->route('admin.products');
    }
}
