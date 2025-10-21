@extends('layouts.app')

@section('title', 'Estaciones IoT')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">Listado de Estaciones</h2>
        <a href="{{ route('stations.create') }}" class="btn btn-success">+ Nueva Estación</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Ciudad</th>
                        <th>Coordenadas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($stations as $station)
                        <tr>
                            <td>{{ $station->id }}</td>
                            <td>{{ $station->name }}</td>
                            <td>{{ $station->city->name ?? 'N/A' }}</td>
                            <td>{{ $station->latitude }}, {{ $station->longitude }}</td>
                            <td>
                                <a href="{{ route('stations.edit', $station) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('stations.destroy', $station) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar estación?')">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">No hay estaciones registradas.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
