@extends('partials.header')
{{--@section('content') --}}

<div class="container padding">
  <h2>Profile</h2>
  {{-- <form method="POST" action="{{ route('profile.store') }}"> --}}
    {{-- {!! Form::open(['route' => ['editprofile.update', $user->id], 'method' => 'PUT', 'files' => true]) !!}
      <div class="form-group">
        <label for="exampleInputFirstname">First name</label>
        <input name="first_name" type="text" class="form-control" id="exampleInputFirst_name" placeholder="First name" value="{{ $user->first_name }}">
      </div>
      <div class="form-group">
        <label for="exampleInputLastname">Last name</label>
        <input name="last_name" type="text" class="form-control" id="exampleInputLast_name" placeholder="Last name" value="{{ $user->last_name }}">
      </div>
      <div class="form-group">
        <label for="exampleInputAddress">Address</label>
        <input name="address" type="text" class="form-control" id="exampleInputAddress" placeholder="Address" value="{{ $user->address }}">
      </div>
      <div class="form-group">
        <label for="exampleInputZipcode">Zipcode</label>
        <input name="zipcode" type="text" class="form-control" id="exampleInputZipcode" placeholder="Zipcode" value="{{ $user->zipcode }}">
      </div>
      <div class="form-group">
        <label for="exampleInputLastname">City</label>
        <input name="city" type="text" class="form-control" id="exampleInputCity" placeholder="City" value="{{ $user->city }}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="{{ $user->password }}">
      </div>
      <div class="form-group">
        <label for="exampleInputLastname">Phone</label>
        <input name="phone" type="text" class="form-control" id="exampleInputPhone" placeholder="Phone number" value="{{ $user->phone }}">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $user->email }}">
      </div> --}}
      {!! Form::open(['route' => ['editprofile.update', Auth::user()->$id], 'method' => 'PUT', 'files' => true])!!}
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
        <label for="first_name">Password</label>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control">
            </div>
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
    </div>
    <br>
    <button class="btn btn-primary">Save</button>
  {!! Form::close() !!}
</div>
{{-- @endsection --}}
