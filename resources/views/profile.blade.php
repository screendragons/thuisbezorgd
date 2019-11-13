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
        {{-- <div class="form-group">
          <label for="file">
            Upload your avatar
            <span class="required">*</span>
          </label>
          <input type="file" name="file">
        </div> --}}

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
            Zipcode<span class="required">*</span>
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

        {{-- <div class="form-group">
          <label for="user-password">Password<span class="required">*</span></label>
          <input type="password"  placeholder="Enter password"
          id="user-password"
          required
          name="password"
          spellcheck="false"
          class="form-control"
          value=""
          />
        </div> --}}

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

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Submit"/>
        </div>
        {{-- <div class="form-group">
          <a href="{{ route('profile.edit', ['id' => $user->id]) }}" class="btn btn-primary">
            Edit
          </a>
        </div> --}}
      </form>
      {!! Form::open(['route' => ['profile.destroy', $user->id]]) !!}
      <button  style="margin-left:  5px;" type="submit" class="float-md-right btn btn-danger">Verwijderen</button>
          @method('DELETE')
      {!! Form::close() !!}
    </div>
  </div>
</div>
{{--   </div>
    <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ url('order') }}" class="btn btn-primary">My orders</a>
  </form> --}}
  {{-- {!! Form::open(['route' => 'profile.update', 'method' => 'POST', 'files' => true]) !!}
    <label for="first_name">First name</label>
    <div class="input-group mb-3">
      {!! Form::text('first_name', $user->first_name, ['class' => 'form-control', 'placeholder' =>
      Auth::user()->first_name,'autocomplete' => 'off']); !!}
    </div>

    <label for="last_name">Last name</label>
    <div class="input-group mb-3">
      {!! Form::text('last_name', $user->last_name, ['class' => 'form-control', 'placeholder' =>
      Auth::user()->last_name,'autocomplete' => 'off']); !!}
    </div>

    <label for="addresss">Address</label>
    <div class="input-group mb-3">
      {!! Form::text('address', $user->address, ['class' => 'form-control', 'placeholder' =>
      Auth::user()->address,'autocomplete' => 'off']); !!}
    </div>

    <label for="zipcode">Zipcode</label>
    <div class="input-group mb-3">
      {!! Form::text('zipcode', $user->zipcode, ['class' => 'form-control', 'placeholder' =>
      Auth::user()->zipcode,'autocomplete' => 'off']); !!}
    </div>

    <label for="city">City</label>
    <div class="input-group mb-3">
      {!! Form::text('city', $user->city, ['class' => 'form-control', 'placeholder' =>
      Auth::user()->city,'autocomplete' => 'off']); !!}
    </div>

    <label for="phone">Phone</label>
    <div class="input-group mb-3">
      {!! Form::text('phone', $user->phone, ['class' => 'form-control', 'placeholder' =>
      Auth::user()->phone,'autocomplete' => 'off']); !!}
    </div>

    <label for="email">Email</label>
    <div class="input-group mb-3">
      {!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' =>
      Auth::user()->email,'autocomplete' => 'off']); !!}
    </div>
 --}}
    {{-- <br>
    <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('profile.update', $user->id) }}" class="btn btn-primary">Update</a>
    <a href="{{ url('order') }}" class="btn btn-primary">My orders</a>
  {!! Form::close() !!}
</div> --}}
@endsection
