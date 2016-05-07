<?php

class ClienteBO {
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
      
      $bean->setCdCliente($dados['cdCliente']);
      $bean->setNmCliente($dados['nmCliente']);
      $bean->setNmEmail($dados['nmEmail']);
      $bean->setDsSenha($dados['dsSenha']);
      $bean->setCdCpf($dados['cdCpf']);
      $bean->setDtNascimento($dados['dtNascimento']);
      $bean->setCdTelefone($dados['cdTelefone']);
      $bean->setNmLogradouro($dados['nmLogradouro']);
      $bean->setNmComplemento($dados['nmComplemento']);
      $bean->setNmCidade($dados['nmCidade']);
      $bean->setNmBairro($dados['nmBairro']);
      $bean->setCdCep($dados['cdCep']);
      $bean->setSgUf($dados['sgUf']);
      $bean->setSgSexo($dados['sgSexo']);
      $bean->setCdCelular($dados['cdCelular']);
      
      return $bean;
      
  }

        
}
