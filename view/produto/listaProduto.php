<?php
include_once '../../controller/produto/produto.php';
?>
<?php session_start() ?>
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
            <h4>Olá <?= $_SESSION['nome'] ?>, Seja bem vindo!</h4>
            <div class="btn-group ">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="../confeiteiro/confeiteiro.php?acao=alterar">Alterar Cadastro</a></li>
                    <li><a href="#">Desativar Cadastro</a></li>
                    <li><a href="../produto/listaProduto.php">Meus Produto</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">SAIR</a></li>
                </ul>
            </div>
            <div class="slogan">
                <a href="index.html"><img src="../bootstrap/img/logo.png" alt="" /></a>
                <h3>Os melhores bolos e doces na sua casa!</h3>
            </div>

        </section>
        <section id="produto" class="home-section text-center">    
            <div class="heading-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-offset-2">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <h2>Controle de Produto</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- <table class="table table-striped">  NOVO CÓDIGO DE TABELA      -->
                <table width="100%" style="margin: auto;" class="fonte alturaTabela table-responsive table-hover table-striped">
                    <thead>

                    <th style=" text-align:center; ">Produto</th>
                    <th style=" text-align:center; ">Valor</th>    
                    <th style=" text-align:center; ">Descrição</th>     
                    <th style=" text-align:center; ">Tipo</th>  
                    <th style=" text-align:center; ">Situação</th>    
                    <th style=" text-align:center; ">Ações</th>     
                    </thead>
                    <tbody>
                        <?php foreach ($produtos as $produto) { ?>
                            <tr> 
                                <td> <?= $produto['nm_produto'] ?></td>     
                                <td> R$ <?= $produto['vl_produto'] ?></td>  
                                <td> <?= $produto['ds_produto'] ?></td> 
                                <td> <?= $produto['nm_tipo_produto'] ?></td> 
                                <td> <?= $produto['nm_situacao'] ?></td> 
                            </tr>
                            <tr>
                                <td>  
                                    <form action="../../controller/produto/produtoController.php" method="POST">

                                        <input type="hidden" name="acao" value="alterarDados"/>
                                        <input type="hidden" name="cdProduto" value="<?= $produto['cd_produto'] ?>"/>
                                        <button class="btn btn-primary" >Alterar</button>
                                    </form>
                                    
                                    <form action="../../controller/produto/produtoController.php" method="POST">
                                    <input type="hidden" name="acao" value="deletar"/>
                                    <input type="hidden" name="cdProduto" value="<?= $produto['cd_produto'] ?>"/>
                                    <button class="btn btn-danger">Remover</button>  
                                    </form>
                                    
                                    <form action="../../controller/produto/produtoController.php" method="POST">
                                    <input type="hidden" name="acao" value="desativar"/>
                                    <input type="hidden" name="cdProduto" value="<?= $produto['cd_produto'] ?>"/>
                                    <button class="btn btn-danger">Desativar</button>
                                    </form>

                                    <?php echo $produto['cd_produto']; ?>
                                <?php } ?>
                                </form></td> 
                        </tr>         
                    </tbody>
                </table>       

                <!-- </table> -->
            </div> 
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


