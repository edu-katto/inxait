<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Subaru</title>

    <!-- Favicons -->
    <link href="{{ asset('landingPage/img/favicon.png') }}" rel="icon">

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

    @livewireStyles
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
                    <h1>Lleg?? a colombia el nuevo <span>Subaru XV</span></h1>
                    <h2>Con nuevas mejorar y listo para que sea tuyo</h2>
                    <div class="text-center text-lg-start">
                        <a href="#acerca" class="btn-get-started scrollto">Acompa??ame en el recorrido</a>
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
                    <h3>VERSATIL Y CON UN DISE??O JUVENIL</h3>
                    <p>Lleva la diversi??n al siguiente nivel con nuestra Subaru XV, la SUV compacta de la marca. Con un estilo inspirado en los deportes, paragolpes delantero, parrilla delantera y marco de luz antiniebla, adem??s de llamativas llantas de aleaci??n."</p>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="ri-star-fill"></i></div>
                        <h4 class="title"><a href="">M??XIMA COMODIDAD</a></h4>
                        <p class="description">Experimente un interior excepcionalmente c??modo. Con un espacio amplio y asientos traseros reclinables disponibles, sus pasajeros pueden disfrutar un viaje c??modo.</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="ri-shield-fill"></i></div>
                        <h4 class="title"><a href="">SEGURIDAD</a></h4>
                        <p class="description">Todos los modelos cuentan con 7 airbags: frontales, laterales y de cortina para dar mayor protecci??n a todos los pasajeros.</p>
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
                        <h3><a href="">Transmici??n sim??trica</a></h3>
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

@yield('content')

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
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">??Qu?? es un SUV y por qu?? elegir este tipo de carros? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                        <p>
                            Muchas personas pueden preguntarse qu?? es un SUV cuando escuchan esta palabra por primera vez. Esto se debe a que en nuestro pa??s llamamos a este tipo de veh??culos como camionetas a nivel general. Es por ello que nos hemos tomado un tiempo para explicar detenidamente a qu?? se refiere este t??rmino exactamente y qu?? tiene de especial esta camioneta, la cual es una de las m??s solicitadas y vendidas a nivel mundial.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">??Cuelaes son las ventajas de tener un carro h??brido? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            <strong>Baja emisi??n de gases: </strong>Estas SUV no recurren ??nicamente a su motor de combusti??n interna para generar tracci??n; sino que se alternan con el motor el??ctrico. Por tal motivo la producci??n de huella de carbono de un veh??culo h??brido ser?? siempre menor en comparaci??n a la de un veh??culo dotado con motor tradicional.
                        </p>
                        <p>
                            <strong>Menor consumo de gasolina: </strong> Al funcionar tambi??n con corriente el??ctrica, los due??os de un veh??culo h??brido podr??n despreocuparse de los grandes gastos en gasolina, lo cu??l ayuda tambi??n a su bolsillo.
                        </p>
                        <p>
                            <strong>Conducci??n silenciosa: </strong> El sonido de un motor el??ctrico es casi imperceptible. Por eso con los veh??culos h??bridos contribuimos tambi??n a la disminuci??n de la contaminaci??n auditiva presente en las calles.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Carros h??bridos en Colombia ??cu??l elegir? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            <strong>Subaru: los m??s destacados carros h??bridos en Colombia </strong>
                            Cuando de carros se trata, lo mejor es no dejarse llevar por nombres de marca o prestigios posiblemente obsoletos. Lo realmente importante es evaluar qu?? tienen estos veh??culos para ofrecer, leer detenidamente las caracter??sticas, prestaciones, cualidades de los modelos y tambi??n la propuesta de valor que ofrece el fabricante; solo as?? podremos estar seguros de hacer una inversi??n segura y acertada. A continuaci??n mostraremos qu?? tienen de especial nuestros carros h??bridos y porqu?? son tan destacados.
                        </p>
                        <p>
                            <strong>Forester H??brida: </strong>un carro que lo tiene todo
                            La nueva Forester H??brida destaca no solo por su hermoso y elegante dise??o, sino tambi??n por ofrecer lo m??s avanzado de la tecnolog??a japonesa que un veh??culo pueda tener. Cuenta con una potencia m??xima de tracci??n AWD, sistemas de entretenimiento a bordo, espacio, confort y los m??s altos est??ndares de seguridad, como control din??mico y un sistema de frenos ABS.
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
                        <li><i class="bx bx-chevron-right"></i> <a href="#concurso">Caracter??stica</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#concurso"><span class="badge bg-warning text-dark">Concurso</span></a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#faq">Preguntas frecuentes</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Nuestro bolet??n</h4>
                    <p>Suscr??bete para estar al dia con nuestros lanzamientos</p>
                    <form>
                        <input type="email" name="email"><input type="submit" value="Suscr??bete">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            ??{{ date('Y') }} <a href="https://inxaitcorp.com/">INXAIT CORP. All rights reserved.</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<!-- Vendor JS Files -->
<script src="{{ asset('landingPage/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('landingPage/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('landingPage/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('landingPage/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('landingPage/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('landingPage/js/main.js') }}"></script>
@livewireScripts
</body>
</html>
