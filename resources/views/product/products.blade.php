@extends('layouts.app')

@section('content')
<div class="container mt-4">

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


    <h4 class="text-center page-heading">The largest inventory in the country!</h4>

    @foreach($products->chunk(4) as $prods)
    <div class="row">
        @foreach($prods as $prod)
            <div class="col-md-3">
                        <div class="card my-3 prod-card">
                            <div class="card-img">
                                <img class="card-img-top" src="{{asset('images/' .  $prod->image)}}" width="200" alt="Card image cap">
                                <div class="prod-details">500g</div>
                            </div>


                                <div class="card-body">
                                    <h5 class="card-title text-center">{{$prod->name}}</h5>
                                    
                                    <div class="d-flex justify-content-between px-4">
                                    <form action="{{route('cart.store')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$prod->product_id}}">
                                        <input type="hidden" name="price" value="{{$prod->price}}">
                                        <input type="hidden" name="name" value="{{$prod->name}}">
                                        <input type="hidden" name="qty" value="1">
                                        <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                                    </form>                                    
                                    
                                    </div>
                                </div>
                        </div>
            </div>
        @endforeach
    </div>    
    @endforeach





</div>
@endsection