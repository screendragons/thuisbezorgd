@extends('partials.header')
{{--@section('content') --}}

<div class="container padding form">
  <h2>Profile</h2>
  {{-- <form method="POST" action="{{ route('profile.store') }}"> --}}

     <form>
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
        <label for="exampleInputPassword">Password - </label>
        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="{{ $users->password }}">
      </div>
      <div class="form-group">
        <label for="exampleInputLastname">Phone - </label>
          {{ $users->phone }}
      </div>
      <div class="form-group">
          <label for="exampleInputEmail">Email address - </label>
          {{ $users->email }}
      </div>
  </form>
</div>
{{-- @endsection --}}
