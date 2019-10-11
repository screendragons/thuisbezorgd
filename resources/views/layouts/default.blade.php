<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
</head>
<body>
	@include('partials.header')
	@yield('content')
</body>
</html>
