@extends('layouts.default')
@include('partials.header')


<div class="container" >
    @foreach($restaurant as $restaurant)
    <div class="row d-inline-flex " style="margin: 5px; ">


        <div class="card mb-3" style=" max-width: 540px; ">
            <div class="row no-gutters">
                <div class="col-md-4">
                    @if($restaurant->photo == 'default.jpg')
                    <img src="{{asset('storage/profileimages/default.jpg')}}" width="150px" style="margin-top: 25px; margin-left: 25px;" alt="">
                    @else
                    <img src="{{asset('storage/profileimages')}}/{{$restaurant->photo}}" width="150px" style="margin-top: 25px; margin-left: 25px;" alt="">
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><a href="restaurant/{{@$restaurant->title}}">{{$restaurant->title}}</a></h5>
           {{--              <p class="card-text">{{Str::limit($resaurant->description, 90, '...')}}.</p>
 --}}
                    </div>
                </div>
            </div>


        </div>


    </div>
    @endforeach
</div>







