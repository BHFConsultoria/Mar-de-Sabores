<?php session_start(); ?>
<!DOCTYPE html>
<?php include_once 'cabecalhoPedido.php'; ?>
<?php include_once '../../controller/pedido/pedido.php'; ?>
<div class="slogan">
    <center><h3>Pedidos</h3></center>
</div>
<?php foreach ($pedidos as $pedido) { ?>

    <table width="100%" style="margin: auto;" class="fonte alturaTabela table-responsive table-hover table-striped">
        <thead>
        <th style=" text-align:center; ">Cod. Pedido</th>
        <th style=" text-align:center; ">Produto</th>    
        <th style=" text-align:center; ">Valor</th> 
        <?php if ($_SESSION['tpUsuario'] == 'cliente') { ?>
            <th style=" text-align:center; ">Confeiteiro</th>
        <?php } else { ?>
            <th style=" text-align:center; ">Cliente</th>
        <?php } ?>
        <thead/>
        <tbody>
        <form action="../../controller/pedido/pedidoController.php" method="POST">    
            <td align="center"> <?= $pedido['cd_pedido'] ?></td>     
            <td align="center"> <?= $pedido['nm_produto'] ?></td>  
            <td align="center"> R$<?= $pedido['vl_produto'] ?></td> 
            <?php if ($_SESSION['tpUsuario'] == 'cliente') { ?>
                <td align="center"> <?= $pedido['nm_confeiteiro'] ?></td>
            <?php } else { ?>
                <td align="center"> <?= $pedido['nm_cliente'] ?></td> 
            <?php } ?>
            <input type="hidden" name="cdPedido" value="<?= $pedido['cd_pedido'] ?>"/>

            <td align="center">  
                <button class="btn btn-danger" name="acao" value="deletar" onclick="return confirmarExcluirPedido()">Excluir pedido</button>
            </td>
        </form>
    </tbody>
    </table> 
<?php } ?>
<?php include_once 'rodape.php'; ?>