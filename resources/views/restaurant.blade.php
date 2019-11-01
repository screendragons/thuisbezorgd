@extends('partials.header')
@extends('layouts.default')

@section('content')
<div class="container padding">
  <h2>Restaurants</h2>

  @if($restaurant == false)
    <p>Create a restaurant</p>
      <a href="/thuisbezorgd/public/restaurant/create" class="btn btn-primary">
        Create a restaurant
      </a>
  @else
    <p>Here will show the restaurants</p>
    {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
      <div class="input-group">
          {!! Form::text('query', null, ['class' => 'form-control', 'placeholder' =>
          'Naam Restaurant','autocomplete' => 'off']) !!}
          <span class="input-group-prepend">
              {!! Form::submit('Zoeken',  ['class' => 'btn btn-primary']) !!}
          </span>
      </div>
      <br>
      {!! Form::close() !!}
    @foreach($restaurant as $restaurant)
      <div class="col-md-3">
        <div class="card" style="height: 60px;">
          <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top show-restaurant" alt="...">

          <div class="card-body">
            <p class="card-title">
              {{ $restaurant->name}}
            </h5>
            <p class="card-title">
              Phonenumber: {{ $restaurant->phone}}
              <br>
              City: {{ $restaurant->city}}
            </p>
            <p class="card-title">
              Openingstijden
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

