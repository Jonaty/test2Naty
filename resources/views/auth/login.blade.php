@extends('template.layout')

@section('title', 'Login')

@section('contenido')
	
	<h1>Login</h1>


<form action="/login" method="POST">

   {!! csrf_field() !!}
	
	<label for="email">Email</label>
	<br>
	<input type="email" name="email" placeholder="Email">
	<br>
	<br>

	<label for="password">Password</label>
	<br>
	<input type="password" name="password" placeholder="Password">
	<br>
	<br>

	{{-- <button class="btn btn-info" type="submit" value="Entrar">
		Entrar
	</button> --}}

	<input type="submit" value="Entrar">

</form>
@endsection