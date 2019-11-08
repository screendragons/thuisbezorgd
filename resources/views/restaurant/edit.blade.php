@extends('layouts.default')
@extends('partials.header')


@section('content')

<div class="container padding">
  <h2>
    Edit restaurant
  </h2>
	<div class="card-body">
	  <p class="card-title">
	    <b><a href="restaurant/{{$restaurant->id}}">{{$restaurant->name}}</a></b>
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
	  <button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>

@endsection
