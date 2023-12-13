<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&family=Orbitron:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Font Awesome CSS (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Phudu&display=swap" rel="stylesheet">
    <title>CN constructora</title>
    <link rel="icon" href="{{asset('img/EMPRESA.png')}}">

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="  background: linear-gradient(to right, black, #fdc830);">
    <a class="navbar-brand" href="#"><img class="navbar-icon img-fluid" src="img/EMPRESA.png" alt="" style="max-width: 150px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span>MENÚ</span>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route("index")}}"><i class="fas fa-home"></i> Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route("nosotros")}}"><i class="fas fa-users"></i> Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route("techoPropio")}}"><i class="fas fa-home"></i> Techo Propio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route("miVivienda")}}"><i class="fas fa-building"></i> Mi Vivienda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route("contacto")}}"><i class="fas fa-envelope"></i> Contáctanos</a>
            </li>

        </ul>
    </div>
</nav>


    <main class="">
        @yield('content')

    </main>



        {{-- clientes --}}

        <section id="fh5co-trusted" data-section="trusted" >
            <div class="fh5co-trusted" id="participacion" >
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12 section-heading text-center" id="to-animate">
                            <h2 class="to-animate text-center" style="
                                font-family: 'Kanit', sans-serif;
                        font-family: 'Orbitron', sans-serif;
                            ">Apoyados por</h2>

                        </div>
                    </div>
                    <div class="containers" id="apoyadosP">
                        <div class="row" id="partes">
                            <div class="col-md-2 col-sm-3 col-xs-6 col-sm-offset-0 col-md-offset-1">
                                <div class="partner-logo to-animate-2" id="techo">
                                    <img src="{{asset('img/techopropio.png')}}" alt="Partners" class="img-responsive" id="techoP">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6">
                                <div class="partner-logo to-animate-2" id="Mivi">
                                    <img src="{{asset('img/vivienda.png')}}" alt="Partners" class="img-responsive" id="img-vivienda">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6" id="minis">
                                <div class="partner-logo to-animate-2" id="ministerio">
                                    <img src="{{asset('img/ministerio.png')}}" alt="Partners" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-6" id="muni">
                                <div class="partner-logo to-animate-2" id="municipalidad">
                                    <img src="{{asset('img/municipalidad.png')}}" alt="Partners" class="img-responsive">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <div class="partner-logo to-animate-3" id="libertad">
                                    <img src="{{asset('img/libertad.png')}}" alt="Partners" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <script>
            // Asegúrate de que el documento esté completamente cargado
$(document).ready(function() {
    // Maneja el evento de hacer clic en el botón para desplazarse hacia arriba
    $('.floating-button a').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });
});

        </script>

        <div class="floating-button">
            <a href="#" class="btn btn-warning btn-lg">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>

        {{-- fin --}}

        <div class="whatsapp-button">
            <a href="https://wa.me/1234567890" target="_blank">
                <div class="whatsapp-icon">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png" alt="WhatsApp Icon">
                </div>
            </a>
        </div>

 <!-- footer -->
 <footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="{{asset('img/EMPRESA.png')}}" alt="Logo de SLee Dw">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small id="pie">&copy; 2023 <b>CN Constructora</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/6b76d54a65.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('js/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>



</body>
</html>
