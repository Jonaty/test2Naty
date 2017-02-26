
<h1>{{ request()->is('/') ? 'Estas en Home' : 'No estas en Home'}}</h1>


<!-- Se una la funcion 'request' y la funcion 'is' para ver la url actual y aplicar un estilo con css cuando se esta en ella al enlace -->

{{-- <header>
	<nav>
		<ul>
			<li><a class="{{ request()->is('/') ? 'active' : ''}}" 
			       href="{{ route('home') }}">Inicio</a></li>
			<li><a class="{{ request()->is('saludos') ? 'active' : ''}}" 
			       href="{{ route('saludos') }}">Saludo</a></li>
			<li><a class="{{ request()->is('contactame') ? 'active' : ''}}" 
			       href="{{ route('contactos') }}">Contacto</a></li>
		</ul>
	</nav>
</header> --}}

<!-- Forma de hacerlo mas limpio -->

<header>

@php
	 function activeMenu($url)
 {
 	return request()->is($url) ? 'background' : '';
 }
@endphp
	<nav>
		<ul class="nav nav-pills">
		
			<li class="font_size"><a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a></li>

			@if(auth()->guest())

			<li class="font_size"><a class="{{ activeMenu('saludos') }}" href="{{ route('saludos') }}">Saludo</a></li>
			
			<li class="font_size"><a class="{{ activeMenu('mensajes/create') }}" href="{{ route('mensajes.create') }}">Contacto</a></li>
			@endif

			@if(auth()->check())
			<li class="font_size"><a class="{{ activeMenu('mensajes') }}" href="{{ route('mensajes.index') }}">Mensajes</a></li>

			@if (auth()->user()->rol === 'admin')
				
			<li class="font_size"><a class="{{ activeMenu('usuarios') }}" href="{{ route('usuarios.index') }}">Usuarios</a></li>
			
			@endif

			<li class="font_size"><a href="/salir">Cerrar Sesión de {{ auth()->user()->name }}</a></li>
			@endif

			@if(auth()->guest())
			<li class="font_size"><a class="{{ activeMenu('login') }}" href="/login">Login</a></li>

			<li class="font_size"><a class="{{ activeMenu('registro') }}" href="/registro">Registro</a></li>
			@endif

		</ul>
	</nav>
</header>

