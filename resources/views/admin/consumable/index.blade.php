@include('partials.header')
@include('layouts.default')
{{--
@section('content') --}}

  <div class="container padding font">

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

            {{-- {{ dd($consumables)}} --}}

            {{--  Edit button --}}
            <td>
              <a href="{{ route('admin.consumable.edit', ['consumable' => $consumable->id]) }}"class="btn btn-primary">
                Edit
              </a>
            </td>

            {{-- Delete button --}}
            <td>
              {!! Form::open(['route' => ['admin.consumable.destroy', $consumable->id]]) !!}
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

  {{-- sidebar --}}
  @include('partials.sidebar')
{{--
@endsection --}}

