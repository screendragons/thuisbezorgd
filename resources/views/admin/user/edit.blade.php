@extends('partials.header')
@extends('layouts.default')

@section('content')

@foreach ($errors->all() as $message)
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
@endforeach

  <div class="container padding profile">
    <h2>Edit user</h2>

      <form method="post" action="{{ route('admin.user.update', ['user' => $user->id ]) }}">
       {{--  <form method="post" action="{{ route('admin.user.update',[$user->id]) }}"> --}}
        @csrf
        @method('PUT')
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
