<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Products;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Categories::all();
        return view('admin.categories.index',compact(['categories','products']));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Categories::create(['name'=>$request->name,'slug'=>str_slug($request->name)]);
        return back();
    }

    public function show($categoryId=null)
    {
        if(!empty($categoryId)){
            $products=Categories::find($categoryId)->products;
        }
        $categories=Categories::all();
        return view('admin.categories.index',compact(['categories','products']));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $category=Categories::find($id);
        $category->products()->delete();
        $category->delete();
        return back();
    }
}
