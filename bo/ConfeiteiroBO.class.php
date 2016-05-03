<?php

class ConfeiteiroBO {

    private $dao;

    function __construct() {
        $this->dao = new ConfeiteiroDAO();
    }

    //----------Funções Sistemas----------//
    function cadastrarConfeiteiro($bean) {
        
        return $this->dao->cadastrarConfeiteiro($bean);
        
    }

    /** Função para popular os atributos, retornando um objetos com os dados
      tratados pelos metodos setters */
    function populaBean($dados) {

        $bean = new ConfeiteiroBean();

        $bean->setNmConfeiteiro($dados['nmConfeiteiro']);
        $bean->setNmEmail($dados['nmEmail']);
        $bean->setDsSenha($dados['dsSenha']);
        $bean->setNmRazaoSocial($dados['nmRazaoSocial']);
        $bean->setNmFantasia($dados['nmFantasia']);
        $bean->setCdCpf($dados['cdCpf']);
        $bean->setCdCnpj($dados['cdCnpj']);
        $bean->setCdInscricaoEstadual($dados['cdInscricaoEstadual']);
        $bean->setDtNascimento($dados['dtNascimento']);
        $bean->setCdTelefone($dados['cdTelefone']);
        $bean->setCdCelular($dados['cdCelular']);
        $bean->setNmLogradouro($dados['nmLogradouro']);
        $bean->setNmComplemento($dados['nmComplemento']);
        $bean->setNmCidade($dados['nmCidade']);
        $bean->setNmBairro($dados['nmBairro']);
        $bean->setCdCep($dados['cdCep']);
        $bean->setSgUf($dados['sgUf']);
        $bean->setSgSexo($dados['sgSexo']);

        return $bean;
    }

}
