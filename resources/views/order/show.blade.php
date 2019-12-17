@extends('partials.header')
@extends('layouts.default')

{{-- @section('content') --}}
<div class="container padding">
	<h2>Orders</h2>
    @if(count($orders))
		<div>
		    @foreach($orders as $key => $order)
			    @foreach($order->consumables as $consumable)
				    <div class="col-md-3 container edit-consumable">
					    <div class="form-group">
					        <label for="title">
					          <h4>Order {{$key + 1}}</h4>
					        </label>
					        <br>

					        <label for="title">
					          Title
					        </label>
					        {{ $consumable->title }}
					        <br>

				        	<label for="price">
				          		Price
				        	</label>
				        	{{ $consumable->price }}
				        	<br>

				        	<label for="category">
				          		Created at
				        	</label>
				        	{{$order->created_at}}
				        	<br>
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
