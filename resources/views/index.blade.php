<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png"> 
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    {{-- {{ $user }} --}}
    <!-- Start Top Nav -->
   @include('partes.nav')
    <!-- Close Top Nav -->


    <!-- Header -->
    @include('partes.head')
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/b1.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>TurriTour</b> Portal de Viajes:</h1>
                                {{-- <h3 class="h2">Sobre Turrialba</h3> --}}
                                <p>
                                    Turrialba, ubicada en la provincia de Cartago, es una joya escondida en el corazón de Costa Rica que atrae a los amantes de la naturaleza y la aventura. Conocida por su impresionante entorno natural y su rica herencia cultural, esta región ofrece a los visitantes una experiencia única y auténtica. <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">link1</a> website. 
                                    Image credits go to <a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank">link2</a>,
                                    <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">link3</a> and
                                    <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">link4</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/b2.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                {{-- <h1 class="h1">Proident occaecat</h1> --}}
                                <h3 class="h2">Sobre el Turismo de la zona</h3>
                                <p>
                                    El turismo en Turrialba se destaca por su enfoque en el ecoturismo y el turismo de aventura. Los majestuosos paisajes que rodean la ciudad, dominados por el imponente volcán Turrialba, brindan oportunidades inigualables para practicar actividades al aire libre. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/b3.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                {{-- <h1 class="h1">Repr in voluptate</h1> --}}
                                <h3 class="h2">Sobre el Turismo de la zona</h3>
                                <p>
                                    Emocionantes excursiones de senderismo hasta apasionantes recorridos en kayak por el río Pacuare, los visitantes pueden sumergirse en la belleza natural mientras disfrutan de una dosis saludable de adrenalina.
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5"> 
        <div class="row text-center pt-4">
            <div class="col-lg-8 m-auto">
                <h3 class="h2">Turrialba un destino turístico completo</h3>
                    <p class="text-left">
                    Turrialba, ubicada en la provincia de Cartago, es una joya escondida en el corazón de Costa Rica que atrae a los amantes de la naturaleza y la aventura. 
                    Conocida por su impresionante entorno natural y su rica herencia cultural, esta región ofrece a los visitantes una experiencia única y auténtica.
                </p>
                    <p class="text-left">
                    El turismo en Turrialba se destaca por su enfoque en el ecoturismo y el turismo de aventura. Los majestuosos paisajes que rodean la ciudad, dominados por el imponente volcán Turrialba, 
                    brindan oportunidades inigualables para practicar actividades al aire libre. Desde emocionantes excursiones de senderismo hasta apasionantes recorridos en kayak por el río Pacuare, 
                    los visitantes pueden sumergirse en la belleza natural mientras disfrutan de una dosis saludable de adrenalina.
                </p>
                    <p class="text-left">   
                    El volcán Turrialba, aunque activo, ofrece fascinantes oportunidades para la observación de aves y la exploración de su entorno. Los amantes de la ecología disfrutarán 
                    de la diversidad de flora y fauna que caracteriza a la región, mientras que los aventureros pueden optar por descender por sus laderas en una experiencia de rappel única.
                </p>
                    <p class="text-left">
                    Además de su entorno natural, Turrialba también alberga tesoros culturales. El centro histórico cuenta con encantadoras iglesias coloniales y coloridos mercados locales donde los visitantes 
                    pueden sumergirse en la autenticidad de la vida costarricense. La hospitalidad de la gente local y su rica tradición agrícola también contribuyen a la experiencia cultural única que ofrece Turrialba.
                </p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-12 m-auto">
                    <h1 class="h2">Sobre nuestros planes</h1>
                    <p class="text-align-left">
                        En TurriTour, no solo te ofrecemos planes de viaje; te ofrecemos la oportunidad de crear recuerdos inolvidables. 
                        Empieza a planificar tu próximo viaje con nosotros y descubre un mundo de posibilidades. 
                        ¡Gracias por considerarnos como tu compañero de viaje!
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{url('p1')}}">
                            <img src="./assets/img/para1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    {{-- <i class="text-warning fa fa-star"></i> 
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>--}}
                                </li>
                                <li class="text-muted text-right">₡62500</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Turri en las alturas
                            </a>
                            <p class="card-text">
                                Volcán Turrialba, parapente, monumento guayabo, transporte 
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{url('p2')}}">
                            <img src="./assets/img/tc1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">₡25500</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Turri complete</a>
                            <p class="card-text">
                                Volcán Turrialba, cataratas, tour lechero, transporte
                            </p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{url('p3')}}">
                            <img src="./assets/img/Amoj1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">₡47500</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Una aventura mojada al extremo</a>
                            <p class="card-text">
                                Catarata, Rafting, transporte
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{url('p4')}}">
                            <img src="./assets/img/tl2.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">₡62000</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Vuelo lechero</a>
                            <p class="card-text">
                                Tour lechero, parapente, transporte
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="{{url('p5')}}">
                            <img src="./assets/img/r1.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">₡46000</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Guayabo Raft</a>
                            <p class="card-text">
                                Monumento guayabo, rafting, transporte
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    @include('partes.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>