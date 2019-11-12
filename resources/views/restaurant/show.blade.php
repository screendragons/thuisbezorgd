@extends('layouts.default')
@extends('partials.header')


@section('content')
  <div class="container padding">
    <h2>
      Restaurants with menus
    </h2>

    {{-- restaurant --}}
    <div class="col-md-3">
      <div class="card" style="width: 21rem;">
        <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top show-restaurant" alt="...">
        <div class="card-body">
          <p class="card-title">
            <b>{{$restaurant->name}}</b>
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
          <button type="submit" class="btn btn-primary">
            <a href="{{URL::to('restaurant')}}/{{$restaurant->id}}/edit">
              Edit
            </a>
          </button>
          <br>
          <br>
          {{-- delete --}}
          <div>
           {{--  <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$restaurant['id']}}').submit();">
              Delete
            </a> --}}

            {{-- <form id="remove-form-{{$restaurant['id']}}" action="{{route('restaurant.destroy', ['restaurant_id' => $restaurant->id])}}" method="POST">
             @csrf --}}
         {{--     @method('DELETE') --}}
            {{-- <button type="submit" class="btn btn-primary hey">Hey</button>
            </form> --}}
            {!! Form::open(['route' => ['restaurant.destroy', $restaurant->id]]) !!}
              <button  style="margin-left:  5px;" type="submit" class="float-md-right btn btn-danger">
                Delete
              </button>
            @method('DELETE')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>

    {{-- create a consumable --}}
    @if(Auth::user() == true)
      <div class="col-md-3 container">
        <h3>Create a consumable</h3>
        {!! Form::open(['route' => ['consumable.store', $restaurant->id], 'method' => 'POST', 'files' => true]) !!}
          @csrf
         {{--  @method('PUT') --}}
          <label for="title">Title</label>
          <div class="input-group mb-3">
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' =>
            'Title','autocomplete' => 'off']); !!}
          </div>

          <label for="price">Price</label>
          <div class="input-group mb-3">
            {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' =>'Price','autocomplete' => 'off']); !!}
          </div>

          <label for="category">Category</label>
          <div class="input-group mb-3">
            {!! Form::text('category', null , ['class' => 'form-control', 'placeholder' =>
            'Hoofdgerechten, bijgerechten, dranken','autocomplete' => 'off']); !!}
          </div>
          <br>
          {{--     @if(Auth::user()->id === $restaurant->id) --}}
          <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
          {{-- @endif --}}
          <button type="submit" class="btn btn-success">Create</button>
        {!! Form::close() !!}
      </div>
    @endif

    {{-- Here will show the consumables --}}
    @foreach($restaurant->consumable as $consumable)
    <div class="col-md-3 container edit-consumable">
      {{-- <form method="post" action="{{ url('consumable.update', ['restaurant_id' => $restaurant->id, 'consumable' => $consumable->id]) }}"> --}}
      <form>
        @csrf
        @method('PUT')
        <h3>Consumable</h3>
        <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top show-restaurant" alt="...">
        <br>
        <br>
      <form method="post" action="{{ route('consumable.update', ['restaurant_id' => $restaurant->id, 'consumable' => $consumable->id]) }}">
        @csrf
        @method('PUT')
        <h3>Edit consumable</h3>
        <div class="form-group">
          <label for="title">
            Name
          </label>
          {{ $consumable->title }}
        </div>

        <div class="form-group">
          <label for="price">
            Price
          </label>
          {{ $consumable->price }}
        </div>

        <div class="form-group">
          <label for="category">
            Category
          </label>
          {{ $consumable->category }}
        </div>
          <button type="submit" class="btn btn-primary">
            <a href="{{URL::to('consumable')}}/{{$consumable->id}}/edit">
              Edit
            </a>
          </button>
      </form>

      {{-- <div class="card-body"> --}}
        {{-- <a href="{{ route('order.index', ['id' => $consumable->id])}}" class="btn btn-primary">
          Add to cart
        </a>
 --}}      {{-- </div> --}}
      <div>
        <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$consumable['id']}}').submit();">
          Delete
        </a>

       <form id="remove-form-{{$consumable['id']}}" action="{{route('consumable.destroy', ['restaurant_id' => $restaurant->id, 'consumable' => $consumable->id])}}" method="POST" style="display: none;">
         @csrf
         @method('DELETE')
        </form>
      </div>
    </div>
    @endforeach
  </div>

  {{-- @foreach($restaurant->consumable as $res)
  {{dd($restaurant)}}
  <div class="row" style="margin: 5px; ">
    <div class="card mb-3" style=" max-width: 540px; ">
        <div class="row no-gutters">
            <div class="col-md-4">
              <img src="{{asset('storage/profileimages/defaultfood.jpg')}}" width="150px" style="margin-top: 25px; margin-left: 25px;" alt="">
                <h1>{{ $consumable->title }}</h1>
            </div>
        </div>
    </div>
  </div>
  @endforeach --}}

@endsection
