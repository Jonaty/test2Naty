@extends('template.layout')

@section('title', 'Mensajes')

@section('contenido')

<h1>Lista de Mensajes</h1>

	@if(session()->has('info'))

	<h3 class="text-success"> {{ session('info') }}</h3>

	@elseif(session()->has('info2'))

	<h3 class="text-info">{{ session('info2') }}</h3>

	@elseif(session()->has('info3'))

	<h3 class="text-danger">{{ session('info3') }}</h3>

	@endif

@if(count($mensajes) >= 1)

<table class="table">
	
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Mensaje</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
		
		@forelse($mensajes as $mensaje)
        
        <tr>
        	<td>{{ $mensaje->id }}</td>
        	<td><a href="{{ route('mensajes.show', $mensaje->id) }}">{{ $mensaje->nombre }}</a></td>
        	<td>{{ $mensaje->email }}</td>
        	<td>{{ $mensaje->mensaje }}</td>
        	<td>
        	<a class="btn btn-info btn-xs" href="{{ route('mensajes.edit', $mensaje->id) }}">Editar</a>

            <form action="{{ route('mensajes.destroy', $mensaje->id) }}" method="POST">
                
                {!! csrf_field() !!}
                {!! method_field('DELETE')!!}

            	<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
            </form>
        	</td>
        	
        </tr>

        @empty

        <tr>
        	<td class="text-center">No hay mensajes registardos todavia</td>
        </tr>
		@endforelse
	</tbody>
</table>

@else

<p>No hay mensajes todavía!!</p>

@endif


@endsection