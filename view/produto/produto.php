<?php 
include_once '../../controller/produto/produtoController.php';
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
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/css/nivo-lightbox.css" rel="stylesheet" />
        <link href="../bootstrap/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
        <link href="../bootstrap/css/owl.carousel.css" rel="stylesheet" media="screen" />
        <link href="../bootstrap/css/owl.theme.css" rel="stylesheet" media="screen" />	
        <link href="../bootstrap/css/animate.css" rel="stylesheet" />
        <link href="../bootstrap/css/style.css" rel="stylesheet">
        <link href="../bootstrap/color/default.css" rel="stylesheet">
        

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

        <!-- Section: intro -->
        <section id="intro" class="intro-pages">
            <h4>Olá <?= $_SESSION['nome'] ?>, Seja bem vindo!</h4>

            <div class="slogan">
                <a href="index.html"><img src="../bootstrap/img/logo.png" alt="" /></a>
                <h3>Os melhores bolos e doces na sua casa!</h3>
            </div>
            <div class="page-scroll">
                <a href="#about">
                    <i class="fa fa-angle-down fa-5x animated"></i>
                </a>
            </div>
        </section>
        <!-- /Section: intro -->
        <!-- Section: Area produto -->
        <section id="contact" class="home-section text-center">
            <div class="heading-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-offset-2">

                            <div class="section-heading">
                                <div class="wow bounceInDown" data-wow-delay="0.4s">
                                    <h3>cadastro de produtos</h3>
                                </div>
                                <!--FLAVIA COMENTOU p class="wow lightSpeedIn" data-wow-delay="0.3s">Em poucos minutos você fazerá parte de nossa rede.</p-->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-offset-2">
                        <div class="form-wrapper marginbot-50">
                        <form id="contact-form">
                            <div class="row">
                            <div class="col-lg-8 col-md-8">
                            <div class="form-group">
            
                                        <!-- FORMULÁRIO DE CADASTRO DE PRODUTO -->
            
                            <input type="text" class="form-control" id="nmProduto" value="<?=$_SESSION['nome']?>"name="nmProduto" placeholder="Produto" title="Aqui é o nome do produto" required="required"/>
                            </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <select class="form-control" id="nmCategoria" name="nmCategoria">
                                    <option>Doce</option>
                                    <option>Salgado</option>
                                </select>
                            </div>
                            </div>        
                            
                            <div class="row">
                            <div class="col-lg-8 col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nmTipoProduto" name="nmTipoProduto" value="<?=$_SESSION['nmTipoProduto']?>" placeholder="Tipo do Produto" title="Aqui é o Tipo do Produto - Se é Bolo ou Torta" required="required"/>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-8 col-md-8">
                            <div class="form-group">
                            <input type="text" class="form-control" id="vlProduto" name="vlProduto" value="<?=$_SESSION['vlProduto']?>" placeholder="Valor" title="Aqui é o valor do Produto" required="required"/>
                            </div>
                            </div> 
                            </div>
                            <div class="row">
                            <div class="col-lg-8 col-md-8">
                            <div class="form-group">
                            <textarea type="text" class="form-control" id="dsProduto" name="dsProduto" rows="10" cols="50" value="<?=$_SESSION['dsProduto']?>" placeholder="Descrição do Produto" title="Aqui é a Descrição do Produto" required="required">
                            </textarea>
                            </div>
                            </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                            <div class="form-group">
                            Imagem do Produto:<input type="file" name="imProduto"/>
                            </div>
                            </div>
                                    <?php if($_SESSION['acao'] == 'alterarDados'){ ?>
                                    <button type="submit" class="btn btn-skin btn-block" id="acao" name="acao" value="alterar">Alterar</button>
                                    <?php }else{ ?>
                                    <button type="submit" class="btn btn-skin btn-block" id="acao" name="acao" value="cadastrar">Cadastrar</button>
                                    <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            
            <br>
            
            
            <!-- /Section: Formulario PF -->

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
        <script src="../bootstrap/js/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../bootstrap/js/jquery.easing.min.js"></script>	
        <script src="../bootstrap/js/jquery.sticky.js"></script>
        <script src="../bootstrap/js/jquery.scrollTo.js"></script>
        <script src="../bootstrap/js/stellar.js"></script>
        <script src="../bootstrap/js/wow.min.js"></script>
        <script src="../bootstrap/js/owl.carousel.min.js"></script>
        <script src="../bootstrap/js/nivo-lightbox.min.js"></script>

        <script src="../bootstrap/js/custom.js"></script>

    </body>

</html>

            