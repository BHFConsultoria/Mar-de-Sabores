<?php

require_once '/config.inc.php';

$bo = new ConfeiteiroBO;

$resultado = $bo->findCnpjByCnpj('44.444.444/4444-44');

var_dump($resultado);