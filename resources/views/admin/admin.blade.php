@extends('partials.header')
@extends('layouts.default')

@section('content')
  <div class="container padding">
    <ul class="navbar-nav bg-gradient-primary sidebar {{-- sidebar-dark accordion --}}" id="accordionSidebar">
    </ul>
    <div class="container-fluid">
      <!-- Content Row -->
      <div class="row">
      </div>
    </div>

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
                <a href="{{-- {{ route('admin.edit', ['id' => $user->id]) }}  --}}"class="btn btn-primary">Edit</a>
              </td>
              <td>
               <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$user['id']}}').submit();">Delete</a>

                <form id="remove-form-{{$user['id']}}" action="{{-- {{route('admin.destroy', $user->id)}} --}}" method="POST" style="display: none;">
                  @csrf
                  @method('DELETE')
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
    </table>
  </div>
@endsection
