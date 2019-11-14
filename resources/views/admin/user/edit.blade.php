@extends('partials.header')
@extends('layouts.default')

@section('content')
<div class="container padding profile">
  <h2>Edit user</h2>
      {{-- {!! Form::open(['route' => ['admin.user.edit', $user->id], 'method' => 'PUT
      ', 'files' => true])!!}
        @csrf
        <label for="first_name">First name</label>
        <div class="input-group mb-3">
          {!! Form::text('first_name', $user->first_name, ['class' => 'form-control', 'placeholder' =>
          Auth::user()->first_name,'autocomplete' => 'off']); !!}
        </div>

        <label for="first_name">Last name</label>
        <div class="input-group mb-3">

            {!! Form::text('last_name', $user->last_name, ['class' => 'form-control', 'placeholder' =>
            Auth::user()->last_name,'autocomplete' => 'off']); !!}
        </div>

        <label for="first_name">Address</label>
        <div class="input-group mb-3">

            {!! Form::text('address', $user->address, ['class' => 'form-control', 'placeholder' =>
            Auth::user()->address,'autocomplete' => 'off']); !!}
        </div>

        <label for="zipcode">Zipcode</label>
        <div class="input-group mb-3">

            {!! Form::text('zipcode', $user->zipcode, ['class' => 'form-control', 'placeholder' =>
            Auth::user()->zipcode,'autocomplete' => 'off']); !!}
        </div>

        <label for="first_name">City</label>
        <div class="input-group mb-3">
            {!! Form::text('city', $user->city, ['class' => 'form-control', 'placeholder' =>
            Auth::user()->city,'autocomplete' => 'off']); !!}
        </div> --}}

       {{--  <label for="first_name">Password</label>
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control">
        </div> --}}

        {{-- <label for="first_name">Phone</label>
        <div class="input-group mb-3">
            {!! Form::text('phone', $user->phone, ['class' => 'form-control', 'placeholder' =>
            Auth::user()->phone,'autocomplete' => 'off']); !!}
        </div>

        <label for="first_name">Email</label>
        <div class="input-group mb-3">
          {!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' =>
          Auth::user()->email,'autocomplete' => 'off']); !!}
        </div>

    <br>
    <button class="btn btn-primary">Save</button>
  {!! Form::close() !!} --}}

    <form method="post" action="{{ route('admin.user.update', [$user->id]) }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method">

        <div class="form-group">
          <label for="first_name">
            First name
            <span class="required">*</span>
          </label>
          <input placeholder="Enter first name" id="first_name" required name="first_name" spellcheck="false" class="form-control" value="{{ $user->first_name }}"/>
        </div>

        <div class="form-group">
          <label for="last_name">
            Last name
            <span class="required">*</span>
          </label>
          <input placeholder="Enter last name" id="last_name" required name="last_name" spellcheck="false" class="form-control" value="{{ $user->last_name }}"/>
        </div>

        <div class="form-group">
          <label for="address">
            Address
            <span class="required">*</span>
          </label>
          <input placeholder="Enter address" id="address" required name="address" spellcheck="false" class="form-control" value="{{ $user->address }}"/>
        </div>

        <div class="form-group">
          <label for="zipcode">
            Zipcode
            <span class="required">*</span>
          </label>
          <input placeholder="Enter email" id="zipcode" required name="zipcode" spellcheck="false" class="form-control" value="{{ $user->zipcode }}"/>
        </div>

        <div class="form-group">
          <label for="city">
            City
            <span class="required">*</span>
          </label>
          <input placeholder="Enter city" id="city" required name="city" spellcheck="false" class="form-control" value="{{ $user->city }}"/>
        </div>

        <div class="form-group">
          <label for="phone">
            Phone
            <span class="required">*</span>
          </label>
          <input placeholder="Enter phone" id="phone" required name="phone" spellcheck="false" class="form-control" value="{{ $user->phone }}"/>
        </div>

        <div class="form-group">
          <label for="email">
            Email
            <span class="required">*</span>
          </label>
          <input placeholder="Enter email" id="email" required name="email" spellcheck="false" class="form-control"
          value="{{ $user->email }}"/>
        </div>

        <div class="input-group mb-3">
          {!! Form::checkbox('is_admin', 1, $user->is_admin, ['class' => 'form-check-input']); !!}
          {!! Form::label('is_admin', 'Admin') !!}
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Submit"/>
        </div>
    </form>
  {{--
              <img src="{{asset('/storage/profile_images')}}/{{$user->image}}" class="img-fluid" alt=""> --}}


              {{-- <form enctype="multipart/form-data" action="{{URL::to('editpage')}}" method="POST">
                  <br>
                  <input type="file" name="image">
                  <br>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <br>
                  <br>
                  <button type="submit" class="btn btn-success">Change Profile Picture</button>
              </form> --}}


@endsection
