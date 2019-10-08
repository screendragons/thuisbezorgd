@extends('partials.header')
{{--
@section('content') --}}
<div class="Restaurantpage">
    <title>Create a restaurant</title>
</div>

<div class="container padding">
  <h2>Create restaurant</h2>
  <form method="POST" action="{{ route('createrestaurant.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" id="title" placeholder="Name of your restaurant" name="name" value="{{ old('name') }}">
        {!! $errors->first('name', '<p class="text-danger">:message</p>') !!}
    </div>
    <div class="form-group">
      <label for="kvk">KvK</label>
      <input type="text" class="form-control" id="kvk" placeholder="Enter here your KvK" name="kvk" value="{{ old('kvk') }}">
        {!! $errors->first('kvk', '<p class="text-danger">:message</p>') !!}
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="Address" name="address" value="{{ old('address') }}">
        {!! $errors->first('address', '<p class="text-danger">:message</p>') !!}
    </div>
    <div class="form-group">
      <label for="zipcode">Zipcode</label>
      <input type="text" class="form-control" id="zipcode" placeholder="Zipcode" name="zipcode" value="{{ old('zipcode') }}">
        {!! $errors->first('zipcode', '<p class="text-danger">:message</p>') !!}
    </div>
    <div class="form-group">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" placeholder="City" name="city" value="{{ old('city') }}">
        {!! $errors->first('city', '<p class="text-danger">:message</p>') !!}
    </div>
    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" placeholder="Phone number" name="phone" value="{{ old('phone') }}">
        {!! $errors->first('phone', '<p class="text-danger">:message</p>') !!}
    </div>
    <div class="form-group">
      <label for="e-mail">E-mail</label>
      <input type="email" class="form-control" id="e-mail" placeholder="E-mail" name="email" value="{{ old('email') }}">
        {!! $errors->first('email', '<p class="text-danger">:message</p>') !!}
    </div>
    <div class="form-group">
      <label for="photo">Photo</label>
      <input type="file" class="form-control" id="photo" placeholder="Upload a image" name="photo">
        {!! $errors->first('image', '<p class="text-danger">:message</p>') !!}
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

{{-- <section class="bg-primary" id="one">
    <div class="container">
        <center><h2 class="margin-top-0 text-primary">Restaurants</h2></center>
        <br>
        <div class="card" style="width: 18rem;" >
          <img src="tb.jpg" class="card-img-top" alt="..." height="200" width="200">
          <div class="card-body">
            <h3 class="card-title">Domino's</h3>
            <p>Domino's wie kent dat nou niet</p>
            <a href="{{url('/dominos')}}" class="btn btn-primary">Go</a>
          </div>
        </div>
    </div>
</section> --}}







{{-- <a href="{{route('consumables.create', ['restaurant_id' => $restaurant->id] )}}">Create</a> --}}
{{-- @endsection --}}
