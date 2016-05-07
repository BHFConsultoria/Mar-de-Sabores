<?php

require_once '../../config.inc.php';
$bo = new ClienteBO();

$dados=[
'cd_cliente' => '', 
'nm_cliente' => $_POST['nmCliente'],
'nm_email' => $_POST['nmEmail'],
'ds_senha' => $_POST['dsSenha'],
'cd_cpf' => $_POST['cdCpf'],
'dt_nascimento' => $_POST['dtNascimento'],
'cd_telefone' => $_POST['cdTelefone'],
'nm_logradouro' => $_POST['nmLogradouro'],
'nm_complemento' => $_POST['nmComplemento'],
'nm_cidade' => $_POST['nmCidade'],
'nm_bairro' => $_POST['nmBairro'],
'cd_cep' => $_POST['cdCep'],
'sg_uf' => $_POST['sgUf'],
'sg_sexo' => $_POST['sgSexo'],
'cd_celular' => $_POST['cdCelular'],
'nm_situacao' => 'A'
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

