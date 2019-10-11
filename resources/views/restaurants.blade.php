@extends('layouts.default')



@section('content')
<div class="container padding">
  <h2>Restaurants</h2>
  <p>Here will show the restaurants</p>
  {!! Form::open(['route' => 'search']) !!}
    <div class="input-group">
        {!! Form::text('query', null, ['class' => 'form-control', 'placeholder' =>
        'Naam Restaurant','autocomplete' => 'off']) !!}
        <span class="input-group-prepend">
            {!! Form::submit('Zoeken',  ['class' => 'btn btn-primary']) !!}
        </span>
    </div>
    {!! Form::close() !!}
  @foreach($restaurant as $restaurant)
    <div class="col-md-3 profile-section">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top" alt="...">

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
@endsection

