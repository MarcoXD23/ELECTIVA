@extends('layouts.app')

@section('titulo', 'Saludo')

@section('contenido')
    <h1>Hola, {{ $nombre }}</h1>
    <p>Esta vista fue generada con Blade.</p>

    @if (count($libros) > 0)
        <ul>
            @foreach ($libros as $libro)
                <li>{{ $libro }}</li>
            @endforeach
        </ul>
    @else
        <p>No hay libros para mostrar</p>
    @endif
@endsection
