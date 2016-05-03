<?php

require_once '../../config.inc.php';

$dao = new ConfeiteiroDAO();

$confeiteiros = $dao->listarConfeiteiros();
