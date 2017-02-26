@extends('template.layout')

@section('title', 'Editar Mensaje')

@section('contenido')

<hr>

<h1>Editar Mensaje</h1>

@if(session()->has('info'))

<h3>{{ session('info') }}</h3>

@else

<form action="{{ route('mensajes.update', $mensaje->id) }}" method="POST">
    
    <!-- Crea un token de la sesion unico y asi no poner la ruta del formulario 
         en el middleware para verificar el token -->

     {!! method_field('PUT') !!}
         
    {!! csrf_field() !!}
	
	<label for="">Nombre</label>
	<input type="text" name="nombre" placeholder="Nombre" value="{{ $mensaje->nombre }}">

	{{ $errors->first('nombre') }}
	<br>

	<label for="">Email</label>
	<input type="text" name="email" placeholder="Email" value="{{ $mensaje->email }}">

	{{ $errors->first('email') }}
	<br>

	<label for="">Mensaje</label>
	<br>
	<textarea name="mensaje" id="" cols="30" rows="5">{{ $mensaje->mensaje }}</textarea>
	{{ $errors->first('mensaje') }}
     <br>
	<input type="submit" value="Enviar">
</form>

@endif

@endsection