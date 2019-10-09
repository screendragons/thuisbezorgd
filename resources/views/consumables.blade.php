@extends('partials.header')

{{-- @section('content') --}}
<div class="container padding">
  <h2>Consumables</h2>
  <p>Here will show the consumables</p>

  @foreach($consumables as $consumables)
    <div class="col-md-3n">
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
  @endforeach
</div>
{{-- @endsection --}}
