@extends('layouts.app')

@section('content')
<div class="container mt-3">

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
    <h4 class="page-heading">Check out successful yo!</h4>
  


</div>

@endsection