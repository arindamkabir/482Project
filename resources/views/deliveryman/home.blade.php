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




    @foreach($orders_pending->chunk(4) as $chunk)
        <div class="row text-center">
            @foreach ($chunk as $order)

            <div class="col-md-3">
                <div class="card">
                <div class="card-body">
                    <a href="{{route('deliveryman.show_order',$order->order_id)}}"><h4 class="card-title">Order Number:  {{$order->order_id}}</h4></a>
                    <p class="card-text">Customer Location: {{$order->location}}</p>
                    <p class="card-text">Total Amount: Taka {{$order->total}}</p>

                    <form action="{{route('deliveryman.show_order', $order->order_id)}}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-block btn-primary">Take Order</button>
                    </form>   
                </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach






</div>

@endsection