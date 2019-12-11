@extends('partials.header')
@extends('layouts.default')

{{-- @section('content') --}}
<div class="container padding">
{{-- 	<h2>Orders</h2> --}}

	{{-- @if($orders == false)
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
	  		</div> --}}
	  		{{-- <div class="panel-footer">
	  			<strong>Total price: {{ $orders->cart->totalPrice}}</strong>
	  		</div> --}}
	{{-- @endif --}}
	<h3>Orders</h3>
    @if(count($orders))
		<div class="orders">
		    @foreach($orders as $key => $order)
		    @foreach($order->consumables as $consumable)
			    <div class="col-md-3 container edit-consumable">
				    <div class="form-group">
				        <label for="title">
				          Order {{$key + 1}}
				        </label>
				        {{ $consumable->title }}
				    </div>

			      	<div class="form-group">
			        	<label for="price">
			          		Price
			        	</label>
			        	{{ $consumable->price }}
			      	</div>

			      	<div class="form-group">
			        	<label for="category">
			          		Created at
			        	</label>
			        	{{$order->created_at}}
			      	</div>
			    </div>
			@endforeach
			@endforeach
		</div>
		@else
		<h5>{{$user->name}} has no orders</h5>
	@endif

</div>
{{-- </div>
 --}}
