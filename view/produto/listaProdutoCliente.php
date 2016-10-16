<?php
include_once '../../controller/produto/produto.php';
?>
<?php session_start() ?>
<!DOCTYPE html>

<?php include_once './cabecalhoProduto.php'; ?> 
<section id="produto" class="home-section text-center">    
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <h2>Produtos</h2>
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
            <th style=" text-align:center; ">Ações</th>     
            </thead>
            <tbody>
                <?php foreach ($_SESSION['produtos'] as $produto) { ?>
                    <tr> 
                        <td align="center"> <?= $produto['nm_produto'] ?></td>     
                        <td align="center"> R$ <?= $produto['vl_produto'] ?></td>  
                        <td align="center"> <?= $produto['ds_produto'] ?></td> 
                        <td align="center"> <?= $produto['nm_tipo_produto'] ?></td> 



                        <td align="center"> 
                            <form action="produtoView.php" method="POST">
                                <input type="hidden" name="cdProduto" value="<?= $produto['cd_produto'] ?>"/>
                                <input type="hidden" name="cdConfeiteiro" value="<?= $produto['CONFEITEIRO_cd_confeiteiro'] ?>"/>
                                <input type="hidden" name="nmProduto" value="<?= $produto['nm_produto'] ?>"/>
                                <input type="hidden" name="vlProduto" value="<?= $produto['vl_produto'] ?>"/>
                                <input type="hidden" name="dsProduto" value="<?= $produto['ds_produto'] ?>"/>
                                <input type="hidden" name="nmTipoProduto" value="<?= $produto['nm_tipo_produto'] ?>"/>
                                <button class="btn btn-danger" type="submit">Visualizar </button>  
                            </form>
                        </td>

                        <td> 


                        <?php } ?>
                    </td> 
                </tr>         
            </tbody>
        </table>       

        <!-- </table> -->
    </div> 
</section>       
<!-- ?php include_once $_SERVER['DOCUMENT_ROOT'] . 'Mar-de-Sabores/Mar-de-Sabores/rodape.php'; ?>-->
<?php include_once '../../view/produto/rodape.php'; ?> 


