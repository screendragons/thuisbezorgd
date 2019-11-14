@extends('partials.header')
@extends('layouts.default')

@section('content')

  <div class="container padding">
    <ul class="navbar-nav bg-gradient-primary sidebar" id="accordionSidebar">
    </ul>
    <div class="container-fluid">
      <div class="row">
      </div>
    </div>

    <h2 class="table">Orders</h2>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>user_id</th>
          <th>restaurant_id</th>
          {{-- <th>totaal prijs</th> --}}
         {{--  <th>Address</th> --}}
        </tr>
      </thead>
      <tbody>
        @foreach($orders as $order)
          <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->user_id }}</td>
            <td>{{ $order->restaurant_id }}</td>
           {{--  <td>{{ $order->totaal_prijs }}</td> --}}
            <td>
              <a href="{{ route('admin.order.edit', ['id' => $order->id]) }}"class="btn btn-primary">Edit</a>
            </td>
            <td>
              <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$order['id']}}').submit();">Delete</a>

              <form id="remove-form-{{$order['id']}}" action="{{route('admin.destroy', $order->id)}}" method="POST" style="display: none;">
               @csrf
                 @method('DELETE')
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="sidenav padding">
   <a href="{{ url('/admin') }}">Home</a>
   <a href="{{ route('admin.user.index') }}">Users</a>
   <a href="{{ route('admin.restaurant.index') }}">Restaurant</a>
   <a href="{{ route('admin.order.index') }}">Order</a>
  </div>
@endsection
