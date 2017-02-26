@extends('template/layout')

@section('title', 'Usuarios')

@section('contenido')

<h1>Usuarios</h1>


@if(count($usuarios) >= 1)

<table class="table">
	
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Rol</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
		
		@foreach($usuarios as $usuario)
        
        <tr>
        	<td>{{ $usuario->id }}</td>
        	<td>{{ $usuario->name }}</td>
        	<td>{{ $usuario->email }}</td>
        	<td>{{ $usuario->rol }}</td>   	
        </tr>
        
		@endforeach
	</tbody>
</table>

@else

<p>No hay usuarios registrados todavia!!</p>

@endif

@endsection