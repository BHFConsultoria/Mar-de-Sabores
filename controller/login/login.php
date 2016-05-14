<?php

require_once '../../config.inc.php';

$nmEmail = $_POST['nmEmail'];
$dsSenha = $_POST['dsSenha'];
$tpUsuario = $_POST['tpUsuario'];

$loginBO = new LoginBO();

$loginBO->verificaLogin($nmEmail,$dsSenha,$tpUsuario);



