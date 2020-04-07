@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 mb-4 mt-4">
            <h3><strong>{{ $shop->shop_name }}</strong></h3>
        </div>
        <div class="col-lg-4 col-md-4 mb-4 mt-4">
            <button type="submit" class="btn btn-outline-dark">Add Product</button>  
        </div>
    </div>

    @foreach($products->chunk(3) as $chunk)
    <div class="row">
        @foreach ($chunk as $product)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{asset('images/' .  $product->image)}}" alt="" width="100%" height="100%"></a>
            <div class="card-body">
                <h4 class="card-title">
                <a href="{{route('product.show',$product->product_id)}}">{{$product->name}}</a>
                </h4>
                <h5>${{$product->price}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text">Stock available: {{$product->stock}}</p>
                <button type="submit" class="btn btn-block btn-outline-primary" style="float:right;">Edit</button>  
                   
            
            </div>
            
            </div>
        </div>
        @endforeach
    </div>
    @endforeach      
</div>


@endsection