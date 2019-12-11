@extends('partials.header')
@extends('layouts.default')

<div class="container padding">

  <h3>Orders</h3>
    {{-- count orders --}}
    @if(count($orders))
    <div class="orders">
      @foreach($orders as $key => $order)
        @foreach($order->consumables as $consumable)
          <div class="col-md-3 container edit-consumable">
            <div class="form-group">
              <label for="title">
                Order {{$key + 1}}
              </label>
            </div>
         {{--    <div class="form-group">
                <label for="title">
                  {{ $restaurant->name }}
                </label>
            </div> --}}
            <h6 class="card-subtitle mb-2">{{$order->restaurant->name}}</h6>

            <div class="form-group">
              <label for="title">
                {{ $consumable->title }}
              </label>
            </div>

            <div class="form-group">
              <label for="price">
                  Price
              </label>
              {{ $consumable->price }}
            </div>

            <div class="form-group">
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
  {{-- @endsection --}}
</div>
