<?php

require_once '../../config.inc.php';

$bo = new ConfeiteiroBO();

$usuarios = $bo->listAll();


