 @extends('layouts.default')
@include('partials.header')

<div class="container padding-search">
    @foreach($restaurant as $restaurant)
    <div class="row d-inline-flex " style="margin: 5px; ">
        <div class="card mb-3" style=" max-width: 540px; ">
            <div class="row no-gutters">
                <div class="col-md-4">
                    @if($restaurant->photo == 'default.jpg')
                    <img src="{{asset('storage/profileimages/default.jpg')}}" width="150px" class="show-restaurant" alt="">
                    @else
                    <img src="{{asset('storage/profileimages')}}/{{$restaurant->photo}}" width="150px" style="margin-top: 25px; margin-left: 25px;" alt="">
                    @endif
                    <div class="card-body">
                        <p class="card-title">
                            <b><a href="restaurant/{{$restaurant->id}}">{{$restaurant->name}}</a></b>
                        </p>
                        <p class="card-title">
                          <b>Phonenumber</b> {{ $restaurant->phone}}
                          <br>
                          <b>City</b> {{ $restaurant->city}}
                        </p>
                        <p class="card-title">
                          <b>Workinghours</b>
                          <br>
                          {{ $restaurant->is_open}} - {{ $restaurant->is_closed}}
                        </p>
                        <a href="restaurant/{{$restaurant->id}}" class="btn btn-primary">
                            Visit
                        </a>
                    </div>
                        {{-- <p class="card-text">{{Str::limit($resaurant->description, 90, '...')}}.</p> --}}

                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>







