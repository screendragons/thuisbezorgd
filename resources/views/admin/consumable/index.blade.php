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

    <h2 class="table">Consumables</h2>
    <table class="table">

      <thead>
        <tr>
          <th>id</th>
          <th>restaurant_id</th>
          <th>name</th>
          <th>price</th>
          <th>category</th>
        </tr>
      </thead>

      <tbody>
        @foreach($consumables as $consumable)
          <tr>
            <td>{{ $consumable->id }}</td>
            <td>{{ $consumable->restaurant_id }}</td>
            <td>{{ $consumable->title }}</td>
            <td>{{ $consumable->price }}</td>
            <td>{{ $consumable->category }}</td>
            <td>
              <a href="{{ route('admin.consumable.edit', ['consumable' => $consumable->id]) }}"class="btn btn-primary">Edit</a>
            </td>
            <td>
              {!! Form::open(['route' => ['admin.consumable.destroy', $consumable->id]]) !!}
                <button  style="margin-left:  5px;" type="submit" class="float-md-right btn btn-danger">
                  Delete
                </button>
                @method('delete')
              {!! Form::close() !!}
            </td>
          </tr>
        @endforeach
      </tbody>

    </table>
  </div>

  {{-- sidebar --}}
  <div class="sidenav padding">
   <a href="{{ url('/admin') }}">Home</a>
   <a href="{{ route('admin.user.index') }}">Users</a>
   <a href="{{ route('admin.restaurant.index') }}">Restaurant</a>
   <a href="{{ route('admin.consumable.index') }}">Consumable</a>
   <a href="{{ route('admin.order.index') }}">Order</a>
  </div>
@endsection
