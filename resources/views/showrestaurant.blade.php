@include('partials.header')
{{-- @section('content') --}}
<div class="container padding">
  <h2>Restaurants</h2>
  <p>Here will show the restaurants</p>

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

    @php
      $consumables = $restaurant->consumables()->get();
    @endphp

    @foreach($consumables as $consumable)
      <p>{{ $consumable->title }}</p>
      <p>{{ $consumable->price }}</p>
{{--       <p>{{ $consumable->title }}</p>
      <p>{{ $consumable->title }}</p> --}}
    @endforeach

    <a href="{{ url('/createconsumables')}}" class="btn btn-primary">Create a consumable</a>

</div>
{{-- @endsection --}}
