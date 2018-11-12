<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Categories;
use App\Products;
use App\Suppliers;
use Illuminate\Http\Request;
use Session;

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

    // Shopping Cart
    public function getAddToCart(Request $request, $id)
    {
        $product = Products::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->intended(route('store.products'));
    }

    public function getReduceOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeOne($id);

        if (count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        Session::put('cart', $cart);
        return redirect()->intended(route('product.shoppingCart'));
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeAll($id);

        if (count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        Session::put('cart', $cart);
        return redirect()->intended(route('product.shoppingCart'));

    }

    public function getCart()
    {
        if(!Session::get('cart'))
        {
            return view('store.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('store.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart'))
        {
            return view('store.shopping-cart');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        $total = $cart->totalPrice;
        return view('store.checkout', ['total' => $total]);
    }

    public function postCheckout()
    {

    }
}
