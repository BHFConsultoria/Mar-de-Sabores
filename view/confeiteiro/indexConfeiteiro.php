<?php session_start() ?>
<!DOCTYPE html>

        <!-- /Section: intro -->
        <?php include 'cabecalhoConfeiteiro.php'; ?>
        <!-- Section: Area confeiteiro -->
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
                                        <li><a href="../produto/listaProduto.php">[Deletar produto]</a></li>
                                        <li><a href="../pedido/indexPedido.php">[Pedidos]</a></li> 
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>

                </nav>
            </div> 


        </section>
        <!-- /Section: Area confeiteiro -->

<?php include 'rodape.php'; ?>
