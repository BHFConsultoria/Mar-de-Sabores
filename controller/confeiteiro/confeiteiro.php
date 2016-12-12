<?php

require_once '../../config.inc.php';
session_start();
$bo = new ConfeiteiroBO();

$_SESSION['confeiteiros'] = $bo->buscarConfeiteiro($_REQUEST['buscar']);

header('Location: ../../view/confeiteiro/listaConfeiteiro.php');


