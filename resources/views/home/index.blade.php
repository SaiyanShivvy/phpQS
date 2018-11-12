@extends('shared.layouts.master')
@section('title','Home')
@section('content')
    <section class="hero text-center" style="background-image: url('images/banner1.jpg')">
        <br/>
        <br/>
        <br/>
        <br/>
        <h2 >
            <strong>
                Welcome to Quality Souvenir's
            </strong>
        </h2>
        <br>
        <a href="{{route('store.products')}}"><button class="button large">Check out the Products</button></a>
        {{--@component('shared.components.who')--}}
        {{--@endcomponent--}}
    </section>
    <br/>
    {{--<div class="subheader text-center">--}}
        {{--<h2>--}}
           {{--Latest Products--}}
        {{--</h2>--}}
    {{--</div>--}}
    {{--@foreach($products = \App\Products::all())--}}
    {{--@foreach($products->chunk(4) as $productChunk)--}}
        {{--<div class="row">--}}
            {{--@foreach($productChunk as $product)--}}
                {{--Bootstrap Card View to Display Products--}}
                {{--<div class="c">--}}
                    {{--<div class="card">--}}
                        {{--<img class="card-img-top" src="{{$product->image}}" alt="">--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">{{$product->name}}</h5>--}}
                            {{--<p class="card-text">{{$product->description}}</p>--}}
                        {{--</div>--}}
                        {{--<div class="card-footer">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col">--}}
                                    {{--<h5>${{$product->price}}</h5>--}}
                                {{--</div>--}}
                                {{--<div class="col">--}}
                                    {{--<h5>Stock: {{$product->stock}}</h5>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--@endforeach--}}
    {{--<br>--}}
    {{--@endforeach--}}
@endsection

