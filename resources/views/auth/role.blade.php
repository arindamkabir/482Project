@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin:5%;">
                <div class="card-header">{{ __('Role') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('role') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="whoyourare" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">
                            <select class="custom-select">
                                <option selected>Select Your Role</option>
                                <option value="1">Customer</option>
                                <option value="2">Shop-Owner</option>
                                <option value="3">Delivery Boy</option>
                            </select>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Next') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
