<?php
if (!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    </head>
<!--?php include_once $_SERVER['DOCUMENT_ROOT'] . 'Mar-de-Sabores/Mar-de-Sabores/cabecalhoConfeiteiro.php'; ?>-->
<?php include_once '../../view/produto/cabecalhoProduto.php'; ?> 

<!-- Section: intro -->
<!-- Section: intro -->
<!-- Section: Area produto --> 
<section id="contact" class="home-section text-center">
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-offset-2">                   
                    <?php if ($_REQUEST['acao'] == 'alterarDados') { ?>
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
                    <form id="contact-form" method="POST" action="../../controller/produto/produtoController.php">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <!-- FORMULÁRIO DE CADASTRO DE PRODUTO -->
                                    <input type="text" class="form-control" id="nmProduto" value="<?= $_SESSION['nmProduto'] ?>"name="nmProduto" placeholder="Produto" title="Aqui é o nome do produto" required="required"/>
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
                                    <input type="text" class="form-control" id="nmTipoProduto" name="nmTipoProduto" value="<?= $_SESSION['nmTipoProduto'] ?>" placeholder="Tipo do Produto" title="Aqui é o Tipo do Produto - Se é Bolo ou Torta" required="required"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="vlProduto" name="vlProduto" value="<?= $_SESSION['vlProduto'] ?>" onkeypress ="return apenasNumeros(this);"  maxlength="7" placeholder="Valor" title="Aqui é o valor do Produto" required="required"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group">
                                    <textarea type="text" class="form-control" id="dsProduto" name="dsProduto" rows="10" cols="50" placeholder="Descrição do Produto" title="Aqui é a Descrição do Produto" required="required"><?= $_SESSION['dsProduto'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="form-group">
                                Imagem do Produto:<input type="file" name="imProduto"/>
                            </div>
                        </div>
                        <?php if ($_REQUEST['acao'] == 'alterarDados') { ?>
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

<br>

<!-- /Section: Formulario PF -->

<!--?php include_once $_SERVER['DOCUMENT_ROOT'] . 'Mar-de-Sabores/Mar-de-Sabores/rodape.php'; ?-->
<?php include_once '../../view/produto/rodape.php'; ?> 

