<?php

require_once '../../config.inc.php';

session_start();

$bo = new ConfeiteiroBO();

$acao = $_REQUEST['acao'];

if ($acao == 'cadastrar' || $acao == 'alterar') {
    
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
        echo "<script>alert('Cadastro realizado com sucesso!')</script>";
        echo "<script>window.location.assign('../../index.php')</script>";
        break;
    case 'alterar':
        $dados['cd_confeiteiro'] = $_SESSION['codigo'];
        $bean = $bo->populaBean($dados);
        $bo->alterarConfeiteiro($bean);
        
        $login = new LoginBO();
        $email = $_SESSION['nmEmail'];
        $senha = $_SESSION['dsSenha'];
        $tpUsuario = $_SESSION['tpUsuario'];
  
        $login->verificaLogin($email, $senha, $tpUsuario);
        
        echo "<script>alert('Dados alterados com sucesso!')</script>";
        echo "<script>window.location.assign('../../view/confeiteiro/indexConfeiteiro.php')</script>";
        break;
    
    case 'desativar':
        $resultado = $bo->desativarConfeiteiro($_SESSION['codigo']);
        echo "<script>alert('Usuário desativado com sucesso!')</script>";
        echo "<script>window.location.assign('../../index.php')</script>";
        break;

}
