@extends('partials.header')
@extends('layouts.default')
{{-- <input type="" name="" value="{{ $restaurant->id }}"> --}}
@section('content')
<div class="container padding">
  <h2>Consumables</h2>
  <p>Here will show the consumables</p>
  <a href="{{ route('consumable.create')}}" class="btn btn-primary">Create a consumable</a>
  @method('HEAD')
  {{-- @foreach($consumables as $consumables)
  <div class="col-md-3">
    <div class="card" style="width: 18rem;">
      <img src="tb.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">
          {{ $consumables->category}}
        </p>
        <p class="card-text">
          {{ $consumables->title}}
        </p>
        <p class="card-text">
          {{ $consumables->price}}
        </p>
    </div>
  </div>
  @endforeach --}}
 {{--  <a href="{{ route('consumable.edit', $consumable->id) }}" class="btn btn-primary">Edit</a> --}}
</div>
@endsection
