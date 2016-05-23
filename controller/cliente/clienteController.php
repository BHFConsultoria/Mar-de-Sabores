<?php

require_once '../../config.inc.php';

session_start();

$bo = new ClienteBO();
//$dao = new ClienteDAO();

$acao = $_POST['acao'];


if ($acao == 'cadastrar' || $acao == 'alterar') {

    $dados = [
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
} else {
    //$cdCliente = $_POST['cdCliente'];
}

//var_dump($dados);

switch ($acao) {

    case 'cadastrar':
        $bean = $bo->populaBean($dados);
        $bo->cadastrarCliente($bean);
        echo "<script>alert('Cadastro realizado com sucesso!')</script>";
        echo "<script>window.location.assign('../../index.php')</script>";
        break;

    case 'alterar':
        $dados ['cd_cliente'] = $_SESSION['codigo'];
        $bean = $bo->populaBean($dados);
        $resultado = $bo->alterarCliente($bean);
        
        $login = new LoginBO();
        $email = $_SESSION['nmEmail'];
        $senha = $_SESSION['dsSenha'];
        $tpUsuario = $_SESSION['tpUsuario'];
  
        $login->verificaLogin($email, $senha, $tpUsuario);
        echo "<script>alert('Dados Alterados com sucesso!')</script>";
        echo "<script>window.location.assign('../../view/cliente/indexCliente.php')</script>";
        break;

//    case 'alterarDados';
//        $usuario = $dao->findByPk($_POST['cdCliente']);
//        $bean = $bo->populaBean($usuario[0]);
//        include_once '../../view/cliente/cliente.php';
//        break;

    case 'desativar':

        $resultado = $bo->desativarCliente($_POST['cdCliente']);

        break;
}

