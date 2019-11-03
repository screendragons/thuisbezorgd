@extends('partials.header')
@extends('layouts.default')

@section('content')
<div class="container padding">
	<h2>Orders</h2>

	@if($order == false)
	    <h2>Create an order</h2>
	      <a href="/thuisbezorgd/public/restaurant/" class="btn btn-primary">
	        Create a order
	      </a>
		@else
	  	   Boop
	@endif
</div>
<div>

</div>
