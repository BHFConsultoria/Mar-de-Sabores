<?php

include_once '../../controller/produto/produto.php';

?>

<html>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    </head>
    <table class="table-bordered">
        <tr>
            <td> Id </td>
            <td> Confeiteiro </td>
            <td> Produto </td>
            <td> Valor </td>
            <td> Descrição </td>
            <td> Tipo do Produto </td>
            <td> Situação do Produto </td>
       </tr>
        <?php foreach($produtos as $produto){
            ?>
        <tr>
            <td><?=$produto['cd_produto']?></td>
            <td><?=$produto['CONFEITEIRO_cd_confeiteiro']?></td>
            <td><?=$produto['nm_produto']?></td>
            <td><?=$produto['vl_produto']?></td>
            <td><?=$produto['ds_produto']?></td>
            <td><?=$produto['nm_tipo_produto']?></td>
            <td><?=$produto['nm_situacao']?></td>
            <td>
                <form action="../../controller/produto/produtoController.php" method="POST">
                    <input type="hidden" name="acao" value="alterarDados"/>
                    <input type="hidden" name="cdProduto" value="<?=$produto['cd_produto']?>"/>
                    <button class="btn btn-primary">Alterar</button>
                </form>
            </td>
            <td>
                <form action="../../controller/produto/produtoController.php" method="POST">
                    <input type="hidden" name="acao" value="deletar"/>
                    <input type="hidden" name="cdProduto" value="<?=$produto['cd_produto']?>"/>
                    <button class="btn btn-danger">Remover</button>
                    
                </form>
            </td>
            <td>
                <form action="../../controller/produto/produtoController.php" method="POST">
                    <input type="hidden" name="acao" value="desativar"/>
                    <input type="hidden" name="cdProduto" value="<?=$produto['cd_produto']?>"/>
                    <button class="btn btn-danger">Desativar</button>  
                </form>
            </td>
            
            </tr>
        
       <?php }?>
    </table>
</html>


