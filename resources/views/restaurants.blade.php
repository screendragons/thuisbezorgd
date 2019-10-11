@extends('partials.header')

{{-- @section('content') --}}
<div class="container padding">
  <h2>Restaurants</h2>
  <p>Here will show the restaurants</p>
  <form action="/search" method="get" class="search">
      <div class="input-group">
          <input type="search" name="search" class="form-control">
          <span class="input-group-prepend">
              <button type="submit" class="btn btn-default">
                  Search
              </button>
          </span>
      </div>
  </form>
  @foreach($restaurant as $restaurant)
    <div class="col-md-3 profile-section">
      <div class="card" style="width: 18rem;">
        <img src="tb.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-title">
            {{ $restaurant->name}}
          </h5>
          <p class="card-text">
            {{ $restaurant->phone}}
            <br>
            {{ $restaurant->city}}
          </p>
          <a href="restaurants/{{@$restaurant->id}}" class="btn btn-primary">
            Visit
          </a>
        </div>
      </div>
    </div>
  @endforeach
</div>
{{-- @endsection --}}
