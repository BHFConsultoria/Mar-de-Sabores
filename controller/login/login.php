<?php

require_once '../../config.inc.php';

switch ($_REQUEST['acao']) {

    case 'logar':
        $nmEmail = $_POST['nmEmail'];
        $dsSenha = $_POST['dsSenha'];
        $tpUsuario = $_POST['tpUsuario'];

        $loginBO = new LoginBO();

        $loginBO->verificaLogin($nmEmail, $dsSenha, $tpUsuario);
        break;

    case 'deslogar':
        session_start();
        session_unset();
        header('Location: ../../index.php');
        break;
}

