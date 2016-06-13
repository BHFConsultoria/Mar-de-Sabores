<?php session_start() ?>
<!DOCTYPE html>
<?php include_once 'cabecalhoCliente.php'; ?>
<!-- /Section: intro -->

<!-- Section: Area cliente -->
<section id="about" class="home-section">


    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slogan">
                            <div class="collapse navbar-collapse" id="menu">
                                <ul class="nav navbar-nav">
                                    <li><a href="../pedido/indexPedido.php">[Pedidos]</a></li> 
                                </ul>
                            </div>

                            <form action="../../controller/produto/produtoController.php" method="POST"> 
                                <div class="form-group">
                                    <input type="text" class="" id="nmProduto" name="nmProduto" placeholder="" required="required"/>
                                </div>
                                <div class="form-group">   
                                    <button type="submit" id="acao" name="acao" value="buscarProduto">BUSCAR Produtos</button>
                                </div> 
                            </form>
                            <h4></h4>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </div> 


</section>
<!-- /Section: Area cliente -->

<?php include_once 'rodape.php'; ?>