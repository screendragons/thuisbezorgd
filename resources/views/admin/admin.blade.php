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

    <h2 class="table">All users</h2>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Address</th>
          <th>City</th>
          <th>Phone</th>
          <th>E-mail</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->city }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>
            <td>
              <a href="{{URL::to('admin/user')}}/{{$user->id}}/edit" title="edit">
                <button class="btn btn-primary">Edit</button>
              </a>
            </td>
            <td>
             <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$user['id']}}').submit();">Delete</a>

              <form id="remove-form-{{$user['id']}}" action="{{route('admin.destroy', $user->id)}}" method="POST" style="display: none;">
              @csrf
                @method('DELETE')
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>


   {{--  <h2 class="table">All restaurants</h2>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>user_id</th>
          <th>Name</th>
          <th>KVK</th>
          <th>Address</th>
          <th>Zipcode</th>
          <th>City</th>
          <th>Phone</th>
          <th>E-mail</th>
          <th>Is open</th>
          <th>Is closed</th>
        </tr>
      </thead>
      <tbody>
        @foreach($restaurants as $restaurant)
          <tr>
            <td>{{ $restaurant->id }}</td>
            <td>{{ $restaurant->user_id }}</td>
            <td>{{ $restaurant->name }}</td>
            <td>{{ $restaurant->KVK }}</td>
            <td>{{ $restaurant->address }}</td>
            <td>{{ $restaurant->zipcode }}</td>
            <td>{{ $restaurant->city }}</td>
            <td>{{ $restaurant->phone }}</td>
            <td>{{ $restaurant->email }}</td>
            <td>{{ $restaurant->is_open }}</td>
            <td>{{ $restaurant->is_closed }}</td>
            <td>
              <a href="{{ route('admin.restaurant.edit', ['id' => $restaurant->id]) }}"class="btn btn-primary">Edit</a>
            </td>
            <td>
              <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$restaurant['id']}}').submit();">Delete</a>

              <form id="remove-form-{{$restaurant['id']}}" action="{{route('restaurant.destroy', $restaurant->id)}}" method="POST" style="display: none;">
               @csrf
                 @method('DELETE')
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table> --}}

  </div>

  <div class="sidenav padding">
    <a href="{{ url('/admin') }}">Home</a>
    <a href="{{ route('admin.user.index') }}">Users</a>
    <a href="{{ route('admin.restaurant.index') }}">Restaurant</a>
    <a href="{{ route('admin.consumable.index') }}">Consumable</a>
    <a href="{{ route('admin.order.index') }}">Order</a>
  </div>
@endsection
