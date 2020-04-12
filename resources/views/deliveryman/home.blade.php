@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row my-5">
        <div class="">
            <h3><strong>DeliveryMan</strong></h3>
        </div>
        <div class="ml-auto">
            <button type="submit" class="btn btn-outline-dark">History</button>  
        </div>
    </div>

    @foreach($orders->chunk(4) as $chunk)
    <div class="row">
        @foreach ($chunk as $order)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">                
                <div class="card-body">
                    <h4 class="card-title">Order Number</h4>
                    <p class="card-text">Customer Location</p>
                    <p class="card-text">Shop Name</p> 
                    <p class="card-text">Total Price</p>
                    <button type="submit" class="btn btn-block btn-primary">Take Order</button>
                <div>          
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
</div>

@endsection