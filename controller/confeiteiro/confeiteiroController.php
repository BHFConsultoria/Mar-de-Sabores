<?php

require_once '../../config.inc.php';

$bo = new ConfeiteiroBO();

$dados= [
    'nmConfeiteiro' => $_POST['nmConfeiteiro'],
    'nmEmail' => $_POST['nmEmail'],
    'dsSenha' => $_POST['dsSenha'],
    'nmRazaoSocial' => $_POST['nmRazaoSocial'],
    'nmFantasia' => $_POST['nmFantasia'],
    'cdCpf' => $_POST['cdCpf'],
    'cdCnpj' => $_POST['cdCnpj'],
    'cdInscricaoEstadual' => $_POST['cdInscricaoEstadual'],
    'dtNascimento' => $_POST['dtNascimento'],
    'cdTelefone' => $_POST['cdTelefone'],
    'cdCelular' => $_POST['cdCelular'],
    'nmLogradouro' => $_POST['nmLogradouro'],
    'nmComplemento' => $_POST['nmComplemento'],
    'nmCidade' => $_POST['nmCidade'],
    'nmBairro' => $_POST['nmBairro'],
    'cdCep' => $_POST['cdCep'],
    'sgUf' => $_POST['sgUf'],
    'sgSexo' => $_POST['sgSexo']
];

$acao = $_POST['btnCadastrar'];

switch ($acao){
    
    case 'cadastrar':
        $bean = $bo->populaBean($dados);
        $bo->cadastrarConfeiteiro($bean);
    break;

    case 'alterar':
        $bean = $bo->populaBean($dados);
        $bo->alterarConfeiteiro($bean);
    break;
    
}