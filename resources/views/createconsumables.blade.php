@extends('partials.header')
{{--
@section('content') --}}
<div class="createconsumables">
    <title>Create a consumable for your restaurant</title>
</div>

@if(Auth::user()->id === $restaurants_id)
@endif
<div class="container padding createrestaurants">
  <h2>Create consumable</h2>
  {!! Form::open(['route' => 'createconsumables.store', 'method' => 'POST', 'files' => true]) !!}
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
    @if(Auth::user()->id === $restaurants->id)
    <input type="hidden" name="restaurants_id" value="{{$restaurants->id}}">
    @endif
    <button type="submit" class="btn btn-success">Create</button>
  {!! Form::close() !!}
</div>
