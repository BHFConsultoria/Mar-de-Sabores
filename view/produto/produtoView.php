<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php        ?>
        
        <form name="" action="../../controller/produto/produtoController.php" Method="POST" >
            
            <table border="1">
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
            </table>
            
        </form>
    </body>
</html>
