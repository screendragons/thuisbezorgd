<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div class="sidenav padding">
		    <a href="{{ url('/admin') }}">Home</a>
			<a href="{{ route('admin.user.index') }}">Users</a>
			<a href="{{ route('admin.restaurant.index') }}">Restaurant</a>
			<a href="{{ url('/admin/consumable/index') }}">Consumable</a>
			{{-- <a href="{{ route('admin.consumable.index') }}">Consumable</a> --}}
			<a href="{{ route('admin.order.index') }}">Order</a>
		</div>
	</body>
</html>
