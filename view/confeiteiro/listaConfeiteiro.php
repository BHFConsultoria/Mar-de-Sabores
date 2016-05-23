<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mar de Sabores - O Portal dos Confeiteiros</title>

        <!-- CSS -->
        <link href="/Mar-de-Sabores/Mar-de-Sabores/view/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/Mar-de-Sabores/Mar-de-Sabores/view/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/Mar-de-Sabores/Mar-de-Sabores/view/bootstrap/css/nivo-lightbox.css" rel="stylesheet" />
        <link href="/Mar-de-Sabores/Mar-de-Sabores/view/bootstrap/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
        <link href="/Mar-de-Sabores/Mar-de-Sabores/view/bootstrap/css/owl.carousel.css" rel="stylesheet" media="screen" />
        <link href="/Mar-de-Sabores/Mar-de-Sabores/view/bootstrap/css/owl.theme.css" rel="stylesheet" media="screen" />	
        <link href="/Mar-de-Sabores/Mar-de-Sabores/view/bootstrap/css/animate.css" rel="stylesheet" />
        <link href="/Mar-de-Sabores/Mar-de-Sabores/view/bootstrap/css/style.css" rel="stylesheet">
        <link href="/Mar-de-Sabores/Mar-de-Sabores/view/bootstrap/color/default.css" rel="stylesheet">

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
                            <li><a href="../confeiteiro/formConfeiteiro.php?acao=alterar">Alterar Cadastro</a></li>
                            <li><a href="../../controller/confeiteiro/confeiteiroController.php?acao=desativar">Desativar Cadastro</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../../controller/login/login.php?acao=deslogar">SAIR</a></li>
                        </ul>
                    </div>         

                </nav>
            </div>
            <div class="slogan">
                <a href="/Mar-de-Sabores/index.php"><img src="/Mar-de-Sabores/Mar-de-Sabores/view/bootstrap/img/logo.png" alt="" /></a>
                <h3>Os melhores bolos e doces na sua casa!</h3>
            </div>
    <table class="table-bordered">
        <tr>
            <td>Nome</td>
            <td>Email p/ contato</td>
        </tr>
        <?php foreach($confeiteiros as $confeiteiro){ ?>
        <tr><?php if($confeiteiro['nm_situacao']!='D'){ ?>
            <td><?=$confeiteiro['nm_confeiteiro']?></td>
            <td><?=$confeiteiro['nm_email']?></td>
        </tr><?php } ?>
        <?php } ?>
    </table>
</html>
