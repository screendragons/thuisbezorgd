@extends('partials.header')
@extends('layouts.default')
{{-- <input type="" name="" value="{{ $restaurant->id }}"> --}}
@section('content')
<div class="container padding">
  <h2>Consumables</h2>
  <p>Here will show the consumables</p>
  @if(count($consumable) < 1)
    <p>Create a restaurant</p>
      <a href="{{ route('restaurant.show')}}" class="btn btn-primary">
        Visit a restaurant
      </a>
  @else
    @foreach($consumable as $consumable)
      {{-- @foreach($restaurant->consumable as $consumable) --}}
      <div class="col-md-3 container edit-consumable">
        {{-- @method('HEAD') --}}
        <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top show-restaurant" alt="...">
        <br>
        <div class="form-group">
          <label for="title">
            Name
          </label>
          {{ $consumable->title }}
        </div>

        <div class="form-group">
          <label for="price">
            Price
          </label>
          {{ $consumable->price }}
        </div>

        <div class="form-group">
          <label for="category">
            Category
          </label>
          {{ $consumable->category }}
        </div>
        <a href="{{-- {{ route('order.order', $consumable->id) }} --}}" class="btn btn-primary">Order</a>
      </div>
    @endforeach
  @endif

</div>
@endsection
