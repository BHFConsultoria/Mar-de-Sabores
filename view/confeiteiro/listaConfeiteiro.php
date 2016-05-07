<?php

include_once '../../controller/confeiteiro/confeiteiro.php';

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
            <td><?=$usuario['cd_confeiteiro']?></td>
            <td><?=$usuario['nm_confeiteiro']?></td>
            <td><?=$usuario['nm_email']?></td>
            <td><?=$usuario['ds_senha']?></td>
            <td>
            <form action="../../controller/confeiteiro/confeiteiroController.php" method ="POST">
                <input type="hidden" name="acao" value="alterarDados"/>
                <input type="hidden" name="cdConfeiteiro" value="<?=$usuario['cd_confeiteiro']?>"/>
                <button class="btn btn-primary">Alterar</button>
            </form>
            </td>
            <td>
            <form action="../../controller/confeiteiro/confeiteiroController.php" method ="POST">
                <input type="hidden" name="acao" value="deletar"/>
                <input type="hidden" name="cdConfeiteiro" value="<?=$usuario['cd_confeiteiro']?>"/>
                <button class="btn btn-danger">Remover</button>
            </form>
            </td>
        </tr>
        <?php } ?>
    </table>
</html>
