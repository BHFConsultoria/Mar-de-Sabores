<?php

require_once 'config.inc.php';

$dao = new PedidoDAO();

$qtPedido = $dao->buscarPedidoByCliente(1);

var_dump($qtPedido);