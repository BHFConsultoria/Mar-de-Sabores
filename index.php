<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mar de Sabores - O Portal dos Confeiteiros</title>

        <!-- CSS -->
        <link href="view/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="view/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="view/bootstrap/css/nivo-lightbox.css" rel="stylesheet" />
        <link href="view/bootstrap/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
        <link href="view/bootstrap/css/owl.carousel.css" rel="stylesheet" media="screen" />
        <link href="view/bootstrap/css/owl.theme.css" rel="stylesheet" media="screen" />	
        <link href="view/bootstrap/css/animate.css" rel="stylesheet" />
        <link href="view/bootstrap/css/style.css" rel="stylesheet">
        <link href="view/bootstrap/color/default.css" rel="stylesheet">
        <!-- JavaScript de Validações -->
        <script type="text/javascript" src="view/js/jquery-2.2.2.js"></script>
        <script type="text/javascript" src="view/js/index.js"></script>
    </head>

    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

        <!-- Section: intro -->
        <section id="intro" class="intro">
            <form id="contact-form-login" action="controller/login/login.php" method="POST">
                <input class="form-control-login" name="nmEmail" id="nmEmail" type="email" placeholder="Usuario" />
                <input class="form-control-login" name="dsSenha" id="dsSenha" type="password" placeholder="Senha" />
                <select id="tpUsuario" name="tpUsuario">
                    <option value="cliente">Cliente</option>
                    <option value="confeiteiro">Confeiteiro</option>
                    <select/>
                    <button type="submit" value="logar" name="acao" onclick="return verificaCampos()">Acessar</button>
                    <a href="view/confeiteiro/formConfeiteiro.php">Cadastra-se (Confeiteiro)</a>
                    <a href="view/cliente/cliente.php">Cadastra-se (Cliente)</a>
            </form>
            <div class="slogan">
                <a href="index.html"><img src="view/bootstrap/img/logo.png" alt="" /></a>
                <h3>Os melhores bolos e doces na sua casa!</h3>
                <form action="controller/confeiteiro/confeiteiro.php"> 
                    <div class="form-group">
                        <input type="text" class="" id="buscar" name="buscar" placeholder="" required="required"/>
                    </div>
                    <div class="form-group">   
                        <button type="submit" id="acao" name="acao" value="buscar">BUSCAR CONFEITEIROS</button>
                    </div> 
                </form>
                <h4></h4>
            </div>
            <div class="page-scroll">
                <a href="#gallery">
                    <i class="fa fa-angle-down fa-5x animated"></i>
                </a>
            </div>
        </section>


        <!-- Section: produtos index -->
        <section id="gallery" class="home-section text-center bg-gray">



            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12" >
                        <div class="wow bounceInUp" data-wow-delay="0.4s">
                            <div id="owl-works" class="owl-carousel">
                                <div class="item"><a href="view/bootstrap/img/gallery/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="view/bootstrap/img/gallery/1.jpg" class="img-responsive" alt="img"></a></div>
                                <div class="item"><a href="view/bootstrap/img/gallery/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="view/bootstrap/img/gallery/2.jpg" class="img-responsive " alt="img"></a></div>
                                <div class="item"><a href="view/bootstrap/img/gallery/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="view/bootstrap/img/gallery/3.jpg" class="img-responsive " alt="img"></a></div>
                                <div class="item"><a href="view/bootstrap/img/gallery/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="view/bootstrap/img/gallery/4.jpg" class="img-responsive " alt="img"></a></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section: produtos index -->

        <!-- Section: icones -->
        <section id="separator" class="home-section parallax text-center" data-stellar-background-ratio="0.5">

            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="align-center txt-shadow">
                            <div class="icon">
                                <img src="view/bootstrap/img/local.png">
                            </div>
                            <span class="color-white">Selecione sua <br><b>Cidade</b></span>

                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="align-center txt-shadow">
                            <div class="icon">
                                <img src="view/bootstrap/img/conf.png">
                            </div>
                            <span class="color-white">Escolha seu <br><b>Confeiteiro</b></span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="align-center txt-shadow">
                            <div class="icon">
                                <img src="view/bootstrap/img/produto.png">
                            </div>
                            <span class="color-white">Escolha seu <br><b>Produto</b></span>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3">
                        <div class="align-center txt-shadow">
                            <div class="icon">
                                <img src="view/bootstrap/img/data.png">
                            </div>
                            <span class="color-white">Agende uma data para <br><b>Entrega</b></span>
                        </div>
                    </div>
                </div>		
            </div>
        </section>
        <!-- /Section: icones -->

        <!-- Section: Newsletter -->
        <section id="about" class="home-section">


            <!-- COLOCAR O NEWSLETTER -->


        </section>
        <!-- /Section: Newsletter -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <p>&copy;Copyright 2016 . Mar de Sabores - O Portal do Confeiteiros</p>
                    </div>  
                </div>	
            </div>
        </footer>

        <!-- Core JavaScript Files -->
        <script src="view/bootstrap/js/jquery.min.js"></script>
        <script src="view/bootstrap/js/bootstrap.min.js"></script>
        <script src="view/bootstrap/js/jquery.easing.min.js"></script>	
        <script src="view/bootstrap/js/jquery.sticky.js"></script>
        <script src="view/bootstrap/js/jquery.scrollTo.js"></script>
        <script src="view/bootstrap/js/stellar.js"></script>
        <script src="view/bootstrap/js/wow.min.js"></script>
        <script src="view/bootstrap/js/owl.carousel.min.js"></script>
        <script src="view/bootstrap/js/nivo-lightbox.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="view/bootstrap/js/custom.js"></script>

    </body>

</html>
