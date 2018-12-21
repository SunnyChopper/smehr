<!DOCTYPE html>
<html>
	<head>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<title>{{ $page_title }}</title>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik:200,400,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/layouts.css') }}">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		@include('layouts.navbar')
		@yield('content')
		@include('layouts.footer')
		@include('layouts.sticky-mobile-footer')
		@include('layouts.js')
	</body>
</html>