<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ELESUD</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="author" content="Quickly"/>
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/> </head>

<body>
	<nav id="menu" class="navbar  fixed-top navbar-light bg-transparent">
  <a class="navbar-brand" href="#"><img src="{{ asset('img/logo/logo2.png') }}" alt="logo"></a>
</nav>
	@yield('content')
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('js/wow.js') }}"></script>

</body>

</html>