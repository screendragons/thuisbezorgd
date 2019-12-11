@extends('partials.header')
@extends('layouts.default')

@section('content')
  <div class="container padding form profile">
    <div class="row col-md-9 col-lg-9 col-sm-9 pull-left">
      <h2>Profile</h2>
      <div class="row  col-md-12 col-lg-12 col-sm-12" >
        <form method="post" action="{{ route('profile.update', ['profile' => $user->id]) }}">
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
            <input placeholder="Enter address" id="address" required name="address"spellcheck="false" class="form-control" value="{{ $user->address }}"/>
          </div>

          <div class="form-group">
            <label for="zipcode">
              Zipcode
              <span class="required">*</span>
            </label>
            <input placeholder="Enter zipcode" id="zipcode" required name="zipcode"spellcheck="false" class="form-control" value="{{ $user->zipcode }}"/>
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
            <input placeholder="Phone" id="phone" required name="phone" spellcheck="false" class="form-control" value="{{ $user->phone }}"/>
          </div>

          <div class="form-group">
            <label for="email">
              E-mail
              <span class="required">*</span>
            </label>
            <input placeholder="Enter email" id="email" required name="email" spellcheck="false" class="form-control" value="{{ $user->email }}"/>
          </div>

          {{-- Update button --}}
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit"/>
          </div>

        </form>

        {{-- Delete button --}}
        {!! Form::open(['route' => ['profile.destroy', $user->id]]) !!}
          <button  style="margin-left:  5px;" type="submit" class="float-md-right btn btn-danger">
            Delete
          </button>
          @method('DELETE')
        {!! Form::close() !!}
      </div>
    </div>
  </div>
@endsection
