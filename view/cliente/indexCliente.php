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
                        </div>
                        <div class="col-md-9">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                                
                            <div class="carousel-inner">
                                <div class="item active">
                                    
                                    <img class="slide-image" src="../bootstrap/img/cake-pops.jpg" alt="img" >
                                   
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../bootstrap/img/cakes2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../bootstrap/img/cake-168168_1920.jpg" alt="500">
                                </div>
                            </div>
                               
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        </div>
                        <div class="centered"> 
                        <div class="col-md-3">
                              
                            <form action="../../controller/produto/produtoController.php" method="POST"> 
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nmProduto" name="nmProduto" style="min-width:300px;" placeholder="" required="required"/>
                                </div>
                                
                                <div class= "form-group"> 
                                    <button align-center  class="btn-primary"  type="submit" id="acao" name="acao" value="buscarProduto">BUSCAR Produtos</button>
                                </div> 
                                
                            </form>
                                </div>
                        </div>
                            

                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </div> 


</section>
<!-- /Section: Area cliente -->

<?php include_once 'rodape.php'; ?>