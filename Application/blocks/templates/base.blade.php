<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/plugin/bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="assets/css/base.css">
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
		@stack('style')	 
</head>
<body>
	@include('layout.header')
		@yield('content')
	@include('layout.footer')

	 @stack('scripts')
</body>
</html>