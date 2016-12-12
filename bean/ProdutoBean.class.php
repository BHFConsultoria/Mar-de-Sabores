<?php

class ProdutoBean {
   private $cdProduto;
   private $confeiteiroCdConfeiteiro;
   private $nmProduto;
   private $vlProduto;
   private $nmCategoria;
   private $dsProduto;
   private $nmTipoProduto;
   private $nmSituacao;
   
   function getCdProduto() {
       return $this->cdProduto;
   }

   function getConfeiteiroCdConfeiteiro() {
       return $this->confeiteiroCdConfeiteiro;
   }

   function getNmProduto() {
       return $this->nmProduto;
   }

   function getVlProduto() {
       return $this->vlProduto;
   }

   function getNmCategoria() {
       return $this->nmCategoria;
   }

   function getDsProduto() {
       return $this->dsProduto;
   }

   function getNmTipoProduto() {
       return $this->nmTipoProduto;
   }

   function getNmSituacao() {
       return $this->nmSituacao;
   }

   function setCdProduto($cdProduto) {
       $this->cdProduto = $cdProduto;
   }

   function setConfeiteiroCdConfeiteiro($confeiteiroCdConfeiteiro) {
       $this->confeiteiroCdConfeiteiro = $confeiteiroCdConfeiteiro;
   }

   function setNmProduto($nmProduto) {
       $this->nmProduto = $nmProduto;
   }

   function setVlProduto($vlProduto) {
       $this->vlProduto = $vlProduto;
   }

   function setNmCategoria($nmCategoria) {
       $this->nmCategoria = $nmCategoria;
   }

   function setDsProduto($dsProduto) {
       $this->dsProduto = $dsProduto;
   }

   function setNmTipoProduto($nmTipoProduto) {
       $this->nmTipoProduto = $nmTipoProduto;
   }

   function setNmSituacao($nmSituacao) {
       $this->nmSituacao = $nmSituacao;
   }


   }
