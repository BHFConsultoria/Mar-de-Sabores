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
        
        <!-- Validações -->
        <script type="text/javascript" src="../js/jquery-2.2.2.js"></script>
        <script type="text/javascript" src="../js/funcoes.js"></script>

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

        <!-- Section: intro -->
        <section id="intro" class="intro-pages">
            <div id="navigation">
                <nav class="navbar navbar-custom" role="navigation">
                    <h4>Olá <?= $_SESSION['nome'] ?>, Seja bem vindo!</h4>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="formConfeiteiro.php?acao=alterar">Alterar Cadastro</a></li>
                            <li><a href="../../controller/confeiteiro/confeiteiroController.php?acao=desativar" onclick="return confirmarDesativarConta(); ">Desativar Cadastro</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../controller/login/login.php?acao=deslogar">SAIR</a></li>
                        </ul>
                    </div>         

                </nav>
            </div>
            <div class="slogan">
                <a href="../../index.php"><img src="../bootstrap/img/logo.png" alt="" /></a>
                <h3>Os melhores bolos e doces na sua casa!</h3>
            </div>
            </section>
<?php session_start(); ?>
    <table class="table-bordered">
        <tr>
            <td>Nome</td>
            <td>Email p/ contato</td>
            <td>Telefone p/ contato</td>
            <td>Celular p/ contato</td>
        </tr>
        <?php foreach($_SESSION['confeiteiros'] as $confeiteiro){ ?>
        <tr><?php if($confeiteiro['nm_situacao']!='D'){ ?>
            <td><?=$confeiteiro['nm_confeiteiro']?></td>
            <td><?=$confeiteiro['nm_email']?></td>
            <td><?=$confeiteiro['cd_telefone']?></td>
            <td><?=$confeiteiro['cd_celular']?></td>
        </tr><?php } ?>
        <?php } ?>
    </table>
<?php include 'rodape.php'; ?>
