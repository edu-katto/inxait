<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Chebrote</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('landingPage/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('landingPage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landingPage/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landingPage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingPage/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landingPage/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingPage/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingPage/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('landingPage/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('landingPage/css/style.css') }}" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="{{ route('inicio') }}"><span>SUBARU</span></a></h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
                <li><a class="nav-link scrollto" href="#acerca">Acerca De</a></li>
                <li><a class="nav-link scrollto" href="#caracteristicas">Caracteristicas</a></li>
                <li><a class="nav-link scrollto" href="#concurso"><span class="badge bg-warning text-dark">Concurso</span></a></li>
                <li><a class="nav-link scrollto" href="#faq">Preguntas frecuentes</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out">
                    <h1>Llegó a colombia el nuevo <span>Subaru XV</span></h1>
                    <h2>Con nuevas mejorar y listo para que sea tuyo</h2>
                    <div class="text-center text-lg-start">
                        <a href="#acerca" class="btn-get-started scrollto">Acompañame en el recorrido</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                <img src="{{ asset('landingPage/img/subaru-cars.png') }}" class="img" alt="">
            </div>
        </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="acerca" class="about">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                    <a href="https://youtu.be/wDSeiOUhPrQ" class="glightbox play-btn mb-4"></a>
                </div>

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                    <h3>VERSATIL Y CON UN DISEÑO JUVENIL</h3>
                    <p>Lleva la diversión al siguiente nivel con nuestra Subaru XV, la SUV compacta de la marca. Con un estilo inspirado en los deportes, paragolpes delantero, parrilla delantera y marco de luz antiniebla, además de llamativas llantas de aleación."</p>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="ri-star-fill"></i></div>
                        <h4 class="title"><a href="">MÁXIMA COMODIDAD</a></h4>
                        <p class="description">Experimente un interior excepcionalmente cómodo. Con un espacio amplio y asientos traseros reclinables disponibles, sus pasajeros pueden disfrutar un viaje cómodo.</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="ri-shield-fill"></i></div>
                        <h4 class="title"><a href="">SEGURIDAD</a></h4>
                        <p class="description">Todos los modelos cuentan con 7 airbags: frontales, laterales y de cortina para dar mayor protección a todos los pasajeros.</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="ri-car-washing-fill"></i></div>
                        <h4 class="title"><a href="">TECHO SOLAR</a></h4>
                        <p class="description">Disponible para algunas versiones, el sunroof es una excelente alternativa la cual permite que la luz o el aire fresco ingrese al compartimento de pasajeros y que el ruido del exterior sea inferior.</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="caracteristicas" class="features">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>CARACTERISTICAS</h2>
                <p>SUBARU XV</p>
            </div>

            <div class="row" data-aos="fade-left">
                <div class="col-lg-3 col-md-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <i class="ri-sailboat-fill" style="color: #ffbb2c;"></i>
                        <h3><a href="">Modo crucero</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <i class="ri-focus-fill" style="color: #5578ff;"></i>
                        <h3><a href="">Transmición simétrica</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                        <i class="ri-sensor-fill" style="color: #e80368;"></i>
                        <h3><a href="">Sensores de posicionamiento</a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <i class="ri-camera-3-fill" style="color: #e361ff;"></i>
                        <h3><a href="">Camara Retroceso</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clientes con opiniones positivas</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Autos vendidos</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Concesionarios</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Details Section ======= -->
    <section id="concurso" class="details">
        <div class="container">

            <div class="row content">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('landingPage/img/subaru-cars.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6 pt-1" data-aos="fade-up">
                    <h3>Subaru colombia trae para todos sus clientes el sorte de un espectacular SUBARU XV.</h3>
                    <p class="fst-italic">
                        Los pasos son super sencillos, solo llena el siguiente formulario y a tu correo llegara la confirmacion de tu participacion.
                    </p>
                    <div class="col-lg-12 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Alerta!</strong> {{ $message }}.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Alerta!</strong> Antes de guardar validar los errores.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form action="{{ route('participantes.store') }}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                                    <small class="help-block form-text text-danger">@error('nombre') {{ $message }} @enderror</small>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
                                    <small class="help-block form-text text-danger">@error('apellido') {{ $message }} @enderror</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <div class="form-group mt-3">
                                        <input type="number" class="form-control" name="telefono" placeholder="Celular" required>
                                        <small class="help-block form-text text-danger">@error('telefono') {{ $message }} @enderror</small>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <div class="form-group mt-3">
                                        <input type="number" class="form-control" name="cedula" placeholder="Cedula" required>
                                        <small class="help-block form-text text-danger">@error('cedula') {{ $message }} @enderror</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group mt-3">
                                    <select class="form-select" name="cod_departamento">
                                        <option selected>Departamento</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group mt-3">
                                    <select class="form-select" name="cod_ciudad">
                                        <option selected>Munucipio</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <div class="form-group mt-3">
                                        <input type="email" class="form-control" name="correo" placeholder="Correo" required>
                                        <small class="help-block form-text text-danger">@error('correo') {{ $message }} @enderror</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <div class="form-group mt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" id="terminos_condiciones" type="checkbox" name="terminos_condiciones">
                                            <label class="form-check-label" for="terminos_condiciones">
                                                Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales. Haga clic aquí
                                            </label>
                                            <small class="help-block form-text text-danger">@error('terminos_condiciones') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center my-3"><button class="btn btn-dark" type="submit">Participa</button></div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Details Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>Preguntas frecuentes</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">¿Qué es un SUV y por qué elegir este tipo de carros? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Muchas personas pueden preguntarse qué es un SUV cuando escuchan esta palabra por primera vez. Esto se debe a que en nuestro país llamamos a este tipo de vehículos como camionetas a nivel general. Es por ello que nos hemos tomado un tiempo para explicar detenidamente a qué se refiere este término exactamente y qué tiene de especial esta camioneta, la cual es una de las más solicitadas y vendidas a nivel mundial.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">¿Cuelaes son las ventajas de tener un carro híbrido? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                <strong>Baja emisión de gases: </strong>Estas SUV no recurren únicamente a su motor de combustión interna para generar tracción; sino que se alternan con el motor eléctrico. Por tal motivo la producción de huella de carbono de un vehículo híbrido será siempre menor en comparación a la de un vehículo dotado con motor tradicional.
                            </p>
                            <p>
                                <strong>Menor consumo de gasolina: </strong> Al funcionar también con corriente eléctrica, los dueños de un vehículo híbrido podrán despreocuparse de los grandes gastos en gasolina, lo cuál ayuda también a su bolsillo.
                            </p>
                            <p>
                                <strong>Conducción silenciosa: </strong> El sonido de un motor eléctrico es casi imperceptible. Por eso con los vehículos híbridos contribuimos también a la disminución de la contaminación auditiva presente en las calles.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Carros híbridos en Colombia ¿cuál elegir? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                <strong>Subaru: los más destacados carros híbridos en Colombia </strong>
                                Cuando de carros se trata, lo mejor es no dejarse llevar por nombres de marca o prestigios posiblemente obsoletos. Lo realmente importante es evaluar qué tienen estos vehículos para ofrecer, leer detenidamente las características, prestaciones, cualidades de los modelos y también la propuesta de valor que ofrece el fabricante; solo así podremos estar seguros de hacer una inversión segura y acertada. A continuación mostraremos qué tienen de especial nuestros carros híbridos y porqué son tan destacados.
                            </p>
                            <p>
                                <strong>Forester Híbrida: </strong>un carro que lo tiene todo
                                La nueva Forester Híbrida destaca no solo por su hermoso y elegante diseño, sino también por ofrecer lo más avanzado de la tecnología japonesa que un vehículo pueda tener. Cuenta con una potencia máxima de tracción AWD, sistemas de entretenimiento a bordo, espacio, confort y los más altos estándares de seguridad, como control dinámico y un sistema de frenos ABS.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section><!-- End F.A.Q Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>Subaru Colombia</h3>
                        <p class="pb-3"><em>Confidence in Motion.</em></p>
                        <p>
                            Av. Carrera 70 # 99A-00 <br>
                            Bogota, Colombia<br><br>
                            <strong>Telefono:</strong> +57 3057342081<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://twitter.com/SubaruColombia" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="https://www.facebook.com/subaruoficialcol" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/subaruoficialcol/" class="instagram"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Link</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">Inicio</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#caracteristicas">Acerca De</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#concurso">Característica</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#concurso"><span class="badge bg-warning text-dark">Concurso</span></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#faq">Preguntas frecuentes</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Nuestro boletín</h4>
                    <p>Suscríbete para estar al dia con nuestros lanzamientos</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Suscríbete">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            ©{{ date('Y') }} <a href="https://inxaitcorp.com/">INXAIT CORP. All rights reserved.</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('landingPage/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('landingPage/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('landingPage/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('landingPage/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('landingPage/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('landingPage/js/main.js') }}"></script>
</body>
</html>
