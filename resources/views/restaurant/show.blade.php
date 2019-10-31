@extends('layouts.default')
@extends('partials.header')


@section('content')
<div class="container padding">
  <h2>Restaurants with menus</h2>

    <div class="col-md-3 profile-section">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top show-restaurant" alt="...">
        <div class="card-body">
          <p class="card-title">
            {{ $restaurant->name}}
          </p>
          <p class="card-title">
            {{ $restaurant->phone}}
            {{ $restaurant->city}}
          </p>
          {{-- <a href="{{ url('/consumables')}}" class="btn btn-primary">
            Visit
          </a> --}}
        </div>
      </div>
    </div>

    @foreach($restaurant->consumable as $consumable)

      <p>{{ $consumable->title }}</p>
      <p>{{ $consumable->price }}</p>
      {{-- <p>{{ $consumable->title }}</p>
      <p>{{ $consumable->title }}</p> --}}
      <a href="#" class="btn btn-primary">Add to cart</a>
    @endforeach

      {{-- <a href="{{ url('/createconsumables')}}" class="btn btn-primary">Create a consumable</a> --}}

    @if(Auth::user()->is_admin)
      <div class="container padding createrestaurants">
        <h2>Create consumable</h2>
        {!! Form::open(['route' => 'consumable.create', 'method' => 'POST', 'files' => true]) !!}
          <label for="title">Title</label>
          <div class="input-group mb-3">
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' =>
            'Title','autocomplete' => 'off']); !!}
          </div>

          <label for="price">Price</label>
          <div class="input-group mb-3">
            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' =>
            'Price','autocomplete' => 'off']); !!}
          </div>

          <label for="category">Category</label>
          <div class="input-group mb-3">
            {!! Form::text('category', null , ['class' => 'form-control', 'placeholder' =>
            'Hoofdgerechten, bijgerechten, dranken','autocomplete' => 'off']); !!}
          </div>
          <br>
          {{--     @if(Auth::user()->id === $restaurant->id) --}}
          <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
          {{-- @endif --}}
          <button type="submit" class="btn btn-success">Create</button>
        {!! Form::close() !!}
      </div>

    @endif

    {{-- @php
    $consumables = $restaurant->consumable()->get();
    @endphp --}}
</div>
@foreach($consumables as $consumables)
<div class="row  " style="margin: 5px; ">
  <div class="card mb-3" style=" max-width: 540px; ">
      <div class="row no-gutters">
          <div class="col-md-4">
           {{--  <img src="{{asset('storage/profileimages/defaultfood.jpg')}}" width="150px" style="margin-top: 25px; margin-left: 25px;" alt=""> --}}
              <h1>{{ $consumable->title }}</h1>
          </div>
      </div>
  </div>
</div>



@endforeach
@endsection
