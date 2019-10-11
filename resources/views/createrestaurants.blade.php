@extends('partials.header')
{{--
@section('content') --}}
<div class="createrestaurants">
    <title>Create a restaurant</title>
</div>

@if($errors->any())
<ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
@endif

<div class="container padding createrestaurants">
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
      '12345678','autocomplete' => 'off']); !!}
    </div>

    <label for="addresss">Address</label>
    <div class="input-group mb-3">

      {!! Form::text('address', null , ['class' => 'form-control', 'placeholder' =>
      'Street 123','autocomplete' => 'off']); !!}
    </div>

    <label for="zipcode">Zipcode</label>
    <div class="input-group mb-3">
      {!! Form::text('zipcode', null, ['class' => 'form-control', 'placeholder' =>
      '1100 AA','autocomplete' => 'off']); !!}
    </div>
    <label for="city">City</label>
    <div class="input-group mb-3">

      {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' =>
      'Amsterdam','autocomplete' => 'off']); !!}
    </div>
    <label for="phone">Phone</label>
    <div class="input-group mb-3">
      {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' =>
      '0612345678','autocomplete' => 'off']); !!}
    </div>
    <label for="email">Email</label>
    <div class="input-group mb-3">
      {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@example.com'
      ,'autocomplete' => 'off']); !!}
    </div>
    <br>
    <button type="submit" class="btn btn-success">Create</button>
  {!! Form::close() !!}
</div>
