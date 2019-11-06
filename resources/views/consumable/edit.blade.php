@extends('partials.header')
@extends('layouts.default')

<div class="createconsumables">
    <title>Edit a consumable</title>
</div>

<div class="container padding createrestaurants">
  <h2>Edit a consumable</h2>
  {!! Form::open(['route' => 'consumable.edit', 'method' => 'POST', 'files' => true]) !!}
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
    <button type="submit" class="btn btn-success">Update</button>
  {!! Form::close() !!}
</div>
