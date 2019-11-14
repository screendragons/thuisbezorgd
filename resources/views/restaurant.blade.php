@extends('partials.header')
@extends('layouts.default')

@section('content')
<div class="container padding">
  <h2>Restaurants</h2>

  @if(count($restaurant) < 1)
    <p>Create a restaurant</p>
      <a href="{{route('restaurant.create')}}" class="btn btn-primary">
        Create a restaurant
      </a>
  @else
    {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
      <div class="input-group">
          {!! Form::text('query', null, ['class' => 'form-control', 'placeholder' =>
          'Naam Restaurant','autocomplete' => 'off']) !!}
          <span class="input-group-prepend">
              {!! Form::submit('Zoeken',  ['class' => 'btn btn-primary']) !!}
              <br>
          </span>
      </div>
      {!! Form::close() !!}
    @foreach($restaurant as $restaurant)
      <div class="col-md-3">
        <div class="card" style="height: 60px;">
          <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top show-restaurant" alt="...">

          <div class="card-body">
            <p class="card-title">
              <b>{{ $restaurant->name}}</b>
            </p>
            <p class="card-title">
              <b>Phonenumber</b> {{ $restaurant->phone}}
              <br>
              <b>City</b> {{ $restaurant->city}}
            </p>
            <p class="card-title">
              <b>Workinghours</b>
              <br>
              {{ $restaurant->is_open}} - {{ $restaurant->is_closed}}
            </p>
            <a href="restaurant/{{$restaurant->id}}" class="btn btn-primary">
              Visit
            </a>
          </div>
        </div>
      </div>
    @endforeach
  @endif
</div>
@endsection

