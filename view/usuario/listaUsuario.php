<?php

include_once '../../controller/cliente/cliente.php';

?>

<html>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    </head>
    <table class="table-bordered">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Senha</td>
        </tr>
        <?php foreach($usuarios as $usuario){ ?>
        <tr>
            <td><?=$usuario['cd_cliente']?></td>
            <td><?=$usuario['nm_cliente']?></td>
            <td><?=$usuario['nm_email']?></td>
            <td><?=$usuario['ds_senha']?></td>
            <td>
                <form action="../../controller/cliente/clienteController.php" method ="POST">
                <input type="hidden" name="acao" value="alterarDados"/>
                <input type="hidden" name="cdCliente" value="<?=$usuario['cd_cliente']?>"/>
                <button class="btn btn-primary">Alterar</button>
            </form>
            </td>
            <td>
                <form action="../../controller/cliente/clienteController.php" method ="POST">
                <input type="hidden" name="acao" value="deletar"/>
                <input type="hidden" name="cdCliente" value="<?=$usuario['cd_cliente']?>"/>
                <button class="btn btn-danger">Remover</button>
            </form>
            </td>
        </tr>
        <?php } ?>
    </table>
</html>
