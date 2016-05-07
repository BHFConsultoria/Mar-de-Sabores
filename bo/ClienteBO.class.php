<?php

class ClienteBO extends AbstractBO {
    private $dao;
    
      function __construct() {
        $this->dao = new ClienteDAO();
    }
    
    // ------ Funções Sistemas -------//
    
    function cadastrarCliente($bean){
        
        return $this->dao->cadastrarCliente($bean);
    }
    
    function  desativarCliente($bean){
        
        return $this->dao->desativarCliente($bean);
    }

    /** Função para popular os atributos, retornando um objetos com os dados
      tratados pelos metodos setters */
  function  populaBean($dados){
      $bean = new ClienteBean();
      
      if($dados['cd_cliente'] != ""){
          $bean->setCdCliente($dados['cd_cliente']);
      }
            
      $bean->setNmCliente($dados['nm_cliente']);
      $bean->setNmEmail($dados['nm_email']);
      $bean->setDsSenha($dados['ds_senha']);
      $bean->setCdCpf($dados['cd_cpf']);
      $bean->setDtNascimento($dados['dt_nascimento']);
      $bean->setCdTelefone($dados['cd_telefone']);
      $bean->setNmLogradouro($dados['nm_logradouro']);
      $bean->setNmComplemento($dados['nm_complemento']);
      $bean->setNmCidade($dados['nm_cidade']);
      $bean->setNmBairro($dados['nm_bairro']);
      $bean->setCdCep($dados['cd_cep']);
      $bean->setSgUf($dados['sg_uf']);
      $bean->setSgSexo($dados['sg_sexo']);
      $bean->setCdCelular($dados['cd_celular']);
      $bean->setSituacao($dados['nm_situacao']);
      
      return $bean;
      
  }

    protected function getDAO() {
        return $this->dao;
    }

}
