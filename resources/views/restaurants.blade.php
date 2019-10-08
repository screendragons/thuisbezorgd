@extends('partials.header')

{{-- @section('content') --}}
<div class="container padding">
  <h2>Restaurants</h2>
  Here will show the restaurants

  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $restaurants->name}}/h5>
      <p class="card-text">{{ $restaurants->city}}</p>
      <a href="#" class="btn btn-primary">Visit menu</a>
    </div>
  </div>
</div>
{{-- @endsection --}}
