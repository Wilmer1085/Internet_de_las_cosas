@extends('layout.app')
@section('title','Inicio')

@section('content')




<div class="container mt-5">
<span class="border-start"></span>


    <!-- Título de bienvenida -->
    <h1 class="mb-5 text-center text-primary">Bienvenido al portal de Proyectos IoT</h1>

    <!-- Card de presentación -->




    <div class="card mx-auto mb-5 shadow" style="width: 22rem;">
      <img src="/img/img IoT.jpg" class="card-img-top" alt="Dispositivo IoT">
      <div class="card-body">
        <p class="card-text text-center">Explora proyectos y soluciones innovadoras con dispositivos conectados al Internet de las Cosas (IoT).</p>
      </div>
    </div>


    <!-- Sección de Cards con botones -->

    <div class="mx-auto p-4 text-white shadow rounded" 
     style="width: 1500px; background: linear-gradient(135deg, #CFBEBE, #BECFCF);">

    Modulo

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 text-center">
        <div class="col">
            <div class="card h-100 card-hover shadow-sm">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title text-primary">Gestion de registros</h5>
                </div>
                 <div class="card-body">
                    <p class="card-text text-center">Explora proyectos y soluciones innovadoras con dispositivos conectados al Internet de las Cosas (IoT).</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 card-hover shadow-sm">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title text-success">Dispositivo IoT</h5>
                </div>
                 <div class="card-body">
                    <p class="card-text text-center">Explora proyectos y soluciones innovadoras con dispositivos conectados al Internet de las Cosas (IoT).</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 card-hover shadow-sm">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title text-warning">Panel tiempo real</h5>
                </div>
                 <div class="card-body">
                    <p class="card-text text-center">Explora proyectos y soluciones innovadoras con dispositivos conectados al Internet de las Cosas (IoT).</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 card-hover shadow-sm">
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title text-info">Registrar Datos</h5>
                </div>
                <div class="card-body">
                    <p class="card-text text-center">Explora proyectos y soluciones innovadoras con dispositivos conectados al Internet de las Cosas (IoT).</p>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<!-- Estilos personalizados -->
<style>
    .card-hover {
        transition: transform 0.3s, box-shadow 0.3s;
        cursor: pointer;
    }
    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
</style>

@endsection
