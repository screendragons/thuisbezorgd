@extends('partials.header')
@extends('layouts.default')
{{-- <input type="" name="" value="{{ $restaurant->id }}"> --}}

<div class="container padding">
  <h2>Consumables</h2>
  <p>Here will show the consumables</p>
  @if(count($consumable) < 1)
    <p>Create a restaurant</p>
      <a href="{{ route('restaurant.show')}}" class="btn btn-primary">
        Visit a restaurant
      </a>
  @else
    @foreach($consumable as $consumable)
      {{-- @foreach($restaurant->consumable as $consumable) --}}
      <div class="col-md-3 container edit-consumable">
        {{-- @method('HEAD') --}}
        <img src="{{asset('storage/profileimages/default.jpg')}}" class="card-img-top show-restaurant" alt="...">
        <br>
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
        <a href="{{Route('cart.add', ['id' => $consumable->id])}}" class="add-to-cart btn btn-primary" type="button" class="btn btn-primary btn-sm">Order</a>
      </div>

    @endforeach
    <div class="col-md-3">
      <div class="cart" style="border: 1px solid black; width: 200px; float:right; background-color:#333;">
        <ul id="inner-cart">

        </ul>
        {{-- <a href="{{Route('pay', ['restaurant_id' => $restaurant->id])}}" class="btn btn-primary">Afrekenen</a> --}}
      </div>
    </div>
  @endif

</div>

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
