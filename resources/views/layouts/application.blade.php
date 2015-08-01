<!DOCTYPE html>
<html>
<head>
	<title>Brewers &amp; Beers | Devise Demo Website</title>
	<meta name="description" content="Demo website for Devise Development Examples and a Sandbox to Experiment In!">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/brewers-and-beers.css') }}">
	@include('devise::styles')
</head>

<body>

	@include('layouts.navigation')

	@yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/1.4.14/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/1.3.5/jquery.localScroll.min.js"></script>
    <script src="{{ URL::asset('js/brewers-and-beers.js') }}"></script>

	@include('devise::scripts')
</body>
</html>