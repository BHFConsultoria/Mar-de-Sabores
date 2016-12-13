<?php
include_once '../../controller/confeiteiro/confeiteiroController.php';
?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/cabecalho.php'; ?>
<!-- Section: intro -->
<section id="intro" class="intro-pages">
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
            <h4>Olá <?= $_SESSION['nome'] ?>, Seja bem vindo!</h4>
        </nav>
    </div>
    <div class="slogan">
        <a href="../../index.php"><img src="../bootstrap/img/logo.png" alt="" /></a>
    </div>
</section>
<section id="produto" class="home-section text-center">    
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                        <h2>Lista de Confeiteiros</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table width="100%" style="margin: auto;" class="fonte alturaTabela table-responsive table-hover table-striped"> 
            <thead>
            <th style=" text-align:center; ">Nome</th>
            <th style=" text-align:center; ">Email p/ contato</th>
            <th style=" text-align:center; ">Telefone p/ contato</th>
            <th style=" text-align:center; ">Celular p/ contato</th>
            </thead>
            <tbody> 
                <?php foreach ($_SESSION['confeiteiros'] as $confeiteiro) { ?>
                    <tr><?php if ($confeiteiro['nm_situacao'] != 'D') { ?>
                            <td align="center"><?= $confeiteiro['nm_confeiteiro'] ?></td>
                            <td align="center"><?= $confeiteiro['nm_email'] ?></td>
                            <td align="center"><?= $confeiteiro['cd_telefone'] ?></td>
                            <td align="center"><?= $confeiteiro['cd_celular'] ?></td>
                        </tr><?php } ?>
                <?php } ?>
            </tbody>       
        </table>
    </div>
</section> 
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/rodape.php'; ?>
