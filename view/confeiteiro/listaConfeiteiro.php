
<?php include 'cabecalhoConfeiteiro.php'; ?>
<?php session_start(); ?>
    <table class="table-bordered">
        <tr>
            <td>Nome</td>
            <td>Email p/ contato</td>
            <td>Telefone p/ contato</td>
            <td>Celular p/ contato</td>
        </tr>
        <?php foreach($_SESSION['confeiteiros'] as $confeiteiro){ ?>
        <tr><?php if($confeiteiro['nm_situacao']!='D'){ ?>
            <td><?=$confeiteiro['nm_confeiteiro']?></td>
            <td><?=$confeiteiro['nm_email']?></td>
            <td><?=$confeiteiro['cd_telefone']?></td>
            <td><?=$confeiteiro['cd_celular']?></td>
        </tr><?php } ?>
        <?php } ?>
    </table>
<?php include 'rodape.php'; ?>
