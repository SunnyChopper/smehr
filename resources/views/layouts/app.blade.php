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
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	<body>
		@include('layouts.navbar')
		@yield('content')
		@include('layouts.footer')
		@include('layouts.sticky-mobile-footer')
		@include('layouts.js')
	</body>
</html>