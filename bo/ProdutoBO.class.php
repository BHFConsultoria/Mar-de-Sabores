<?php

class ProdutoBO extends AbstractBO {

    private $dao;

    function __construct() {
        $this->dao = new ProdutoDAO();
    }

    function cadastrarProduto($bean) {
        return $this->dao->cadastrarProduto($bean);
    }

    function listaProduto($cdConfeiteiro) {
        return $this->dao->listaProduto($cdConfeiteiro);
    }

    function desativarProduto($cdProduto) {
        return $this->dao->desativarProduto($cdProduto);
    }
    
    function deletarProduto($bean) {
        return $this->dao->deletarProduto($bean);
    }

    function alterarProduto($bean) {
        return $this->dao->alterarProduto($bean);
    }

    function populaBean($dados) {
        $bean = new ProdutoBean();
        if ($dados['cd_produto'] != "") {
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

    function carregaProduto($produto) {
        session_start();

        $_SESSION['cdProduto'] = $produto[0]['cd_produto'];
        $_SESSION['nmProduto'] = $produto[0]['nm_produto'];
        $_SESSION['vlProduto'] = $produto[0]['vl_produto'];
        $_SESSION['dsProduto'] = $produto[0]['ds_produto'];
        $_SESSION['nmTipoProduto'] = $produto[0]['nm_tipo_produto'];
        $_SESSION['nmSituacao'] = $produto[0]['nm_situacao'];
        $_SESSION['nmCategoria'] = $produto[0]['nm_categoria'];
        header("Location: ../../view/produto/produto.php");
    }
    function exibeProduto($produto){
        session_start();
        $_SESSION['nmProduto'] = $produto[0]['nm_produto'];
         header("Location: ../../view/produto/listaProdutoCliente.php");
        return ;
    }

    protected function getDAO() {
        return $this->dao;
    }

}
