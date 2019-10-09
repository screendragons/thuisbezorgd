@extends('partials.header')
{{--
@section('content') --}}
<div class="Restaurantpage">
    <title>Create a restaurant</title>
</div>

<div class="container padding">
  <h2>Create restaurant</h2>
  {!! Form::open(['route' => 'createrestaurants.store', 'method' => 'POST', 'files' => true]) !!}
    <label for="name">Name</label>
    <div class="input-group mb-3">
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>
      'Name restaurant','autocomplete' => 'off']); !!}
    </div>

    <label for="kvk">KvK</label>
    <div class="input-group mb-3">
      {!! Form::text('KVK', null, ['class' => 'form-control', 'placeholder' =>
      'KvK','autocomplete' => 'off']); !!}
    </div>

    <label for="addresss">Address</label>
    <div class="input-group mb-3">

      {!! Form::text('address', null , ['class' => 'form-control', 'placeholder' =>
      'Ex: Street 123','autocomplete' => 'off']); !!}
    </div>

    <label for="zipcode">Zipcode</label>
    <div class="input-group mb-3">
      {!! Form::text('zipcode', null, ['class' => 'form-control', 'placeholder' =>
      'Ex: 1100 AA','autocomplete' => 'off']); !!}
    </div>
    <label for="city">City</label>
    <div class="input-group mb-3">

      {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' =>
      'Ex: Amsterdam','autocomplete' => 'off']); !!}
    </div>
    <label for="phone">Phone</label>
    <div class="input-group mb-3">
      {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' =>
      'Ex: 0612345678','autocomplete' => 'off']); !!}
    </div>
    <label for="email">Email</label>
    <div class="input-group mb-3">
      {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'e'
      ,'autocomplete' => 'off']); !!}
    </div>
    <br>
    <button type="submit" class="btn btn-success">Create</button>
    <div class="float-md-right">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  {!! Form::close() !!}
</div>
