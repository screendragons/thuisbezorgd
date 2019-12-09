@extends('partials.header')
@extends('layouts.default')

@section('content')
<div class="container padding">
	<h2>Orders</h2>

	@if($orders == false)
	    <h2>Create an order</h2>
	      <a href="/thuisbezorgd/public/restaurant/" class="btn btn-primary">
	        Create a order
	      </a>
		@else
	  	   Boop
	  		<div class="panel-body">
	  			<ul class="list-group">
	  			  	@foreach($orders-> $consumables as $consumable)
	  			  	<li class="list-group-item">
	  			  	  <h3>Order</h3>
	  			  	  Name: {{ $consumable->title }}
	  			  	  <br>
	  			  	  Price: {{ $consumable->price }}
	  			  	  <br>
	  			  	  Category: {{ $consumable->category }}
	  			  	</li>
	  			  	@endforeach
	  			</ul>
	  		</div>
	  		{{-- <div class="panel-footer">
	  			<strong>Total price: {{ $orders->cart->totalPrice}}</strong>
	  		</div> --}}
	@endif
</div>
<div>

</div>
