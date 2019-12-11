@extends('partials.header')
@extends('layouts.default')
{{--
@section('content') --}}
<div class="createconsumables">
    <title>Create a consumable for your restaurant</title>
</div>

<div class="container padding createrestaurants">
  <h2>Create consumable</h2>
  {!! Form::open(['route' => 'consumable.store', 'method' => 'POST', 'files' => true]) !!}

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

    <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
    <button type="submit" class="btn btn-success">Create</button>

  {!! Form::close() !!}
</div>
