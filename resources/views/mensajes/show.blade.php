@extends('template.layout')

@section('title', 'Mensaje')

@section('contenido')

<h1>Mensaje</h1>

<h3>Contenido del mensaje: </h3>

<p><b>Nombre:</b> {{ $mensaje->nombre }}</p>
<p><b>Email:</b> {{ $mensaje->email }}</p>
<p><b>Mensaje:</b> {{ $mensaje->mensaje }}</p>
@endsection