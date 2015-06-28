@extends('layouts/main')

@section('content')
<form  class="form-horizontal" method="POST" action="/auth/register">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
   
    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('register.Name') }}</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="name" placeholder="Daniel" value="{{ old('name') }}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('register.LastName') }}</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="lastName" placeholder="Last Name" value="{{old('lastName')}}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('register.Email') }}</label>
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('register.Password') }}</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password" id="password">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('register.ConfirmPassword') }}</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="confirmPassword">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('register.Language') }}</label>
        <div class="col-md-8">
            <select class="form-control" name="language">
                @foreach($languages as $language)
                <option value="{{ $language->id }}">{{ $language->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('register.Phone') }}</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{old('Phone')}}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('register.Vegetarian') }}</label>
        <div class="col-md-6">
            <input type="checkbox" name="vegetarian"> 
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{{ trans('register.BirthDate') }}</label>
        <div class="col-md-6">
            <input type="date" class="form-control" name="birthDate" >
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