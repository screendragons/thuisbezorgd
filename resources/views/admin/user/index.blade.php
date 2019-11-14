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

    <h2 class="table">Users</h2>
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
              <a href="{{ route('admin.user.edit', ['id' => $user->id]) }}"class="btn btn-primary">Edit</a>
            </td>
            <td>
             {!! Form::open(['route' => ['admin.destroyuser', $user->id]]) !!}
             <button  style="margin-left:  5px;" type="submit" class="float-md-right btn btn-danger">
             Delete</button>
             {!! Form::close() !!}
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
