@extends('partials.header')

{{-- @section('content') --}}
<div class="container padding">
  <h2>Restaurants</h2>
  <p>Here will show the restaurants</p>

  @foreach($restaurant as $restaurant)
    <div class="col-md-3 profile-section">
      <div class="card" style="width: 18rem;">
        <img src="tb.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            {{ $restaurant->name}}
          </h5>
          <p class="card-text">
            {{ $restaurant->city}}
          </p>
          <a href="#" class="btn btn-primary">
            Visit menu
          </a>
        </div>
      </div>
    </div>
  @endforeach
</div>
{{-- @endsection --}}
