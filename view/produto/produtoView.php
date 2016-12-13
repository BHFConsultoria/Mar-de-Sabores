<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/cabecalho.php'; ?>

<section id="intro" class="intro-pages">
    <h4>Olá <?= $_SESSION['nome'] ?>, Seja bem vindo!</h4>
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <?php if ($_SESSION['tpUsuario'] == 'cliente') { ?>
                        <li><a href="../cliente/formCliente.php?acao=alterar">Alterar Cadastro</a></li>
                        <li><a href="../../controller/cliente/clienteController.php?acao=desativar" onclick="return confirmarDesativarConta();">Desativar Cadastro</a></li>
                    <?php } else { ?>
                        <li><a href="../confeiteiro/formConfeiteiro.php?acao=alterar">Alterar Cadastro</a></li>
                        <li><a href="../../controller/confeiteiro/confeiteiroController.php??acao=desativar" onclick="return confirmarDesativarConta();">Desativar Cadastro</a></li>                           
                    <?php } ?>
                    <li role="separator" class="divider"></li>
                    <li><a href="../../controller/login/login.php?acao=deslogar">SAIR</a></li>
                </ul>
            </div>         
        </nav>
    </div>
    <div class="slogan">
        <?php if ($_SESSION['tpUsuario'] == 'cliente') { ?>
            <a href="../cliente/indexCliente.php"><img src="../bootstrap/img/logo.png" alt="" /></a>
            <h3>Cliente</h3>
        <?php } else { ?>
            <br>
            <a href="../confeiteiro/indexConfeiteiro.php"><img src="../bootstrap/img/logo.png" alt="" /></a>
            <h3>Confeiteiro</h3>
        <?php } ?>
    </div>
</section>
<section id="produto" class="home-section text-left">
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-offset-2">
                    <div class="section-heading">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <!--<h2>Produtos</h2>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="produto">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                
                    <img style="width:500px;height:300px" src="<?php echo $_POST['imgProduto']; ?>">
            </div>	
            <div class="col-lg-4 col-md-4" id="">
                <h2 class="text-center"><?php echo $_POST['nmProduto'] ?> </h2>
                <p>
                    Código do Produto: <?php echo $_POST['cdProduto'] ?><br>
                    Categoria: <?php echo $_POST['nmTipoProduto'] ?><br>
                    <b>Valor: R$ <?php echo $_POST['vlProduto'] ?></b>
                </p>
                <p><b>Formas de Pagamento</b></p>
                <img src="../../view/bootstrap/img/bandeiras.jpg">

                <form action="../../controller/pedido/pedidoController.php" method="POST">
                    <input type="hidden" name="cdProduto" value="<?= $_POST['cdProduto'] ?>"/>
                    <input type="hidden" name="cdConfeiteiro" value="<?= $_POST['cdConfeiteiro'] ?>"/>
                    <input type="hidden" name="cdCliente" value="<?= $_SESSION['codigo'] ?>"
                           <!-- ---------------------------------- -->
                           <button type="submit" name="acao" value="cadastrar">Encomendar produto</button> 
                </form>
            </div>	
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <p>
                    <b>Descrição do Produto</b><br>
                    <?php echo $_POST['dsProduto'] ?>
                </p>
            </div>	
        </div>
    </div>
</section>

