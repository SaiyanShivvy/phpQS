@extends('shared.layouts.master')
@section('title', "Shopping Cart")
@section('content')
        <div class="small-6 small-centered columns">
            {{csrf_field()}}
            <span class="payment-errors"></span>
            <h1>Checkout</h1>
            <h4>Your Total: ${{$total}}</h4>
            <form action="{{route('checkout')}}" method="post" id="checkout-form">
                {{--Use Stripe Payments--}}
                <div class="form-row">
                    <div class="col-xs-12">
                        <label for="name">Name</label>
                        <input  type="text" id="name" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="Address">Address</label>
                        <input  type="text" id="address" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-xs-12">
                        <label for="card-name">Name on Card</label>
                        <input  type="text" id="card-name" class="form-control" required>
                    </div>
                    <div class="col-xs-12">
                        <label for="card-number">Credit Card Number</label>
                        <input  type="text" id="card-number" class="form-control" required>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-row">
                            <div class="col-xs-1">
                                <label for="card-expiry-month">Expiration Month</label>
                                <input  type="text" id="card-expiry-month" class="form-control" required>
                            </div>
                            <div class="col-xs-1">
                                <label for="card-expiry-year">Expiration Year</label>
                                <input type="text" id="card-expiry-year" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-1">
                        <label for="card-cvc">CVC</label>
                        <input  type="text" id="card-cvc" class="form-control" required>
                    </div>
                </div>
                {{--<button type="submit" class="btn btn-success">Submit</button>--}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
                    Pay Now
                </button>

                <!-- Modal -->
                <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">We're working on it.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Hey, slow down there! This feature isn't quite ready yet.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <br>
@endsection
@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ URL::to('js/checkout.js') }}"></script>
@endsection











