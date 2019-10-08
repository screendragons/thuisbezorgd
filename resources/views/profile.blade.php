@extends('partials.header')
{{--@section('content') --}}

<div class="container padding">
  <h2>Profile</h2>
  {{-- <form method="POST" action="{{ route('profile.store') }}"> --}}

     <form method="POST" action="{{ route('profile.update',[$users->id]) }}">
     	@csrf
      <div class="form-group">
        <label for="exampleInputFirstname">First name</label>
        <input type="text" class="form-control" id="exampleInputFirst_name" placeholder="First name" value="{{ $users->first_name }}">
      </div>
      <div class="form-group">
        <label for="exampleInputLastname">Last name</label>
        <input type="text" class="form-control" id="exampleInputLast_name" placeholder="Last name" value="{{ $users->last_name }}">
      </div>
      <div class="form-group">
        <label for="exampleInputAddress">Address</label>
        <input type="text" class="form-control" id="exampleInputAddress" placeholder="Address" value="{{ $users->address }}">
      </div>
      <div class="form-group">
        <label for="exampleInputZipcode">Zipcode</label>
        <input type="text" class="form-control" id="exampleInputZipcode" placeholder="Zipcode" value="{{ $users->zipcode }}">
      </div>
      <div class="form-group">
        <label for="exampleInputLastname">City</label>
        <input type="text" class="form-control" id="exampleInputCity" placeholder="City" value="{{ $users->city }}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="{{ $users->password }}">
      </div>
      <div class="form-group">
        <label for="exampleInputLastname">Phone</label>
        <input type="text" class="form-control" id="exampleInputPhone" placeholder="Phone number" value="{{ $users->phone }}">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $users->email }}">
      </div>
    <button class="btn btn-primary">Save</button>
  </form>
</div>
{{-- @endsection --}}
