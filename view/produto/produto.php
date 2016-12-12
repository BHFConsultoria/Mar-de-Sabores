<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/marDeSabores/marDeSabores/view/cabecalho.php'; ?>
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
<section id="contact" class="home-section text-center">
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-offset-0">                   
                    <?php if (isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'carregaProduto') { ?>
                        <div class="section-heading">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <h2>alterar produto</h2>
                            </div>
                            <p class="wow lightSpeedIn" data-wow-delay="0.3s">Atualize seus dados em nossa rede.</p>
                        </div> 
                    <?php } else { ?>
                        <div class="section-heading">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <h2>cadastrar produto</h2>
                            </div>
                            <p class="wow lightSpeedIn" data-wow-delay="0.3s">Em poucos minutos você fazerá parte de nossa rede.</p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>               
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
                <div class="form-wrapper marginbot-50">
                    <form enctype='multipart/form-data' id="contact-form" method="POST" action="../../controller/produto/produtoController.php">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <!-- FORMULÁRIO DE CADASTRO DE PRODUTO -->
                                    <input type="text" class="form-control" id="nmProduto" value="<?= isset($_SESSION['nmProduto']) ? $_SESSION['nmProduto'] : ''; ?>"name="nmProduto" placeholder="Produto" title="Aqui é o nome do produto" required="required"/>
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
                                    <input type="text" class="form-control" id="nmTipoProduto" name="nmTipoProduto" value="<?= isset($_SESSION['nmTipoProduto']) ? $_SESSION['nmTipoProduto'] : ''; ?>" placeholder="Tipo do Produto" title="Aqui é o Tipo do Produto - Se é Bolo ou Torta" required="required"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="vlProduto" name="vlProduto" value="<?= isset($_SESSION['vlProduto']) ? $_SESSION['vlProduto'] : ''; ?>" onkeypress =""  maxlength="7" placeholder="Valor" title="Aqui é o valor do Produto" required="required"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <textarea type="text" class="form-control" id="dsProduto" name="dsProduto" rows="10" cols="50" placeholder="Descrição do Produto" title="Aqui é a Descrição do Produto" required="required"><?= isset($_SESSION['dsProduto']) ? $_SESSION['dsProduto'] : ''; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="form-group">
                                Imagem do Produto:<input type="file" name="imgProduto"/>
                            </div>
                        </div>
                        <?php if (isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'alterarDados') { ?>
                            <button type="submit" class="btn btn-skin btn-block" id="acao" name="acao" value="alterar">Alterar</button>
                        <?php } else { ?>
                            <button type="submit" class="btn btn-skin btn-block" id="acao" name="acao" value="cadastrar">Cadastrar</button>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/marDeSabores/marDeSabores/view/rodape.php'; ?> 
