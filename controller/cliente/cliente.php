<?php

require_once '../../config.inc.php';

$bo = new ClienteBO();

$usuarios = $bo->listAll();