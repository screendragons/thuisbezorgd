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
	  	<div class="panel panel-default">
	  		<div class="panel-body">
	  			<ul class="list-group">
	  				@foreach($order->$consumable as $consumable)
	  			  		<li class="list-group-item">
	  			  			<span class="badge"> {{$consumable->price }}</span>
	  			  			{{ $consumable['item']['title']}} | {{$consumable['quantity']}}
	  			  		</li>
	  			  	@endforeach
	  			</ul>
	  		</div>
	  		<div class="panel-footer">Panel footer</div>
	  	</div>
	@endif
</div>
<div>

</div>
