@extends('shared.layouts.master')
@section('title', "Shopping Cart")
@section ('styles')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@section('content')
    <br>
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <strong>{{$product['item']['name']}}</strong>
                            <span class="label">{{$product['qty']}}</span>
                            <span class="label">{{$product['price']}}</span>
                                <a href="{{route('product.removeOne', ['id' => $product['item']['id']])}}"><span class="label text-warning">-1 </span></a>
                                <a href="{{route('product.removeAll', ['id' => $product['item']['id']])}}"><span class="label text-warning">All</span></a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: ${{$totalPrice}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
        <br>
    @else
        <div class="row">
            <div class="col-sm6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>No Items</strong>
            </div>
        </div>
    @endif
@endsection
