<?php

require_once '../../config.inc.php';

$bo = new ConfeiteiroBO();

$nmConfeiteiro = 'Bryan';
$nmEmail = 'bryan@bryan';
$bean = [
    $nmConfeiteiro,
    $nmEmail
];

$bo->cadastrarConfeiteiro($bean);

