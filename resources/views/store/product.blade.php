@extends('shared.layouts.master')
@section('title', 'Product Detail')
@section('content')
    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="{{$product->image}}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag">${{$product->price}}</span> {{$product->name}}
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <a href="#" class="button  expanded">Add to Cart</a>
                    </div>
                </div>
                <p class="text-left subheader"><small>Remaining: {{$product->stock}}</small></p>

            </div>
        </div>
    </div>
    </div>
    <br>
@endsection()

