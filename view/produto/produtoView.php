<?php
session_start();
?>
<!DOCTYPE html>
<?php include_once './cabecalhoProduto.php'; ?> 
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
                <img src="../../view/bootstrap/img/bolo-decorado-chocolate.jpg">

            </div>	
            <div class="col-lg-6 col-md-6" id="">

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
<!-- /Section: Formulario PF -->
