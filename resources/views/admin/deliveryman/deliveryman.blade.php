@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between">
        <h4 class="admin-heading"><i class="fas fa-pills"></i> Delivery Man</h4>
        <div class="admin-add-btn"><a href="{{route('deliveryman.create')}}"><button class="btn btn-primary ">Add New Delivery Man</button></a></div>
    </div>


    <table class="mt-4 table table-striped table-hover">
        <thead class="thead-dark">
            <tr class="">
            <th scope="col">ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Name</th>
            <th scope="col">Location</th>
            <th scope="col">Contact</th>
            <th scope="col">Added</th>
            <th scope="col">Updated</th>
            <th scope="col" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deliverymen as $deliveryman)
                <tr>
                <th scope="row">{{$delivery_man->dman_id}}</th>
                <td>{{$delivery_man->user_id}}</td>
                <td>{{$delivery_man->name}}</td>
                <td>{{$delivery_man->location}}</td>
                <td>{{$delivery_man->contact}}</td>
                <td>{{$delivery_man->created_at}}</td>
                <td>{{$delivery_man->updated_at}}</td>
                <td>
                <form action="{{route('deliveryman.edit', $deliveryman->dman_id)}}" method="GET">
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