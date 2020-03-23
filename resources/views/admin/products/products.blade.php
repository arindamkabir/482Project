@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between">
        <h4 class="admin-heading"><i class="fas fa-pills"></i> Products</h4>

        <div class="admin-add-btn"><a href="{{route('product.create')}}"><button class="btn btn-primary ">Add New Product</button></a></div>
    </div>


    <table class="mt-4 table table-striped table-hover">
        <thead class="thead-dark">
            <tr class="">
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Image</th>
            <th scope="col">Shop ID</th>
            <th scope="col">Shop Name</th>
            <th scope="col">Shop Location</th>
            <th scope="col">Product Description</th>
            <th scope="col">In Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Added</th>
            <th scope="col">Updated</th>
            <th scope="col" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            @foreach($shop_owners as $shopowner)
                @if ($product->shop_id == $shopowner->shop_id)
                    $so = $shopowner 
                @endif
            @endforeach
                <tr>
                <th scope="row">{{$product->product_id}}</th>
                <td><img src="images/{{$product->image}}" ></td>
                <td>{{$so->shop_id}}</td>
                <td>{{$so->shop_name}}</td>
                <td>{{$so->location}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                <td>{{$product->updated_at}}</td>
                <td>
                <form action="{{route('product.destroy', $product->product_id)}}" method="DELETE">
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
                </td>
                <td>
                <form action="{{route('product.edit', $product->product_id)}}" method="GET">
                <button type="submit" class="btn btn-info"><i class="far fa-edit"></i></button>
                </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    </div>
</div>
@endsection