<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
</head>
<body>

	<div class="container mx-auto">

		@php
			define("DIAS_SEMANA",["lunes", "martes", "miércoles", "jueves", "viernes", "sábado", "domingo"]) ;
		@endphp

		<!-- Esto es un comentario HTML -->
		{{-- Esto es un comentario Blade --}}		
		<h3>{{ $param }}</h3>

		<h3>Mostrar en pantalla el día de la semana que es.</h3>
		<p>		
		{{ DIAS_SEMANA[$dia-1] }}
		</p>

		<h3>Mostrar en pantalla si el día es laborable o es fin de semana</h3>
		<p>
		@switch($dia)
			@case(1)
			@case(2)
			@case(3)
			@case(4)
			@case(5) Es laborable @break
			@case(6) 
			@case(7) Es fin de semana @break
		@endswitch
		</p>		

		<h3>Mostrar los valores comprendidos entre x e y.</h3>
		<p>
			@for( ; $x < $y; $x++) {{ $x }}&nbsp; @endfor
		</p>

		<h3>Mostramos el array de nombres</h3>
		<p>
			@foreach($nombres as $item) {{ $item }}&nbsp; @endforeach
		</p>


	</div>

</body>
</html>