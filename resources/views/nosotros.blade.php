@extends('layout.app')
@section('content')
<link rel="stylesheet" href="{{asset("css/nosotros.css")}}">

<header class="bg-image">
    <div class="container text-center">
        <h1 style=" font-family: 'Kanit', sans-serif;
        font-family: 'Orbitron', sans-serif;">Sobre nosotros</h1>
        <p>Descubre más sobre nuestra empresa.</p>
    </div>
</header>

<!-- Contenido de "Sobre nosotros" -->
<section class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <!-- Logo de la empresa -->
            <img src="img/EMPRESA.png" alt="Logo de la empresa" class="img-fluid mb-3" />

            <h2  style="  font-family: 'Kanit', sans-serif;
            font-family: 'Orbitron', sans-serif;">Nuestra Historia</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce euismod libero eu augue ultrices, in consequat dolor faucibus. Nullam scelerisque turpis vel magna semper, eget eleifend orci interdum.</p>
        </div>
        <div class="col-md-6">
            <div class="mission-vision">
                <div class="mb-4">
                    <i class="fas fa-bullseye fa-3x"></i> <!-- Icono de Font Awesome para Misión -->
                    <h2 class="texto-degradado" style="  font-family: 'Kanit', sans-serif;
                    font-family: 'Orbitron', sans-serif; color: linear-gradient(to right, #fe8c00, #fbac01)">Nuestra Misión</h2>
                    <p>Ser la constructora líder en calidad y satisfacción del cliente, entregando proyectos innovadores y sostenibles.</p>
                </div>

                <div>
                    <i class="fas fa-eye fa-3x"></i> <!-- Icono de Font Awesome para Visión -->
                    <h2 class="texto-degradado" style="  font-family: 'Kanit', sans-serif;
                    font-family: 'Orbitron', sans-serif;color: linear-gradient(to right, #fe8c00, #fbac01)">Nuestra Visión</h2>
                    <p>Convertirnos en una empresa de referencia en el sector de la construcción, siendo reconocidos por nuestra excelencia en cada proyecto.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container">
    <h2 class="text-center" style="   font-family: 'Kanit', sans-serif;
    font-family: 'Orbitron', sans-serif;">Principales Sectores</h2>
    <div id="icon-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicadores del carrusel -->


         <!-- Slides del carrusel -->
         <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-home fa-4x"></i>
                        <p>Casa</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-building fa-4x"></i>
                        <p>Edificio</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-industry fa-4x"></i>
                        <p>Industria</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-industry fa-4x"></i>
                        <p>Industria</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-hotel fa-4x"></i>
                        <p>Hotel</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-warehouse fa-4x"></i>
                        <p>Almacén</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-store fa-4x"></i>
                        <p>Tienda</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-hospital fa-4x"></i>
                        <p>Hospital</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-school fa-4x"></i>
                        <p>Escuela</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-industry fa-4x"></i>
                        <p>Industria</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-hotel fa-4x"></i>
                        <p>Hotel</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-warehouse fa-4x"></i>
                        <p>Almacén</p>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-industry fa-4x"></i>
                        <p>Industria</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-hotel fa-4x"></i>
                        <p>Hotel</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-warehouse fa-4x"></i>
                        <p>Almacén</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-industry fa-4x"></i>
                        <p>Industria</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-hotel fa-4x"></i>
                        <p>Hotel</p>
                    </div>
                    <div class="col-md-2 text-center">
                        <i style=" color: #fdc830;" class="fas fa-warehouse fa-4x"></i>
                        <p>Almacén</p>
                    </div>
                </div>
            </div>

            <!-- Agrega más slides con iconos y títulos según sea necesario -->
        </div>

        <!-- Controles del carrusel -->
        <a class="carousel-control-prev" href="#icon-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#icon-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>


<div class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-content">
                    <h1>Somos una empresa de construcción</h1>
                    <p>Dedicada a brindar soluciones a los diversos requerimientos de nuestros clientes.</p>
                    <!-- Botón Bootstrap personalizado -->
                    <a href="contacto.html" class="btn btn-warning custom-button">Contáctanos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

