@extends('partials.header')
@extends('layouts.default')

{{-- @section('content') --}}
<div class="container padding">
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
