<?php session_start() ?>
<?php include_once 'cabecalhoProduto.php' ?>
<!-- /Section: intro -->
<!-- Section: Area Cadastro Produto -->
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
            <div class="col-lg-6 col-md-6">
                <img src="../bootstrap/img/bolo-decorado-chocolate.jpg">

            </div>	
            <div class="col-lg-6 col-md-6" id="">
                <h2 class="text-center"><?= $_POST['nmProduto'] ?></h2>
                <p>
                    Código do Produto: <?= $_POST['cdProduto'] ?><br>
                    Categoria: <?= $_POST['nmTipoProduto'] ?><br>
                    <b>Valor: R$ <?= $_POST['vlProduto'] ?></b>
                </p>
                <p>
                    <b>Descrição do Produto</b><br>
                    <?= $_POST['dsProduto'] ?>
                </p>
                <p><b>Formas de Pagamento</b></p>
                <img src="../bootstrap/img/bandeiras.jpg">
                <p>
                    <!-- Input hidden para realizar o pedido-->
                <form action="../../controller/pedido/pedidoController.php" method="POST">
                    <input type="hidden" name="cdProduto" value="<?= $_POST['cdProduto'] ?>"/>
                    <input type="hidden" name="cdConfeiteiro" value="<?= $_POST['cdConfeiteiro'] ?>"/>
                    <input type="hidden" name="cdCliente" value="<?= $_SESSION['codigo'] ?>"
                    <!-- ---------------------------------- -->
                    <button type="submit" name="acao" value="cadastrar">Encomendar produto</button> 
                </form>
                </p>
            </div>	

        </div>
    </div>
</section>
<!-- /Section: Formulario PF -->



<?php include_once './rodape.php'; ?>