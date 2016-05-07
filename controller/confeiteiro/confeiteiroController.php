<?php

require_once '../../config.inc.php';

$bo = new ConfeiteiroBO();

$acao = $_POST['acao'];

if ($acao == 'cadastrar') {
    $dados = [
        'cd_confeiteiro' => '',
        'nm_confeiteiro' => $_POST['nmConfeiteiro'],
        'nm_email' => $_POST['nmEmail'],
        'ds_senha' => $_POST['dsSenha'],
        'nm_razao_social' => $_POST['nmRazaoSocial'],
        'nm_fantasia' => $_POST['nmFantasia'],
        'cd_cpf' => $_POST['cdCpf'],
        'cd_cnpj' => $_POST['cdCnpj'],
        'cd_inscricao_estadual' => $_POST['cdInscricaoEstadual'],
        'dt_nascimento' => $_POST['dtNascimento'],
        'cd_telefone' => $_POST['cdTelefone'],
        'cd_celular' => $_POST['cdCelular'],
        'nm_logradouro' => $_POST['nmLogradouro'],
        'nm_complemento' => $_POST['nmComplemento'],
        'nm_cidade' => $_POST['nmCidade'],
        'nm_bairro' => $_POST['nmBairro'],
        'cd_cep' => $_POST['cdCep'],
        'sg_uf' => $_POST['sgUf'],
        'sg_sexo' => $_POST['sgSexo'],
        'nm_situacao' => 'A'
    ];
}

switch ($acao) {

    case 'cadastrar':
        $bean = $bo->populaBean($dados);
        $bo->cadastrarConfeiteiro($bean);
        break;

    case 'alterar':
        $resultado = $bo->findByPk($_POST['cdConfeiteiro']);
        $bean = $bo->populaBean($resultado[0]);
        var_dump($bean);
        break;
            
    //Case para carregar os dados no formulário para fazer alteração.
    case 'alterarDados':
        $usuario = $bo->findByPk($_POST['cdConfeiteiro']);
        $bean = $bo->populaBean($usuario[0]);
        include_once'../../view/confeiteiro/confeiteiro.php';
        break;
}