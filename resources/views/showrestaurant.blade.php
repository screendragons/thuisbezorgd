@include('partials.header')
{{-- @section('content') --}}
<div class="container padding">
  <h2>Restaurants</h2>
  <p>Here will show the restaurants</p>
  @php
    $consumables = $restaurant->consumables()->get();

  @endphp

    <div class="col-md-3 profile-section">
      <div class="card" style="width: 18rem;">
        <img src="tb.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            {{ $restaurant->name}}
          </h5>
          <p class="card-text">
            {{ $restaurant->city}}
          </p>
          {{-- <a href="{{ url('/consumables')}}" class="btn btn-primary">
            Visit
          </a> --}}
        </div>
      </div>
    </div>

    <h1>papa</h1>

    @foreach($consumables as $consumable)
      <p>{{ $consumable->title }}</p>
      <p>{{ $consumable->price }}</p>
{{--       <p>{{ $consumable->title }}</p>
      <p>{{ $consumable->title }}</p> --}}

    @endforeach

</div>
{{-- @endsection --}}
