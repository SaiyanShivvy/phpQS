@extends('shared.layouts.master')
@section('title','Home')
@section('content')
    <section class="hero text-center">
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
        <a href="{{url('/products')}}"><button class="button large">Check out the Products</button></a>
    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
           Latest Products
        </h2>
    </div>

    <!-- Latest Products **To replace with database ones. -->
    <div class="row">
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="{{url('/product')}}">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                </p>
            </div>
        </div>
        <div class="small-3 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a class="button expanded add-to-cart">
                        Add to Cart
                    </a>
                    <a href="#">
                        <img src="http://i.imgur.com/Mcw06Yt.png"/>
                    </a>
                </div>
                <a href="#">
                    <h3>
                        Kickin with Kraken Tee
                    </h3>
                </a>
                <h5>
                    $19.99
                </h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                </p>
            </div>
        </div>
    </div>
    <br>
@endsection

