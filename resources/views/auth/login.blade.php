@extends('layouts/main')

@section('content')
<form  class="form-horizontal" method="POST" action="/auth/login">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
   
    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('login.Email') }}</label>
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('login.Password') }}</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password" id="password">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('login.Remember Me') }}</label>
        <div class="col-md-6">
            <input type="checkbox" name="remember"> 
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                {{ trans('login.Login') }}
            </button>
        </div>
    </div>
</form>
@endsection