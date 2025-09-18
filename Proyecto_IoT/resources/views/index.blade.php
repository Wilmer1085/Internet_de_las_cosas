@extends('layout.app')
@section('title','Inicio')

@section('content')




<div class="container mt-5">
<span class="border-start"></span>


<!-- Título de bienvenida -->
<div class="text-center mt-3 mb-5">
  <h1 class="display-4 fw-bold text-gradient">
    Bienvenido al portal de <span class="text-primary">Proyectos IoT</span>
  </h1>
  <p class="lead text-muted">
    Explora soluciones innovadoras y aprende sobre el Internet de las Cosas
  </p>
</div>

<!-- Estilos personalizados para el título -->
<style>
  .text-gradient {
    background: linear-gradient(90deg, #007bff, #00c9a7, #17a2b8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
  }
</style>



    <!-- Card de presentación -->

<div class="card mx-auto mb-5 shadow" style="max-width: 1000px;">
  <div id="carouselIoT" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://picsum.photos/1000/400?random=1" class="d-block w-100" alt="IoT ejemplo 1">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1000/400?random=2" class="d-block w-100" alt="IoT ejemplo 2">
      </div>
      <div class="carousel-item">
        <img src="https://picsum.photos/1000/400?random=3" class="d-block w-100" alt="IoT ejemplo 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselIoT" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselIoT" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <div class="card-body">
    <p class="card-text text-center">
      Explora proyectos y soluciones innovadoras con dispositivos conectados al Internet de las Cosas (IoT).
    </p>
  </div>
</div>




    


    <!-- Sección de Cards con botones -->

  <div class="container-fluid mx-auto p-4 text-white shadow rounded" 
 style="background: linear-gradient(135deg, #CFBEBE, #BECFCF);">



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
