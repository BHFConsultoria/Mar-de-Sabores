<?php

class ConfeiteiroBO extends AbstractBO {

    private $dao;

    function __construct() {
        $this->dao = new ConfeiteiroDAO();
    }

    function cadastrarConfeiteiro($bean) {

        return $this->dao->cadastrarConfeiteiro($bean);
    }

    /** Função para popular os atributos, retornando um objetos com os dados
      tratados pelos metodos setters */
    function populaBean($dados) {

        $bean = new ConfeiteiroBean();
        if ($dados['cd_confeiteiro'] != '') {
            $bean->setCdConfeiteiro($dados['cd_confeiteiro']);
        }
        $bean->setNmConfeiteiro($dados['nm_confeiteiro']);
        $bean->setNmEmail($dados['nm_email']);
        $bean->setDsSenha($dados['ds_senha']);
        $bean->setNmRazaoSocial($dados['nm_razao_social']);
        $bean->setNmFantasia($dados['nm_fantasia']);
        $bean->setCdCpf($dados['cd_cpf']);
        $bean->setCdCnpj($dados['cd_cnpj']);
        $bean->setCdInscricaoEstadual($dados['cd_inscricao_estadual']);
        $bean->setDtNascimento($dados['dt_nascimento']);
        $bean->setCdTelefone($dados['cd_telefone']);
        $bean->setCdCelular($dados['cd_celular']);
        $bean->setNmLogradouro($dados['nm_logradouro']);
        $bean->setNmComplemento($dados['nm_complemento']);
        $bean->setNmCidade($dados['nm_cidade']);
        $bean->setNmBairro($dados['nm_bairro']);
        $bean->setCdCep($dados['cd_cep']);
        $bean->setSgUf($dados['sg_uf']);
        $bean->setSgSexo($dados['sg_sexo']);
        $bean->setNmSituacao($dados['nm_situacao']);

        return $bean;
    }

    protected function getDAO() {
        return $this->dao;
    }

}
