<?php
include_once '../../controller/produto/produto.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
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
            <div class="slogan">
                <a href="index.html"><img src="../img/logo.png" alt="" /></a>
                <h3>Os melhores bolos e doces na sua casa!</h3>
            </div>
            <div class="page-scroll">
                <a href="#about">
                    <i class="fa fa-angle-down fa-5x animated"></i>
                </a>
            </div>   
        </section>
        <section id="produto" class="home-section text-center">    
            <div class="heading-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-offset-2">

                            <div class="section-heading">
                                <div class="wow bounceInDown" data-wow-delay="0.4s">
                                    <h2>Controle de Produto</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row">
                    <div class="col-lg-8 col-md-offset-2">
                        <div class="form-wrapper marginbot-50">
                            <form action="../../controller/produto/produtoController.php" method="POST">
                                <div class="row">

                                    <div class="col-lg-2 col-md-2">
                                        <div class="form-group">
                                            Produto
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1">
                                        <div class="form-group">
                                            Valor
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="form-group">
                                            Descrição
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1">
                                        <div class="form-group">
                                            Tipo do Produto
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1">
                                        <div class="form-group">
                                            Situação do Produto
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3">
                                        <div class="form-group">
                                            Ações
                                        </div>
                                    </div>      
                                </div>    
                                <!-------------------------------------------------- -->   
                                <div class="row">
                                    <?php foreach ($produtos as $produto) { ?>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="form-group">
                                                <?= $produto['nm_produto'] ?>    
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1">
                                            <div class="form-group">
                                                <?= $produto['vl_produto'] ?>    
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group">
                                                <?= $produto['ds_produto'] ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1">
                                            <div class="form-group">
                                                <?= $produto['nm_tipo_produto'] ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2">
                                            <div class="form-group">
                                                <?= $produto['nm_situacao'] ?>
                                            </div>
                                        </div>
                                         
                                    <div class="col-lg-1 col-md-1">
                                            <div class="form-group">
                                                <form action="../../controller/produto/produtoController.php" method="POST">
                                                    <input type="hidden" name="acao" value="alterarDados"/>
                                                    <input type="hidden" name="cdProduto" value="<?= $produto['cd_produto'] ?>"/>
                                                    <button class="btn btn-danger">Alterar</button>

                                                </form>
                                            </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1">
                                            <div class="form-group">
                                                <form action="../../controller/produto/produtoController.php" method="POST">
                                                    <input type="hidden" name="acao" value="deletar"/>
                                                    <input type="hidden" name="cdProduto" value="<?= $produto['cd_produto'] ?>"/>
                                                    <button class="btn btn-danger">Remover</button>

                                                </form>
                                            </div>
                                        </div>
                                    <div class="col-lg-1 col-md-1">
                                            <div class="form-group">
                                                <form action="../../controller/produto/produtoController.php" method="POST">
                                                    <input type="hidden" name="acao" value="desativar"/>
                                                    <input type="hidden" name="cdProduto" value="<?= $produto['cd_produto'] ?>"/>
                                                    <button class="btn btn-danger">Desativar</button>

                                                </form>
                                            </div>
                                        </div>
                                        </div>      
                              

                                <?php } ?>
                            </section>       
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


