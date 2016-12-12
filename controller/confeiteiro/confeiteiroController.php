<?php

require_once '../../config.inc.php';

if (!isset($_SESSION)) 
    session_start();

$bo = new ConfeiteiroBO();

$acao = $_REQUEST['acao'];

if ($acao == 'cadastrar' || $acao == 'alterar') {
    
    $dados = [       
        'cd_confeiteiro' => '',
        'nm_confeiteiro' => isset($_POST['nmConfeiteiro']) ? $_POST['nmConfeiteiro'] : '',
        'nm_email' => isset($_POST['nmEmail']) ? $_POST['nmEmail'] : '',
        'ds_senha' => isset($_POST['dsSenha']) ? $_POST['dsSenha'] : '',
        'nm_razao_social' => isset($_POST['nmRazaoSocial']) ? $_POST['nmRazaoSocial'] : '',
        'nm_fantasia' => isset($_POST['nmFantasia']) ? $_POST['nmFantasia'] : '',
        'cd_cpf' => isset($_POST['cdCpf']) ? $_POST['cdCpf'] : '',
        'cd_cnpj' => isset($_POST['cdCnpj']) ? $_POST['cdCnpj'] : '',
        'cd_inscricao_estadual' => isset($_POST['cdInscricaoEstadual']) ? $_POST['cdInscricaoEstadual'] : '',
        'dt_nascimento' => isset($_POST['dtNascimento']) ? $_POST['dtNascimento'] : '',
        'cd_telefone' => isset($_POST['cdTelefone']) ? $_POST['cdTelefone'] : '',
        'cd_celular' => isset($_POST['cdCelular']) ? $_POST['cdCelular'] : '',
        'nm_logradouro' => isset($_POST['nmLogradouro']) ? $_POST['nmLogradouro'] : '',
        'nm_complemento' => isset($_POST['nmComplemento']) ? $_POST['nmComplemento'] : '',
        'nm_cidade' => isset($_POST['nmCidade']) ? $_POST['nmCidade'] : '',
        'nm_bairro' => isset($_POST['nmBairro']) ? $_POST['nmBairro'] : '',
        'cd_cep' => isset($_POST['cdCep']) ? $_POST['cdCep'] : '',
        'sg_uf' => isset($_POST['sgUf']) ? $_POST['sgUf'] : '',
        'sg_sexo' => isset($_POST['sgSexo']) ? $_POST['sgSexo'] : '',
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
