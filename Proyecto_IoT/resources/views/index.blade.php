@extends('layout.app')
@section('title','inicio')
@section('content')

<div class="container mt-4">

<!-- Título de bienvenida -->
    <h1 class="mb-4 text-center">Bienvenido al portal de Proyectos IoT</h1>

<div class="card" style="width: 18rem;">
  <img src="/img/img IoT.jpg" class="card-img-top" alt="Dispositivo IoT">
  <div class="card-body">
    <p class="card-text">Explora proyectos y soluciones innovadoras con dispositivos conectados al Internet de las Cosas (IoT).</p>
  </div>
</div>


<!-- Sección de botones -->
    <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mb-5">
        <button class="btn btn-primary">Tablas</button>
        <button class="btn btn-success">Gráficas</button>
        <button class="btn btn-warning">Formulario</button>
        <button class="btn btn-info">Registrar Datos</button>
    </div>


</div>

@endsection
