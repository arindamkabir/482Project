@extends('layouts.app')

@section('content')
<div class="container">
    <h3><strong>Shop Name</strong></h3>
      
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
                    <form action="{{route('cart.store')}}" method="POST">
                        @csrf
                        
                        <input type="hidden" name="id" value="{{$product->product_id}}">
                        <input type="hidden" name="price" value="{{$product->price}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="qty" value="1">
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

 <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Bhaibhai store 2020</p>
    </div>
    <!-- /.container -->
  </footer>

@endsection