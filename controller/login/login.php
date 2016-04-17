<?php

require_once '../../config.inc.php';

$nmEmail = $_GET['nmEmail'];
$dsSenha = $_GET['dsSenha'];

$loginBO = new LoginBO();
    
$loginBO->verificaLogin($nmEmail,$dsSenha);



