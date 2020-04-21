@extends('layouts.auth')

@section('content')

<div class="container">
    <div class="row my-5">
        <div class="">
            <h3><strong>DeliveryMan</strong></h3>
        </div>
    </div>


    <div class="card">
        <div class="card-head">
            <h4><strong>Order Number: {{$order->order_id}}<h4>
        </div>


        <div class="card-body">
            <div class="row">

                <div class = "col-md-4 mt-4 card prod-img-section pr-3">
                    <p>Customer Name: {{order->name}}</p>
                    <p>Location: {{order->location}}</p>
                    <p>Contact: {{order->contact}}</p>
                    <p>Total Amount: {{order->total}}</p>
                </div>

                <div class = "col-md-8 mt-4 card prod-img-section pr-3">
                    <table class="table table-hover table-dark " >
                        <thead>
                            <tr class="">
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Shop Name</th>
                                <th scope="col">Location</th>
                                <th scope="col">Subtotal</th>
                                </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>


                <div class="d-flex flex-row justify-content-center my-4">	
                    <form action="{{route('cart.empty')}}" class="align-self-end mx-2" method="GET">
                        <button type="submit" class="btn btn-sm btn-danger">Deliver</button>
                    </form>
			    </div>

            </div>        
        </div>


    </div>
</div>

@endsection