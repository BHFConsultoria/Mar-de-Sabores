<?php

require_once '../../config.inc.php';

$bo = new ProdutoBO();

$produtos = $bo->listAll();
