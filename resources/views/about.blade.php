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
                        <h2>¿Quiénes somos?</h2>
                    </div>
                    
                    <p>
                        TurriTours es una empresa que se enfoca en brindarte diferentes opciones de turismo en Costa Rica,
                        específicamente en la zona de Turrialba. TurriTours tiene como objetivo dar a conocer las riquezas
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
                            <img src="assets/img/women.png"  alt="Volcano Turri"
                            style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                          </div>
                    </div>

                    <div class="col-lg-4 m-auto shadow"> 
                        <div style="text-align: center; margin: 0 auto; max-width: 100%; col-lg-6 m-auto">
                          <img src="assets/img/esencia.png"  alt="Volcano Turri"
                          style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                        </div>
                  </div>
                </div>
            </div>


                                        {{-- #2 Colaboraciones con locales --}}


             <div class="row align-items-center py-5">
                <div class="col-md-8 text-dark">
                    <div class="text-success">
                        <h2>Promoción de negocios locales</h2>
                    </div>
                    
                    <p>
                        TurriTours apoya los emprendimientos locales con el fin de poder aportar a la economia 
                        de esta zona del país, dichas colaboraciones se dará con restaurantes o sodas locales, también 
                        con tiendas de Souvenirs meramentes locales para que el turista se pueda llevar 
                        un recuerdo cuando visita el lugar.
                    </p>
                </div>
                
                <div class="row">
                    <div class="col-lg-4 m-auto shadow"> 
                        <div style="text-align: center; margin: 0 auto; max-width: 100%;">
                            <img src="assets/img/s3.png"  alt="Volcano Turri"
                            style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                          </div>
                    </div>

                    <div class="col-lg-4 m-auto shadow"> 
                          <div style="text-align: center; margin: 0 auto; max-width: 100%; col-lg-6 m-auto">
                            <img src="assets/img/s2.png"  alt="Volcano Turri"
                            style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                          </div>
                    </div>

                    <div class="col-lg-4 m-auto shadow"> 
                        <div style="text-align: center; margin: 0 auto; max-width: 100%; col-lg-6 m-auto">
                          <img src="assets/img/s1.png"  alt="Volcano Turri"
                          style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                        </div>
                  </div>
                </div>
            </div>

               {{-- #3 Otro paraffo --}}


               <div class="row align-items-center py-5">
                <div class="col-md-8 text-dark">


                    <div class="text-success">
                        <h2>Turismo Local</h2>
                    </div>
                    
                    <p>
                        Ante la evolución del turista que adopta un perfil cada vez más digital, es recomendable que los municipios
                         dispongan de propuestas digitales para atraer al turista.

                       En caso de los turistas locales, existe la posibilidad de que ya conozcan el municipio. Por esto, es necesario
                        encontrar nuevos atractivos turísticos que inviten a repetir la visita y re-descubrir su patrimonio, cultura 
                        o entorno natural. 
                    </p>
                </div>
                {{-- <div class="col-md-4">
                    <img src=alt="About Turri">
                </div> --}}

                <div class="row">
                    <div class="col-lg-4 m-auto shadow"> 
                        <div style="text-align: center; margin: 0 auto; max-width: 100%;">
                            <img src="assets/img/t1.png"  alt="Volcano Turri"
                            style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                          </div>
                    </div>

                    <div class="col-lg-4 m-auto shadow"> 
                          <div style="text-align: center; margin: 0 auto; max-width: 100%; col-lg-6 m-auto">
                            <img src="assets/img/t2.png"  alt="Volcano Turri"
                            style="max-width: 100%; height: auto; display: block; margin: 0 auto;">
                          </div>
                    </div>

                    <div class="col-lg-4 m-auto shadow"> 
                        <div style="text-align: center; margin: 0 auto; max-width: 100%; col-lg-6 m-auto">
                          <img src="assets/img/t3.png"  alt="Volcano Turri"
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
                            <img class="img-fluid" src="./assets/img/welcome.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>TurriTours</b> 
                                    <br>
                                <h3 class="h3">Ven y conectate con la naturaleza</h3>
                                <p>
                                    TurriTour te conecta con nuestra naturaleza, podemos rajar que tenemos el 6 % de Biodiversidad del mundo.
                                     <a rel="sponsored" class="text-success" href="https://www.youtube.com/watch?v=LXb3EKWsInQ" target="_blank">Costa Rica 4K</a> 
                                     <a rel="sponsored" class="text-success" href="https://www.youtube.com/watch?v=lukhHCnnjqI" target="_blank">Volcan Turrialba</a>

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
                                <h1 class="h1">Vistamiento de Aves </h1>
                                <h3 class="h2">Según datos del ICT en Costa Rica existen más de 900 especies de aves registradas</h3>
                                <p>
                                    Más de 800 especies de aves permanecen todo el año en territorio nacional, ocupando diversos ecosistemas en las zonas de vida del país 
                                    <a rel="sponsored" class="text-success" href="https://www.muniturrialba.go.cr/docs/turismo/Guia%20de%20Aves%20de%20Turrialba%202020.pdf" target="_blank">Aves de Costa Rica</a>,
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/lechero.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Aprendamos juntos!!</h1>
                                <h3 class="h2">Tour Lechero</h3>
                                <p>
                                    Conocerás todo el proceso de producción de queso sostenible; desde 
                                    las razas de vacas adecuadas para la leche, su alimentación, el proceso para el ordeño de las vacas, 
                                    hasta cómo procesar la leche y por supuesto, degustar este delicioso queso.
                                    <a rel="sponsored" class="text-success" href="https://www.youtube.com/watch?v=HY8zQ-btBew" target="Tour lechero">TOUR A UNA GRANJA LECHERA</a>
                                </p>

                                <div class="contenedor-imagenes">
                                    <img src="./assets/img/muu.png" alt="vaca lechera">
                                    <img src="./assets/img/ordeño.png" alt="ordeño">
                                    <img src="./assets/img/queso.png" alt="queso turrialba">
                                    <img src="./assets/img/lechero.png" alt="ato de vacas">
                                    
                                </div>
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
                <h1 class="h1">Actividades que podes hacer con nosotros</h1>
                <p>
                    Contamos con una gran variedad de actividades para que puedas disfrutar y conocer de lo hermoso que es este lugar en Costa Rica.
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><a href="#"><img class="img-fluid brand-img" src="assets/img/Parapente.png" alt="Brand Logo"></a>
                    </div>
                    <h2 class="h5 mt-4 text-center">Parapente</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><a href="#"><img class="img-fluid brand-img" src="assets/img/Rafting.png" alt="Brand Logo"></a>
                    </div>
                    <h2 class="h5 mt-4 text-center">Rafting</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><a href="#"><img class="img-fluid brand-img" src="assets/img/hqueso.png" alt="Brand Logo"></a>
                    </div>
                    <h2 class="h5 mt-4 text-center">Tour lechero</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">

                    <div class="h1 text-success text-center">
                        <a href="#"><img class="img-fluid brand-img" src="assets/img/welcome.png" alt="Brand Logo"></a>
                    </div>
                    <h2 class="h5 mt-4 text-center">Caminata al volcán</h2>
                </div>
            </div> 



        </div>
    </section>
    <!-- End Section -->

    {{-- <!-- Start Brands -->
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
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/hqueso.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/hqueso.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/bote.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="assets/img/hqueso.png" alt="Brand Logo"></a>
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
                                    {{-- <div class="carousel-item">
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
                                    </div> --}}
                                    <!--End Third slide-->

                                {{-- </div>
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
    </section> --}} 
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