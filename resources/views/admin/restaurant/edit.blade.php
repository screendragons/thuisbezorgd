@extends('layouts.default')
@extends('partials.header')

@section('content')
	<div class="container padding profile">
		<form method="post" action="{{ route('admin.restaurant.update', ['restaurant' => $restaurant->id]) }}">
		  @csrf
		  @method('PUT')
		  <h3>Edit restaurant</h3>

		  <div class="form-group">
		    <label for="name">
		      Name
		      <span class="required">*</span>
		    </label>
		    <input placeholder="Enter name" id="name" required name="name" spellcheck="false" class="form-control" value="{{ $restaurant->name }}"
		    />
		  </div>

		  <div class="form-group">
		    <label for="KVK">
		      KvK
		      <span class="required">*</span>
		    </label>
		    <input placeholder="Enter KvK" id="KVK" required name="KVK" spellcheck="false" class="form-control" value="{{ $restaurant->KVK }}"
		    />
		  </div>

		  <div class="form-group">
		    <label for="address">
		      Address
		      <span class="required">*</span>
		    </label>
		    <input placeholder="Enter address" id="address" required name="address" spellcheck="false" class="form-control" value="{{ $restaurant->address }}"
		    />
		  </div>

		  <div class="form-group">
		    <label for="zipcode">
		      Zipcode
		      <span class="required">*</span>
		    </label>
		    <input placeholder="Enter zipcode" id="zipcode" required name="zipcode" spellcheck="false" class="form-control" value="{{ $restaurant->zipcode }}"
		    />
		  </div>

		  <div class="form-group">
		    <label for="city">
		      City
		      <span class="required">*</span>
		    </label>
		    <input placeholder="Enter city" id="city" required name="city" spellcheck="false" class="form-control" value="{{ $restaurant->city}}"
		    />
		  </div>

		  <div class="form-group">
		    <label for="phone">
		      Phonenumber
		      <span class="required">*</span>
		    </label>
		    <input placeholder="Enter phonenumber" id="phone" required name="phone" spellcheck="false" class="form-control" value="{{ $restaurant->phone }}"
		    />
		  </div>

		  <div class="form-group">
		    <label for="city">
		      E-mail
		      <span class="required">*</span>
		    </label>
		    <input placeholder="Enter e-mail" id="email" required name="email" spellcheck="false" class="form-control" value="{{ $restaurant->email}}"
		    />
		  </div>

		  <div class="form-group">
		    <label for="is_open">
		      Open
		      <span class="required">*</span>
		    </label>
		    <input placeholder="Enter openhours" id="is_open" required name="is_open" spellcheck="false" class="form-control" value="{{ $restaurant->is_open}}"
		    />
		  </div>

		  <div class="form-group">
		    <label for="is_closed">
		      Close
		      <span class="required">*</span>
		    </label>
		    <input placeholder="Enter closehours" id="is_closed" required name="is_closed" spellcheck="false" class="form-control" value="{{ $restaurant->is_closed}}"
		    />
		  </div>

		  <div class="form-group">
		    <input type="submit" class="btn btn-primary" value="Submit"/>
		  </div>
		</form>
	</div>
@endsection
