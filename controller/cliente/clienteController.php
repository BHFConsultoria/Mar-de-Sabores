<?php

require_once '../../config.inc.php';
$bo = new ClienteBO();

$dados=[
'nmCliente' => $_POST['nmCliente'],
'nmEmail' => $_POST['nmEmail'],
'dsSenha' => $_POST['dsSenha'],
'cdCpf' => $_POST['cdCpf'],
'dtNascimento' => $_POST['dtNascimento'],
'cdTelefone' => $_POST['cdTelefone'],
'nmLogradouro' => $_POST['nmLogradouro'],
'nmComplemento' => $_POST['nmComplemento'],
'nmCidade' => $_POST['nmCidade'],
'nmBairro' => $_POST['nmBairro'],
'cdCep' => $_POST['cdCep'],
'sgUf' => $_POST['sgUf'],
'sgSexo' => $_POST['sgSexo'],
'cdCelular' => $_POST['cdCelular']
];
$acao = $_POST['btnCadastrar'];
    
var_dump($dados);
switch ($acao) {

    case 'cadastrar':
        $bean = $bo->populaBean($dados);
        $bo->cadastrarCliente($bean);
        echo "Entrou";
    break;
  
    case 'desativar':
        $bean = $bo->populaBean($dados);
        $bo->desativarCliente($bean);
    break;
}

