@extends('template.layout')

@section('title', 'Contacto')

@section('contenido')

<hr>

<h1>Contactos</h1>

@if(session()->has('info'))

<h3>{{ session('info') }}</h3>

@else

<form action="{{ route('mensajes.store') }}" method="POST">
    
    <!-- Crea un token de la sesion unico y asi no poner la ruta del formulario 
         en el middleware para verificar el token -->
         
    {!! csrf_field() !!}
	
	<label for="">Nombre</label>
	<input class="form-control" type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">

	{{ $errors->first('nombre') }}
	<br>

	<label for="">Email</label>
	<input class="form-control" type="text" name="email" placeholder="Email" value="{{ old('email') }}">

	{{ $errors->first('email') }}
	<br>

	<label for="">Mensaje</label>
	<br>
	<textarea class="form-control" name="mensaje" id="" cols="30" rows="10" value="{{ old('mensaje') }}"></textarea>
	{{ $errors->first('mensaje') }}
     <br>
	<input class="btn btn-primary" type="submit" value="Enviar">
</form>

@endif

@endsection