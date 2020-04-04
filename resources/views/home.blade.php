@extends('layouts.app')

@section('content')
<div class="container">
<h3 class="home-heading text-center my-5 underline-from-center">Featured Products</h3>
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="{{asset('images/promo1.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('images/promo2.png')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('images/promo3.png')}}" alt="Third slide">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>    
            </div>
        </div>
      
        @foreach($products->chunk(3) as $chunk)
        <div class="row">
            @foreach ($chunk as $product)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{asset('images/' .  $product->image)}}" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                    <a href="#">{{$product->name}}</a>
                    </h4>
                    <h5>${{$product->price}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <form action="{{route('cart.store')}}" method="POST">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{$product->product_id}}">
                        <input type="hidden" name="price" value="{{$product->price}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="qty" value="1">
                        <button type="submit" class="btn btn-sm btn-primary">Add to Cart</button>
                    </form>                                    
                                    
                
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach      
</div>
@endsection
