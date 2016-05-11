<?php

include_once '../../controller/produto/produtoController.php';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        
        <form name="" action="../../controller/produto/produtoController.php" Method="POST" >
            
            <table border="1">
                <?php if ($acao =='alterarDados'){ ?> 
                <input type="hidden" name="cdProduto" value="<?=$bean->getCdProduto() ?>">
                <tr><td>Nome do Produto:<input type="text" name="nmProduto" value="<?=$bean->getNmProduto() ?>"/></td></tr>
                <tr><td>Preço:<input type="text" name="vlProduto" value="<?=$bean->getVlProduto() ?>"/></td></tr>
                <tr><td>
                        Categoria do produto:<select name="nmCategoria">
                    <option value ="Selecione...">Selecione...</option>
                    <option value ="salgado">Salgado</option>
                    <option value ="doce">Doce</option>
                        </select>
                </td></tr>
                <tr><td>Tipo do Produto:<input type="" name="nmTipoProduto" value="<?=$bean->getNmTipoProduto() ?>"/></td></tr>
                <tr><td>Descrição do Produto:<textarea name="dsProduto" value="<?=$bean->getDsProduto() ?>" rows="10" cols="50"></textarea></td></tr>              
                <tr><td>Imagem:<input type="file" name="imProduto" /></td></tr>
                <tr><td><input type="submit" name="acao" value="alterar"/></td></tr>
                <?php }else{ ?>
                <tr><td>Nome do Produto:<input type="text" name="nmProduto"/></td></tr>
                <tr><td>Preço:<input type="text" name="vlProduto"/></td></tr>
                <tr><td>
                        Categoria do produto:<select name="nmCategoria">
                    <option value ="Selecione...">Selecione...</option>
                    <option value ="salgado">Salgado</option>
                    <option value ="doce">Doce</option>
                        </select>
                </td></tr>
                <tr><td>Tipo do Produto:<input type="" name="nmTipoProduto"/></td></tr>
                <tr><td>Descrição do Produto:<textarea name="dsProduto" rows="10" cols="50"></textarea></td></tr>              
                <tr><td>Imagem:<input type="file" name="imProduto"/></td></tr>
                <tr><td><input type="submit" name="acao" value="cadastrar"/></td></tr>
                <?php } ?>
            </table>
            
        </form>
    </body>
</html>
