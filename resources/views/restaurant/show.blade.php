@extends('layouts.default')
@extends('partials.header')

  {{session()->put('consumables', [])}}

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
            <b>
              {{$restaurant->name}}
            </b>
          </p>

          <p class="card-title">
            <b>Phonenumber</b>
              {{ $restaurant->phone}}
            <br>
            <b>City</b>
              {{ $restaurant->city}}
          </p>

          <p class="card-title">
            <b>Workinghours</b>
            <br>
            {{ $restaurant->is_open}} - {{ $restaurant->is_closed}}
          </p>

          @if (Auth::user()->is_admin == 1)
          {{-- edit restaurant--}}
            <button type="submit" class="btn btn-primary">
              <a href="{{URL::to('restaurant')}}/{{$restaurant->id}}/edit">
                Edit
              </a>
            </button>
            <br>
            <br>

            {{-- delete restaurant--}}
            <div>
              {!! Form::open(['route' => ['restaurant.destroy', $restaurant->id]]) !!}
                <button type="submit" class="float-md-right btn btn-danger">
                  Delete
                </button>
              @method('DELETE')
              {!! Form::close() !!}
            </div>
          @endif
        </div>
      </div>
    </div>

    {{-- create a consumable --}}
    @if (Auth::user()->is_admin == 1)
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

          <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
          <button type="submit" class="btn btn-success">Create</button>
        {!! Form::close() !!}
      </div>
    @endif

    @if (Auth::user()->is_admin == 1)
      {{-- Consumables --}}
      @foreach($restaurant->consumable as $consumable)
        <div class="col-md-3 container edit-consumable">
          <h3>Consumable</h3>
          <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top show-restaurant" alt="...">
            <br>
            <br>
          <form method="post" action="{{ route('consumable.update', ['restaurant_id' => $restaurant->id, 'consumable' => $consumable->id]) }}">
            @csrf
            @method('PUT')
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

            <div>
              <button type="submit" class="btn btn-primary">
                <a href="{{URL::to('consumable')}}/{{$consumable->id}}/edit">
                  Edit
                </a>
              </button>
            </div>
            <br>
            {{--  Order button --}}
            <div>
              <a href="{{Route('cart.add', ['id' => $consumable->id])}}" class="add-to-cart btn btn-primary" type="button" class="btn btn-primary btn-sm">Order</a>
            </div>
            <br>
            {{-- delete button --}}
            <div>
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

          </form>
        </div>
      @endforeach

      <div class="col-md-3">
        <div class="cart" style="border: 1px solid black; width: 200px; float:right; background-color:#333;">
          <ul id="inner-cart">

          </ul>
          <a href="{{Route('pay', ['restaurant_id' => $restaurant->id])}}" class="btn btn-primary">Afrekenen</a>
        </div>
      </div>
    @endif
  </div>

  {{-- Cart --}}
  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
  </script>

  <script type="text/javascript">
  $('.add-to-cart').click(function(event) {
      event.preventDefault();
      id = $(this).prop('id')
      $.ajax({
          url: $(this).prop('href'),
          type: "GET",
      }).done(function(data) {
          console.log(data);
          $('#inner-cart').append('<li class="list-group-item">'+data+'</li>')
      });
  });
  </script>
