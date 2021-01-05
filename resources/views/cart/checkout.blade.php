@extends('layouts.app')

@section('content')
<div class="container mt-3">

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <h4 class="page-heading text-center">Checkout</h4>

    <div class="container">
        <div class="row justify-content-md-center">
            <img src="{{asset('images/bkash-payment.gif')}}" alt="">
        </div>
        <div class="row justify-content-md-center">
            <button type="button" class="btn btn-primary">Pay With Bkash</button>
        </div>
    </div>

</div>

@endsection