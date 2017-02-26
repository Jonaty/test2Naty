@extends('template.layout')

@section('title', 'Registro')

@section('contenido')

<h1>Registro</h1>


<form action="/registro" method="POST">

    {!! csrf_field() !!}
	
	<label for="nombre">Nombre</label>
	<input type="text" class="form-control" name="name" placeholder="Nombre">

	<label for="email">Email</label>
	<input type="email" class="form-control" name="name" placeholder="Email">

	<label for="password">Contraseña</label>
	<input type="password" class="form-control" name="name" placeholder="Contraseña">
    <br>
   {{--  <label>Rol de usuario</label>
	<select name="rol" class="form-control">
	  <option value="admin">Administrador</option>
	  <option value="user">Usuario</option>
	</select> --}}

	<br>

	<input type="submit" value="Registrar">
</form>
@endsection