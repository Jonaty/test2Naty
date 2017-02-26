<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')</title>

	<!-- Bootstrap se compilo en sass -->
	
	{{-- <link rel="stylesheet" href="{{ url('bootstrap/bootstrap/css/bootstrap.min.css')}}"> --}}
	<link rel="stylesheet" href="{{ url('/css/app.css')}}">
</head>

<body>

	@include('template.modulos.nav')
    
    <hr>
    
   	@yield('contenido')
    
    <hr>
    
	<footer>Copyright &copy; <strong>{{ date('d/m/Y') }}</strong></footer>

	<script src="/js/all.js"></script>
 

</body>
</html>