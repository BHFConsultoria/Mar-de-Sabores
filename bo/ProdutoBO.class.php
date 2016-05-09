<?php

class ProdutoBO extends AbstractBO{
  private $dao;
  
  function __construct() {
      $this->dao = new ProdutoDAO();
  }
  function cadastrarProduto($bean){
      return $this->dao->cadastrarProduto($bean);
  }
  function desativarProduto($bean){
      return $this->dao->desativarProduto($bean);
  }
  function deletarProduto($bean){
      return $this->dao->deletarProduto($bean);
  }
  function alterarProduto($bean){
      return $this->dao->alterarProduto($bean);
  }
          function populaBean($dados){
      $bean = new ProdutoBean();
      if($dados['cd_produto'] != ""){
          $bean->setCdProduto($dados['cd_produto']);
          } 
          $bean->setConfeiteiroCdConfeiteiro($dados['CONFEITEIRO_cd_confeiteiro']);
          $bean->setNmProduto($dados['nm_produto']);
          $bean->setVlProduto($dados['vl_produto']);
          $bean->setNmCategoria($dados['nm_categoria']);
          $bean->setDsProduto($dados['ds_produto']);
          $bean->setNmTipoProduto($dados['nm_tipo_produto']);
          $bean->setNmSituacao($dados['nm_situacao']);
          
          return $bean;
      
  }
    protected function getDAO(){
          return $this->dao;
      }
}
