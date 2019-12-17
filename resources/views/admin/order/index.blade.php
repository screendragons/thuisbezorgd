@extends('partials.header')
@extends('layouts.default')

@section('content')
  <div class="container">
    <h2 class="h2">Orders</h2>
    {{-- count orders --}}
    @if(count($orders))
    <div class="orders">
      @foreach($orders as $key => $order)
        @foreach($order->consumables as $consumable)
          {{-- {{dd($order->restaurant->name)}} --}}
          <div class="col-md-3 container ">
            <div class="form-group">
              <label for="title">
                <h4> Order {{$key + 1}} </h4>
              </label>
              <br>
              <label for="title">
                Restaurant
              </label>
              {{$order->restaurant->name}}
              <br>

              <label for="title">
                Title
              </label>
              {{ $consumable->title }}
              <br>

              <label for="price">
                Price
              </label>
              {{ $consumable->price }}
              <br>

              <label for="category">
                Created at
              </label>
              {{$order->created_at}}

            </div>
          </div>
        @endforeach
      @endforeach
    </div>

      @else
      <h5>{{$user->first_name}} has no orders</h5>
    @endif
      {{-- sidebar --}}
      <div class="sidenav padding">
       <a href="{{ url('/admin') }}">Home</a>
       <a href="{{ route('admin.user.index') }}">Users</a>
       <a href="{{ route('admin.restaurant.index') }}">Restaurant</a>
       <a href="{{ route('admin.consumable.index') }}">Consumable</a>
       <a href="{{ route('admin.order.index') }}">Order</a>
      </div>

  </div>
@endsection
