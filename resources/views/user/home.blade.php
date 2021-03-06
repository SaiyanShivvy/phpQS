@extends('shared.layouts.master')
@section('title', 'Dashboard')
@section('content')
    <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            @component('shared.components.who')
                            @endcomponent

                    </div>
                </div>
            </div>
        </div>
    <br>
@endsection
