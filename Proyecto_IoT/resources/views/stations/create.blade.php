@extends('layouts.app')

@section('title', 'Registrar Estación')

@section('content')
<div class="container mt-4">
    <h2 class="fw-bold text-success mb-4">Registrar Nueva Estación</h2>

    <div class="card shadow-sm p-4">
        <form action="{{ route('stations.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la Estación</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="city_id" class="form-label">Ciudad</label>
                <select id="city_id" name="city_id" class="form-select" required>
                    <option value="">Seleccione una ciudad</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="latitude" class="form-label">Latitud</label>
                    <input type="text" id="latitude" name="latitude" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="longitude" class="form-label">Longitud</label>
                    <input type="text" id="longitude" name="longitude" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('stations.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
