
<?php session_start();?>
<?php include_once 'cabecalhoProduto.php'; ?>
<?php foreach ($_SESSION['produtos'] as $produto) { ?>
    <table width="100%" style="margin: auto;" class="fonte alturaTabela table-responsive table-hover table-striped">
        <thead>
        <th style=" text-align:center; ">Produto</th>
        <th style=" text-align:center; ">Valor</th>    
        <th style=" text-align:center; ">Descrição</th>     
        <th style=" text-align:center; ">Tipo</th>  
        <th style=" text-align:center; ">Detalhes</th>  
        <thead/>
        <tbody>
        <form action="produtoView.php" method="POST">    
            <td align="center"> <?= $produto['nm_produto'] ?></td>     
            <td align="center"> R$ <?= $produto['vl_produto'] ?></td>  
            <td align="center"> <?= $produto['ds_produto'] ?></td> 
            <td align="center"> <?= $produto['nm_tipo_produto'] ?></td> 
            
            <input type="hidden" name="cdProduto" value="<?= $produto['cd_produto'] ?>"/>
            <input type="hidden" name="cdConfeiteiro" value="<?= $produto['CONFEITEIRO_cd_confeiteiro']?>"/>
            
            <input type="hidden" name="nmProduto" value="<?= $produto['nm_produto'] ?>"/>
            <input type="hidden" name="vlProduto" value="<?= $produto['vl_produto'] ?>"/>
            <input type="hidden" name="dsProduto" value="<?= $produto['ds_produto'] ?>"/>
            <input type="hidden" name="nmTipoProduto" value="<?= $produto['nm_tipo_produto'] ?>"/>
            
            <td align="center">  

                
                
                <button class="btn btn-primary" >Detalhes</button>

            </td>
        </form>
    </tbody>
    </table> 
<?php } ?>
<?php include_once 'rodape.php'; ?>