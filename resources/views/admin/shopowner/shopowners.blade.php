@extends('layouts.admin')

@section('content')
<div class="container">
<div class="d-flex justify-content-between">
        <h4 class="admin-heading"><i class="fas fa-pills"></i> Shop Owners</h4>

        <div class="admin-add-btn"><a href="{{route('shop_owner.create')}}"><button class="btn btn-primary ">Add New Shop Owner</button></a></div>
    </div>


    <table class="mt-4 table table-striped table-hover">
        <thead class="thead-dark">
            <tr class="">
            <th scope="col">Shop ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Location</th>
            <th scope="col">Shop Name</th>
            <th scope="col" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shopowners as $shopowner)
                <tr>
                <th scope="row">{{$shop_owner->shop_id}}</th>
                <td>{{$shop_owner->user_id}}</td>
                <td>{{$shop_owner->location}}</td>
                <td>{{$shop_owner->shop_name}}</td>
                <td>
                <form action="{{route('shop_owner.destroy', ['id' => $shop_owner->shop_id])}}" method="DELETE">
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                </form>
                </td>
                <td>
                <form action="{{route('shop_owner.edit', ['id' => $shop_owner->user_id])}}" method="GET">
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