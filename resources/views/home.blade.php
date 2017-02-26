@extends('template.layout')

@section('title', 'Home')


@section('contenido')

<h1>Home</h1>

@if(auth()->check())

<h2>Estas autentificado</h2>

@if (auth()->user()->rol === 'administrador')
	<h3>Hola {{auth()->user()->rol}} {{auth()->user()->name}}</h3>

@elseif(auth()->user()->rol === 'usuario')
<h3>Hola {{auth()->user()->rol}} {{auth()->user()->name}}</h3>

@endif

@endif



@endsection