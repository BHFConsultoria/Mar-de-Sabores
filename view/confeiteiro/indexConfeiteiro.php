<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/cabecalho.php'; ?>

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
                    <?php if ($_SESSION['tpUsuario'] == 'cliente') { ?> 
                        <li><a href="../cliente/formCliente.php?acao=alterar">Alterar Cadastro</a></li>
                        <li><a href="../../controller/cliente/clienteController.php?acao=desativar" onclick="return confirmarDesativarConta();
                               ">Desativar Cadastro</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../../controller/login/login.php?acao=deslogar">SAIR</a></li>
                    <?php } else { ?>
                        <li><a href="../confeiteiro/formConfeiteiro.php?acao=alterar">Alterar Cadastro</a></li>
                        <li><a href="../../controller/confeiteiro/clienteController.php?acao=desativar" onclick="return confirmarDesativarConta();
                               ">Desativar Cadastro</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../../controller/login/login.php?acao=deslogar">SAIR</a></li>
                    <?php } ?>
                </ul>
            </div>         

        </nav>
    </div>
    <div class="slogan">
        <?php if ($_SESSION['tpUsuario'] == 'cliente') { ?> 
            <a href="../cliente/indexCliente.php"><img src="../bootstrap/img/logo.png" alt="" /></a>
        <?php } else { ?> 
            <a href="../confeiteiro/indexConfeiteiro.php"><img src="../bootstrap/img/logo.png" alt="" /></a>
        <?php } ?> 
        <h3>Os melhores bolos e doces na sua casa!</h3>
    </div>
</section>
<section id="about" class="home-section">
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="nav navbar-nav">
                                <li><a href="../produto/produto.php">[Cadastrar produto]</a></li>
                                <li><a href="../produto/listaProduto.php">[Alterar produto]</a></li>  
                                <!--li><a href="../produto/listaProduto.php">[Deletar produto]</a></li-->
                                <li><a href="../pedido/indexPedido.php">[Pedidos]</a></li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div> 
</section>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/rodape.php'; ?>
