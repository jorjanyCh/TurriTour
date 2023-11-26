<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nosotros</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
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



    <section class="bg-muted py-5">
        <div class="container">

            <div class="row align-items-center py-5">
                <div class="col-md-8">

                    <div class="text-success">
                        <h2>TurriTours</h2>
                    </div>
                    
                    <p>
                        TurriTours es una empresa que se enfoca en brindarte diferentes opciones de turismo en costa Rica,
                        especificamente en la zona de Turrialba. Turritours tiene como objetivo en dar a conocer las riqueza 
                        naturales y culturales de la zona de Turrialba, promover y aprovechar todas 
                        las opciones que ofrece esta zona del país.
                    </p>
                </div>
               

                <div class="row">
                    <div class="col-lg-4 m-auto shadow"> 
                        <div style="text-align: center; margin: 0 auto; max-width: 100%;">
                            <img src="assets/img/cafe.png"  alt="Volcano Turri"
                            style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                          </div>
                    </div>

                    <div class="col-lg-4 m-auto shadow"> 
                          <div style="text-align: center; margin: 0 auto; max-width: 100%; col-lg-6 m-auto">
                            <img src="assets/img/cafe.png"  alt="Volcano Turri"
                            style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                          </div>
                    </div>

                    <div class="col-lg-4 m-auto shadow"> 
                        <div style="text-align: center; margin: 0 auto; max-width: 100%; col-lg-6 m-auto">
                          <img src="assets/img/cafe.png"  alt="Volcano Turri"
                          style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                        </div>
                  </div>
                </div>
            </div>


                                        {{-- #2 Colaboraciones con locales --}}


             <div class="row align-items-center py-5">
                <div class="col-md-8 text-dark">
                    <div class="text-success">
                        <h2>Colaboración con negocios locales</h2>
                    </div>
                    
                    <p>
                        TurriTours apoya los emprendimientos locales con el fin de poder aportar a la economia 
                        de esta zona del país, dichas colaboraciones se dará con restaurantes o sodas locales, también 
                        con tiendas de Souvenirs meramentes locales para que el turista se pueda llevar 
                        un recuerdo cuando visita el lugar.
                    </p>
                </div>
                {{-- <div class="col-md-4">
                    <img src=alt="About Turri">
                </div> --}}

                <div class="row">
                    <div class="col-lg-4 m-auto shadow"> 
                        <div style="text-align: center; margin: 0 auto; max-width: 100%;">
                            <img src="assets/img/vturri.png"  alt="Volcano Turri"
                            style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                          </div>
                    </div>

                    <div class="col-lg-4 m-auto shadow"> 
                          <div style="text-align: center; margin: 0 auto; max-width: 100%; col-lg-6 m-auto">
                            <img src="assets/img/vturri.png"  alt="Volcano Turri"
                            style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                          </div>
                    </div>

                    <div class="col-lg-4 m-auto shadow"> 
                        <div style="text-align: center; margin: 0 auto; max-width: 100%; col-lg-6 m-auto">
                          <img src="assets/img/vturri.png"  alt="Volcano Turri"
                          style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                        </div>
                  </div>
                </div>
            </div>

               {{-- #3 Otro paraffo --}}


               <div class="row align-items-center py-5">
                <div class="col-md-8 text-dark">


                    <div class="text-success">
                        <h2>Más...</h2>
                    </div>
                    
                    <p>
                        TurriTours apoya los emprendimientos locales con el fin de poder aportar a la economia 
                        de esta zona del país, dichas colaboraciones se dará con restaurantes o sodas locales, también 
                        con tiendas de Souvenirs meramentes locales para que el turista se pueda llevar 
                        un recuerdo cuando visita el lugar.
                    </p>
                </div>
                {{-- <div class="col-md-4">
                    <img src=alt="About Turri">
                </div> --}}

                <div class="row">
                    <div class="col-lg-4 m-auto shadow"> 
                        <div style="text-align: center; margin: 0 auto; max-width: 100%;">
                            <img src="assets/img/queso.png"  alt="Volcano Turri"
                            style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                          </div>
                    </div>

                    <div class="col-lg-4 m-auto shadow"> 
                          <div style="text-align: center; margin: 0 auto; max-width: 100%; col-lg-6 m-auto">
                            <img src="assets/img/queso.png"  alt="Volcano Turri"
                            style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                          </div>
                    </div>

                    <div class="col-lg-4 m-auto shadow"> 
                        <div style="text-align: center; margin: 0 auto; max-width: 100%; col-lg-6 m-auto">
                          <img src="assets/img/queso.png"  alt="Volcano Turri"
                          style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                        </div>
                  </div>


                </div>
            </div>



           


                     {{-- END DE PARRAFOS ACERCA DE NOSOTROS--}}


            
        </div>  {{-- Termona container no borrar --}}
    </section>





    <!-- Inicio codigo copiado-->




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
                            <img class="img-fluid" src="./assets/img/Nature.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>TurriTour</b> 
                                    <br>
                                <h3 class="h3">Ven y conectate con la naturaleza</h3>
                                <p>
                                    TurriTour Aliquam tristique nunc at semper dignissim. (beta 1). 
                                    In quis tortor eget magna faucibus rutrum. <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">link1</a> website. 
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
                                <h1 class="h1">Proident occaecat</h1>
                                <h3 class="h2">Aliquip ex ea commodo consequat</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
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
                                <h1 class="h1">Repr in voluptate</h1>
                                <h3 class="h2">Ullamco laboris nisi ut </h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites. 
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

<!--  close codigo copiado-->

    
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Actividades que podes hacer nosotros</h1>
                <p>
                    Contamos con una gran variedad de actividades para que puedas disfrutar y conocer de lo hermoso que es este lugar en Costa Rica.
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Delivery Services</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Shipping & Return</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center">Promotion</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">

                    <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                    
                    <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
                </div>
            </div> 



        </div>
    </section>
    <!-- End Section -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Sitios</h1>
                    <p>
                       Podes visitar estos sitios asombrosos
                    </p>
                </div>
                <div class="col-lg-12 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><i class="fa fa-map" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/bote.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/queso.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/1tourss.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/1tourss.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/1tourss.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/1tourss.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/volcano.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/volcano.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/volcano.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/volcano.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->


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