<?php
include_once '../../controller/produto/produto.php';
?>
<?php session_start(); ?>
<?php include_once 'cabecalhoProduto.php'; ?>
<section id="produto" class="home-section text-center">    
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <h2>Lista de Produtos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table width="100%" style="margin: auto;" class="fonte alturaTabela table-responsive table-hover table-striped">
            <thead>
            <th style=" text-align:center; ">Produto</th>
            <th style=" text-align:center; ">Valor</th>    
            <th style=" text-align:center; ">Descrição</th>     
            <th style=" text-align:center; ">Tipo</th>  
            <th style=" text-align:center; ">Detalhes</th>  
            <thead/>
            <tbody>
                <?php foreach ($produtos as $produto) { ?>
                    <tr> 
                        <td align="center"> <?= $produto['nm_produto'] ?></td>     
                        <td align="center"> R$ <?= $produto['vl_produto'] ?></td>  
                        <td align="center"> <?= $produto['ds_produto'] ?></td> 
                        <td align="center"> <?= $produto['nm_tipo_produto'] ?></td> 
                        <td align="center"> <?= $produto['nm_situacao'] ?></td> 
            <td align="center"> 
                <form action="produtoView.php" method="POST"> 

                    <button class="btn btn-primary" >Detalhes</button>

                </form>
            </td>
                <?php } ?>  
            </tr>         
            </tbody>
        </table> 
    </div>
</section>  
<?php include_once 'rodape.php'; ?>