<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CN constructora</title>


        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        @extends('layout.app')
    @section('content')
    <div class="home">
        <!-- Hero Slider -->
        <div class="hero_slider_container">
            <div class="hero_slider owl-carousel">

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:linear-gradient(rgb(0,0,0,0.5),rgb(0,0,0,0.8)),url(img/CN3.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 style="   font-family: 'Kanit', sans-serif;
                            font-family: 'Orbitron', sans-serif;">Bienvenido a la Constructora</h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:linear-gradient(rgb(0,0,0,0.5),rgb(0,0,0,0.8)),url(https://images.unsplash.com/photo-1531834685032-c34bf0d84c77?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1997&q=80)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 style="   font-family: 'Kanit', sans-serif;
                            font-family: 'Orbitron', sans-serif;">Edificaciones y Servicios Generales </h1>
                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:linear-gradient(rgb(0,0,0,0.5),rgb(0,0,0,0.8)),url(https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 style="   font-family: 'Kanit', sans-serif;
                            font-family: 'Orbitron', sans-serif;">Contacta ya!</h1>
                        </div>
                    </div>
                </div>

            </div>
            <div class="hero_slider_left hero_slider_nav trans_200">
                <span class="trans_200">
                    <i class="fas fa-chevron-left"></i>
                </span>
            </div>

            <!-- Botón de navegación derecha -->
            <div class="hero_slider_right hero_slider_nav trans_200">
                <span class="trans_200">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </div>
        </div>
    </div>



    <div class="hero_boxes">
        <div class="hero_boxes_inner">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <i class="fas fa-info-circle svg text-warning"></i>
                            <div class="hero_box_content">

                                <h2 style="   font-family: 'Kanit', sans-serif;
                                font-family: 'Orbitron', sans-serif;" class="hero_box_title">Solicita Informacion</h2>
                                <a href="courses.html" class="hero_box_link">Ver más</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <i class="fas fa-building svg text-white"></i>
                            <div class="hero_box_content">
                                <h2 style="   font-family: 'Kanit', sans-serif;
                                font-family: 'Orbitron', sans-serif;" class="hero_box_title">Proyectos Inmobiliarios</h2>
                                <a href="courses.html" class="hero_box_link">Ver más</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <i class="fas fa-users svg text-white"></i>
                            <div class="hero_box_content">
                                <h2 style="   font-family: 'Kanit', sans-serif;
                                font-family: 'Orbitron', sans-serif;" class="hero_box_title">Nuestros Clientes</h2>
                                <a href="teachers.html" class="hero_box_link">Ver más</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    <div class="super_container">


   <section class="action text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="left-text">
                    <h1 class="font-weight-bold">Amet porro numquam ratione</h1>
                    <p class="lead" style="font-family: 'Acme', sans-serif;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image" style="background-image: url(../img/EMPRESA2.jpg);">
                </div>
            </div>
        </div>
    </div>
</section>






    {{-- Count Up --}}
<div id="gtco-counter" class="gtco-section" style="  background: linear-gradient(to right, #000000, #ffbf00);">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                <h2 class="cursive-font primary-color">Datos de la Constructora</h2>
                <p class="text-white">Descubre algunos datos interesantes sobre nuestra empresa constructora.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-6 animate-box">
                <div class="feature-center">
                    <span class="counter" data-from="0" data-target="7" data-speed="9000" data-refresh-interval="90">0</span>
                    <span class="counter-label text-white" style=" font-family: 'Kanit', sans-serif;
                    font-family: 'Orbitron', sans-serif;"><i class="fas fa-star"></i> Promedio de Calificación</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box">
                <div class="feature-center">
                    <span class="counter" data-from="0" data-target="30" data-speed="5000" data-refresh-interval="50">0</span>
                    <span class="counter-label text-white" style=" font-family: 'Kanit', sans-serif;
                    font-family: 'Orbitron', sans-serif;"><i class="fas fa-building"></i> Tipos de Proyectos</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box">
                <div class="feature-center">
                    <span class="counter" data-from="0" data-target="50" data-speed="9000" data-refresh-interval="50">0</span>
                    <span class="counter-label text-white" style=" font-family: 'Kanit', sans-serif;
                    font-family: 'Orbitron', sans-serif;"><i class="fas fa-users"></i> Arquitectos y Diseñadores</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box">
                <div class="feature-center">
                    <span class="counter" data-from="0" data-target="20" data-speed="5000" data-refresh-interval="50">0</span>
                    <span class="counter-label text-white" style=" font-family: 'Kanit', sans-serif;
                    font-family: 'Orbitron', sans-serif;"><i class="fas fa-calendar-alt"></i> Años de Experiencia</span>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Fin --}}




        {{-- cartass --}}
        <div class="cartass" id="cartass">

            <div class="card">
                <div class="img-card"></div>
                <div class="content">
                    <div class="title">
                        <h3>techo propio</h3>
                    </div>

                    <div class="text">
                        <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi veniam itaque explicabo vero accusamus, nemo sapiente harum, voluptate error reprehenderit minima velit aliquam facilis necessitatibus voluptatibus, animi fuga nobis deleniti.</p>
                    </div>

                </div>
            </div>

            <div class="card " id="carta2"  >
                <div class="img-card"></div>
                <div class="content">
                    <div class="title">
                        <h3>mi Vivienda</h3>
                    </div>

                    <div class="text">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum pariatur quibusdam quis qui possimus aut aliquam, obcaecati molestias dignissimos rem accusamus deleniti numquam consectetur dolores repellendus corporis! Quod, molestias officiis?</p>
                    </div>

                </div>
            </div>

            <div class="card " id="carta3"  >
                <div class="img-card"></div>
                <div class="content">
                    <div class="title">
                        <h3>Inmobiliaria</h3>
                    </div>

                    <div class="text">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium distinctio soluta voluptates, excepturi sapiente illo nemo numquam esse aliquam quae impedit laboriosam saepe consequatur dolore deleniti cumque blanditiis itaque eius.</p>
                    </div>

                </div>
            </div>
        </div>
        {{-- fin --}}



        <!-- Register -->
        <div class="register">
            <div class="container-fluid">
                <div class="row row-eq-height">
                    <div class="col-md-6 nopadding">
                        <!-- Contenido de preguntas frecuentes -->
                        <div class="accordion-body">
                            <div class="accordion">
                                <h1 class="my-title">Preguntas Frecuentes</h1>
                                <hr>
                                <div class="contenedor">
                                    <div class="label">¿Cómo podemos ayudar?</div>
                                    <div class="content4">Adquiriendo los productos de nuestros artesanos peruanos, la mejor manera de avanzar es ser solidarios con quienes no pueden ayudarse a sí mismos. Solo comunícate a nuestros números, o envíanos un mensaje al WhatsApp.</div>
                                </div>
                                <hr>
                                <div class="contenedor">
                                    <div class="label">¿Tiene un costo adicional?</div>
                                    <div class="content4">Ninguno, nosotros pasamos a su casa.</div>
                                </div>
                                <hr>
                                <div class="contenedor">
                                    <div class="label">¿Comprar para su negocio o empresa?</div>
                                    <div class="content4">Nosotros contamos con los documentos necesarios para validar su compra como empresario y negociante. Estamos aptos para la recepción de sus compras bajo requisitos legales a nivel nacional.</div>
                                </div>
                                <hr>
                                <div class="contenedor">
                                    <div class="label">¿Puedo comprar con efectivo o tarjeta?</div>
                                    <div class="content4">Recibimos cualquier tipo de pago, depósitos, etc. Gracias por su compra, ayudará a un artesano peruano.</div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 nopadding">
                        <!-- Formulario de pedido de información -->
                        <div class="search_section d-flex flex-column align-items-center justify-content-center">
                            <div class="search_background" style="background-image:url(https://images.unsplash.com/photo-1593313637552-29c2c0dacd35?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80);"></div>
                            <div class="search_content text-center">
                                <h1 class="search_title text-white" style="font-family: 'Kanit', sans-serif; font-family: 'Orbitron', sans-serif;">Respondemos cualquier duda</h1>
                                <form id="search_form" class="search_form" action="post">
                                    <input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Nombre Completo" required="required" data-error="Course name is required.">
                                    <input id="search_form_category" class="input_field search_form_category" type="text" placeholder="Correo">
                                    <input id="search_form_degree" class="input_field search_form_degree" type="text" placeholder="Mensaje">
                                    <button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


      <!-- Call to Action Start -->
      <section class="call-to-action bg-cover section-space-padding text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h2 style="font-family: 'Kanit', sans-serif; font-family: 'Orbitron', sans-serif;">¿Quieres saber más sobre nosotros?</h2>
              </div>

             <div class="col-md-4">
              <div class="text-center">
                <a class="buttone" href="#contact">Contacto</a>
            </div>

             </div>
           </div>
          </div>
        </section>

    <script src="{{ asset('js/javaIndex.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6b76d54a65.js" crossorigin="anonymous"></script>

@endsection

</body>
</html>
