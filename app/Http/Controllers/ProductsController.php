<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('store.products', ['products'=> $products]);
    }

    public function viewDetails(){
        return view('store.product');
    }
}
