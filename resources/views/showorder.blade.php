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
		    	<div class="card" style="width: 18rem; float: left;">
				  <div class="card-body">
				    <h5 class="card-title">Order {{$key + 1}}</h5>
{{-- 				    <h6 class="card-subtitle mb-2">{{$order->restaurant->name}}</h6> --}}
				    <h6 class="card-subtitle mb-2 text-muted">{{$order->created_at}}</h6>
				    <p class="card-text"></p>
				    <button type="button" class="card-link" data-toggle="modal" data-target="#orderModal{{$order->id}}">Check Order</button>
				  </div>
				</div>
	            <div class="modal fade" id="orderModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog" role="document">
				    <div class="modal-content">
				      	<div class="modal-header">
				        {{-- <h5 class="modal-title" id="exampleModalLabel">Order {{$key + 1}} - {{$order->restaurant->name}}</h5> --}}
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
			        	<table class="table">
						  <thead>
						    <tr>
						      <th scope="col">Product</th>
						      <th scope="col">Price</th>
						    </tr>
						  </thead>
						  <tbody>
						  	@foreach($order->consumables as $consumable)
								<tr>
								  <td>{{$consumable->title}}</td>
								  <td>€{{$consumable->price}}</td>
								</tr>
						    @endforeach
						  </tbody>
						</table>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
		    @endforeach
		</div>
		@else
			<h5>{{$user->name}} Has no orders</h5>
		@endif
	</div>
</div>
{{-- </div>
 --}}
