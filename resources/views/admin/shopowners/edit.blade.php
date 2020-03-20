@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="text-center lead">Edit Shop Owner</h4>
    <form method="POST" action="{{route('shop_owner.update', ['id' => $shop_owner->shop_id])}}">
    {{ method_field('PUT') }}
    @csrf
        <div class="form-row">
            <div class="col">
            <input type="text" name="name" class="form-control" placeholder="{{$shop_owner->user_id}}">
            </div>
            <div class="col">
            <input type="text" name="stock" class="form-control" placeholder="{{$shop_owner->location}}">
            </div>
            <div class="col">
            <input type="text" name="price" class="form-control" placeholder="{{$shop_owner->shop_ame}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-3">UPDATE</button>
    </form>
</div>
@endsection