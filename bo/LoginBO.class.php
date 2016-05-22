<?php

class LoginBO {

    private $dao;

    function __construct() {
        $this->dao = new LoginDAO();
    }

    function verificaLogin($nmEmail, $dsSenha, $tpUsuario) {

        if ($tpUsuario == 'confeiteiro') {
            $bean = new ConfeiteiroBean();
        } else if ($tpUsuario == 'cliente') {
            $bean = new ClienteBean();
        }

        $bean->setNmEmail($nmEmail);
        $bean->setDsSenha($dsSenha);

        $resultado = $this->dao->verificaLogin($bean->getNmEmail(), $bean->getDsSenha(), $tpUsuario);

        if (empty($resultado)) {
            echo "usuário nao encontrado";
        } else {
            session_start();

            $_SESSION['codigo'] = ($tpUsuario == 'confeiteiro') ? $resultado[0]['cd_confeiteiro'] : $resultado[0]['cd_cliente'] ;
            $_SESSION['nome'] = ($tpUsuario == 'confeiteiro') ? $resultado[0]['nm_confeiteiro'] : $resultado[0]['nm_cliente'];
            $_SESSION['nmEmail'] = $resultado[0]['nm_email'];
            $_SESSION['dsSenha'] = $resultado[0]['ds_senha'];
            ($tpUsuario == 'confeiteiro') ? $_SESSION['nmRazaoSocial'] = $resultado[0]['nm_razao_social'] : NULL ;
            ($tpUsuario == 'confeiteiro') ? $_SESSION['nmFantasia'] = $resultado[0]['nm_fantasia'] : NULL ;
            $_SESSION['cdCpf'] = $resultado[0]['cd_cpf'];
            ($tpUsuario == 'confeiteiro') ? $_SESSION['cdCnpj'] = $resultado[0]['cd_cnpj'] : NULL ;
            ($tpUsuario == 'confeiteiro') ? $_SESSION['cdInscricaoEstadual'] = $resultado[0]['cd_inscricao_estadual'] : NULL ;
            $_SESSION['dtNascimento'] = $resultado[0]['dt_nascimento'];
            $_SESSION['cdTelefone'] = $resultado[0]['cd_telefone'];
            $_SESSION['cdCelular'] = $resultado[0]['cd_celular'];
            $_SESSION['nmLogradouro'] = $resultado[0]['nm_logradouro'];
            $_SESSION['nmComplemento'] = $resultado[0]['nm_complemento'];
            $_SESSION['nmCidade'] = $resultado[0]['nm_cidade'];
            $_SESSION['nmBairro'] = $resultado[0]['nm_bairro'];
            $_SESSION['cdCep'] = $resultado[0]['cd_cep'];
            $_SESSION['sgUf'] = $resultado[0]['sg_uf'];
            $_SESSION['sgSexo'] = $resultado[0]['sg_sexo'];
            $_SESSION['tpUsuario'] = $tpUsuario;
            
            if($tpUsuario == 'confeiteiro'){
                header("Location: ../../view/confeiteiro/indexConfeiteiro.php"); 
            }else{
                header("Location: ../../view/cliente/indexCliente.php");
            }
        }
    }

}
