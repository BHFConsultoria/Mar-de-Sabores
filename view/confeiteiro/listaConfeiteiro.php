<?php include_once $_SERVER['DOCUMENT_ROOT'].'Mar-de-Sabores/Mar-de-Sabores/cabecalhoConfeiteiro.php'; ?>
    <table class="table-bordered">
        <tr>
            <td>Nome</td>
            <td>Email p/ contato</td>
        </tr>
        <?php foreach($confeiteiros as $confeiteiro){ ?>
        <tr><?php if($confeiteiro['nm_situacao']!='D'){ ?>
            <td><?=$confeiteiro['nm_confeiteiro']?></td>
            <td><?=$confeiteiro['nm_email']?></td>
        </tr><?php } ?>
        <?php } ?>
    </table>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'Mar-de-Sabores/Mar-de-Sabores/rodape.php'; ?>
