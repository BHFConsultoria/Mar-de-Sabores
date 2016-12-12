<?php

require_once '../../config.inc.php';
if (!isset($_SESSION))
    session_start();

$bo = new PedidoBO();



if ($_SESSION['tpUsuario'] == 'cliente'){
    $pedidos = $bo->buscarPedidoByCliente($_SESSION['codigo']);
}else{
    $pedidos = $bo->buscarPedidoByConfeiteiro($_SESSION['codigo']);
}





