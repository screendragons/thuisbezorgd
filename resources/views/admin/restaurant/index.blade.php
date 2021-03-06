@extends('partials.header')
@extends('layouts.default')

@section('content')

  <div class="container padding">

    <h2 class="table">Restaurants</h2>
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

           {{--  Edit button --}}
            <td>
              <a href="{{ route('admin.restaurant.edit', ['restaurant' => $restaurant->id]) }}"class="btn btn-primary">
                Edit
              </a>
            </td>

            {{-- Delete button --}}
            <td>
              {!! Form::open(['route' => ['admin.restaurant.destroy', $restaurant->id]]) !!}
                <button type="submit" class="float-md-right btn btn-danger">
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

  {{-- Sidebar --}}
  @extends('partials.sidebar')

@endsection
