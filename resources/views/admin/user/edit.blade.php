@extends('partials.header')
@extends('layouts.default')

@section('content')
<div class="container padding profile">
  <h2>Edit user</h2>
      {!! Form::open(['route' => ['admin.user.edit', 'user' => $user->id], 'method' => 'PUT', 'files' => true])!!}

        <label for="first_name">First name</label>
        <div class="input-group mb-3">
          {!! Form::text('first_name', $user->first_name, ['class' => 'form-control', 'placeholder' =>
          Auth::user()->first_name,'autocomplete' => 'off']); !!}
        </div>

        <label for="first_name">Last name</label>
        <div class="input-group mb-3">

            {!! Form::text('last_name', $user->last_name, ['class' => 'form-control', 'placeholder' =>
            Auth::user()->last_name,'autocomplete' => 'off']); !!}
        </div>

        <label for="first_name">Address</label>
        <div class="input-group mb-3">

            {!! Form::text('address', $user->address, ['class' => 'form-control', 'placeholder' =>
            Auth::user()->address,'autocomplete' => 'off']); !!}
        </div>

        <label for="zipcode">Zipcode</label>
        <div class="input-group mb-3">

            {!! Form::text('zipcode', $user->zipcode, ['class' => 'form-control', 'placeholder' =>
            Auth::user()->zipcode,'autocomplete' => 'off']); !!}
        </div>

        <label for="first_name">City</label>
        <div class="input-group mb-3">
            {!! Form::text('city', $user->city, ['class' => 'form-control', 'placeholder' =>
            Auth::user()->city,'autocomplete' => 'off']); !!}
        </div>

       {{--  <label for="first_name">Password</label>
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control">
        </div> --}}

        <label for="first_name">Phone</label>
        <div class="input-group mb-3">
            {!! Form::text('phone', $user->phone, ['class' => 'form-control', 'placeholder' =>
            Auth::user()->phone,'autocomplete' => 'off']); !!}
        </div>

        <label for="first_name">Email</label>
        <div class="input-group mb-3">
          {!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' =>
          Auth::user()->email,'autocomplete' => 'off']); !!}
        </div>

    <br>
    <button class="btn btn-primary">Save</button>
  {!! Form::close() !!}
@endsection
