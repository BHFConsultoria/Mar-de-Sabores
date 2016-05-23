<?php

require_once '../../config.inc.php';

session_start();

$bo = new ProdutoBO();

$produtos = $bo->listaProduto($_SESSION['codigo']);
