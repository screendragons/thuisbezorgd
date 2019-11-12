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

    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>user_id</th>
          <th>KVK</th>
          <th>Address</th>
          <th>Zipcode</th>
          <th>City</th>
          <th>Phone</th>
          <th>E-mail</th>
          <th>Is open</th>
          <th>Is closed/th>
        </tr>
      </thead>
      <tbody>
        @foreach($restaurants as $restaurant)
          <tr>
            <td>{{ $restaurant->id }}</td>
            <td>{{ $restaurant->user_id }}</td>
            <td>{{ $restaurant->KVK }}</td>
            <td>{{ $restaurant->address }}</td>
            <td>{{ $restaurant->zipcode }}</td>
            <td>{{ $restaurant->city }}</td>
            <td>{{ $restaurant->phone }}</td>
            <td>{{ $restaurant->email }}</td>
            <td>{{ $restaurant->is_open }}</td>
            <td>{{ $restaurant->is_closed }}</td>
           {{--  <td>
              <a href="{{ route('admin.restaurant.edit', ['id' => $restaurant->id]) }}"class="btn btn-primary">Edit</a>
            </td> --}}
            <td><a href="{{URL::to('/restaurant')}}/{{$restaurant->id}}/edit" title="Aanpassen"><button class="btn btn-success">Aanpassen</button></a></td>

            {{-- <td>
             <a class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('remove-form-{{$restaurant['id']}}').submit();">Delete</a>

              <form id="remove-form-{{$restaurant['id']}}" action="{{route('admin.restaurant.destroy', $restaurant->id)}}" method="POST" style="display: none;">
              @csrf
                @method('DELETE')
              </form>
            </td> --}}
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
