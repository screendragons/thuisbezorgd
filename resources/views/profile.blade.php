@extends('partials.header')
@extends('layouts.default')
{{--@section('content') --}}

<div class="container padding form">
  <h2>Profile</h2>
  {{-- <form method="POST" action="{{ route('profile.store') }}"> --}}

     {{-- <form>
      <div class="form-group">
        <label for="exampleInputFirstname">First name - </label>
          {{ $users->first_name }}
      </div>
      <div class="form-group">
        <label for="exampleInputLastname">Last name - </label>
          {{ $users->last_name }}
      </div>
      <div class="form-group">
        <label for="exampleInputAddress">Address - </label>
          {{ $users->address }}
      </div>
      <div class="form-group">
        <label for="exampleInputZipcode">Zipcode - </label>
        {{ $users->zipcode }}
      </div>
      <div class="form-group">
        <label for="exampleInputLastname">City - </label>
        {{ $users->city }}
      </div>
      <div class="form-group">
        <label for="exampleInputLastname">Phone - </label>
          {{ $users->phone }}
      </div>
      <div class="form-group">
          <label for="exampleInputEmail">Email address - </label>
          {{ $users->email }}
      </div>
      <a href="{{ route('profile.edit', $users->id) }}" class="btn btn-primary">Edit</a>
      <a href="{{ url('order') }}" class="btn btn-primary">My orders</a>
  </form> --}}
  {!! Form::open(['route' => 'restaurant.store', 'method' => 'POST', 'files' => true]) !!}
    <label for="first_name">First name</label>
    <div class="input-group mb-3">
      {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' =>
      '{{ $users->first_name }}','autocomplete' => 'off']); !!}
    </div>

    <label for="last_name">Last name</label>
    <div class="input-group mb-3">
      {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' =>
      '{{ $users->last_name }}','autocomplete' => 'off']); !!}
    </div>

    <label for="addresss">Address</label>
    <div class="input-group mb-3">
      {!! Form::text('address', null , ['class' => 'form-control', 'placeholder' =>
      '{{ $users->address }}','autocomplete' => 'off']); !!}
    </div>

    <label for="zipcode">Zipcode</label>
    <div class="input-group mb-3">
      {!! Form::text('zipcode', null, ['class' => 'form-control', 'placeholder' =>
      '{{ $users->zipcode }}','autocomplete' => 'off']); !!}
    </div>

    <label for="city">City</label>
    <div class="input-group mb-3">
      {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' =>
      '{{ $users->city }}','autocomplete' => 'off']); !!}
    </div>

    <label for="phone">Phone</label>
    <div class="input-group mb-3">
      {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' =>
      '{{ $users->phone }}','autocomplete' => 'off']); !!}
    </div>

    <label for="email">Email</label>
    <div class="input-group mb-3">
      {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@example.com'
      ,'{{ $users->email }}' => 'off']); !!}
    </div>

    <br>
    <a href="{{ route('profile.edit', $users->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ url('order') }}" class="btn btn-primary">My orders</a>
  {!! Form::close() !!}
</div>
{{-- @endsection --}}
