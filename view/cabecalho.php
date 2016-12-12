<?php
if (!isset($_SESSION))
    session_start();

$caminhoCss = '/marDeSabores/marDeSabores/view';
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mar de Sabores - O Portal dos Confeiteiros</title>

        <!-- CSS -->
        <link href="<?=$caminhoCss?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?=$caminhoCss?>/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?=$caminhoCss?>/bootstrap/css/nivo-lightbox.css" rel="stylesheet" />
        <link href="<?=$caminhoCss?>/bootstrap/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
        <link href="<?=$caminhoCss?>/bootstrap/css/owl.carousel.css" rel="stylesheet" media="screen" />
        <link href="<?=$caminhoCss?>/bootstrap/css/owl.theme.css" rel="stylesheet" media="screen" />	
        <link href="<?=$caminhoCss?>/bootstrap/css/animate.css" rel="stylesheet" />
        <link href="<?=$caminhoCss?>/bootstrap/css/style.css" rel="stylesheet">
        <link href="<?=$caminhoCss?>/bootstrap/color/default.css" rel="stylesheet">

        <!-- Validações -->
        <script type="text/javascript" src="<?=$caminhoCss?>/js/jquery-2.2.2.js"></script>
        <script type="text/javascript" src="<?=$caminhoCss?>/js/funcoes.js"></script>

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">