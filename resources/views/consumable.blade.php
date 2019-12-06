@extends('partials.header')
@extends('layouts.default')
{{-- <input type="" name="" value="{{ $restaurant->id }}"> --}}

<div class="container padding">
  <h2>Consumables</h2>
  @if(count($consumable) < 1)
    <p>There are no consumables</p>
      <a href="{{URL::to('restaurant')}}" class="btn btn-primary">
        Visit a restaurant
      </a>
  @else
    @foreach($consumable as $consumable)
      {{-- @foreach($restaurant->consumable as $consumable) --}}
      <div class="col-md-3 container edit-consumable">
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
        <a href="{{Route('cart.add', ['id' => $consumable->id])}}" class="add-to-cart btn btn-primary" type="button" class="btn btn-primary btn-sm">Order</a>
      </div>

    @endforeach
  @endif

</div>
