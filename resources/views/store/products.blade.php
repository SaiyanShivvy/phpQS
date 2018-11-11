@extends('shared.layouts.master')
@section('title', 'Gallery')
<style rel="text/css">
    .card-img-top {
        height: 15rem;
        object-fit: contain;
    }
</style>
@section('content')
    @foreach($products->chunk(4) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
            {{--Bootstrap Card View to Display Products--}}
            <div class="col-md-6 col-lg-3">
                <br>
                <div class="card">
                    <img class="card-img-top" src="{{$product->image}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <h5>${{$product->price}}</h5>
                            </div>
                            <div class="col">
                                <a href="#" class="btn btn-success btn-block">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endforeach
    <br>
@endsection()
