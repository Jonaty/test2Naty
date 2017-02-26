@extends('template.layout')

@section('title', 'Saludo')

@section('contenido')

<hr>

 <!-- Mostrar el nombre pasado en el parametro de la url -->
	<h1>Hola me llamo {{ $nombre }}</h1>
   
   <!-- Mostrar una lista de items -->
	<ul>
		@forelse($lenguajes as $lenguaje)

		<li>{{ $lenguaje }}</li>

		@empty

		<p>No hay lenguajes de programacion :(</p>

		@endforelse
	</ul>

	<!-- Mostrar mensajes de cantidad -->

	@if(count($lenguajes) === 1)

	<p> Solo hay un lenguaje registrado </p>

	@elseif(count($lenguajes) > 1)

	<p>Hay varios lenguajes registrados</p>

	@else

	<p>No hay lenguajes registrados</p>

	@endif

	@endsection