<?php
include_once '../../controller/produto/produto.php';
?>
<?php session_start() ?>
<!DOCTYPE html>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . 'Mar-de-Sabores/Mar-de-Sabores/cabecalhoConfeiteiro.php'; ?>
        <section id="produto" class="home-section text-center">    
            <div class="heading-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-offset-2">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <h2>Controle de Produto</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- <table class="table table-striped">  NOVO CÓDIGO DE TABELA      -->
                <table width="100%" style="margin: auto;" class="fonte alturaTabela table-responsive table-hover table-striped">
                    <thead>

                    <th style=" text-align:center; ">Produto</th>
                    <th style=" text-align:center; ">Valor</th>    
                    <th style=" text-align:center; ">Descrição</th>     
                    <th style=" text-align:center; ">Tipo</th>  
                    <th style=" text-align:center; ">Situação</th>    
                    <th style=" text-align:center; ">Ações</th>     
                    </thead>
                    <tbody>
                        <?php foreach ($produtos as $produto) { ?>
                            <tr> 
                                <td> <?= $produto['nm_produto'] ?></td>     
                                <td> R$ <?= $produto['vl_produto'] ?></td>  
                                <td> <?= $produto['ds_produto'] ?></td> 
                                <td> <?= $produto['nm_tipo_produto'] ?></td> 
                                <td> <?= $produto['nm_situacao'] ?></td> 
                            </tr>
                            <tr>
                                <td>  
                                    <form action="../../controller/produto/produtoController.php" method="POST">

                                        <input type="hidden" name="acao" value="alterarDados"/>
                                        <input type="hidden" name="cdProduto" value="<?= $produto['cd_produto'] ?>"/>
                                        <button class="btn btn-primary" >Alterar</button>
                                    </form>
                                    
                                    <form action="../../controller/produto/produtoController.php" method="POST">
                                    <input type="hidden" name="acao" value="deletar"/>
                                    <input type="hidden" name="cdProduto" value="<?= $produto['cd_produto'] ?>"/>
                                    <button class="btn btn-danger">Remover</button>  
                                    </form>
                                    
                                    <form action="../../controller/produto/produtoController.php" method="POST">
                                    <input type="hidden" name="acao" value="desativar"/>
                                    <input type="hidden" name="cdProduto" value="<?= $produto['cd_produto'] ?>"/>
                                    <button class="btn btn-danger">Desativar</button>
                                    </form>

                                    <?php echo $produto['cd_produto']; ?>
                                <?php } ?>
                                </form></td> 
                        </tr>         
                    </tbody>
                </table>       

                <!-- </table> -->
            </div> 
        </section>       
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . 'Mar-de-Sabores/Mar-de-Sabores/rodape.php'; ?>


