@extends('layouts.app')

@section('content')
    <h1>Catálogo de flores</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Color</th>
                <th>Temporada</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flores as $flor)
            <tr>
                <td>{{ $flor->id }}</td>
                <td>{{ $flor->nombre }}</td>
                <td>{{ $flor->color }}</td>
                <td>{{ $flor->temporada }}</td>
                <td>
                    <a href="{{ route('flores.show', $flor) }}" class="btn btn-sm btn-info">Ver</a>
                    <a href="{{ route('flores.edit', $flor) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('flores.destroy', $flor) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar esta flor?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection