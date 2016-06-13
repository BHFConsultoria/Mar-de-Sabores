<?php

class PedidoBO extends AbstractBO {

    private $dao;

    public function __construct() {
        $this->dao = new PedidoDAO;
    }

    public function cadastrarPedido($bean,$dados) {
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d');
        
        $this->dao->cadastrarPedido($dados,$data,$bean);
        $qtPedidos = $this->dao->qtPedidos();
        $this->dao->cadastrarProdutoPedido($bean,$data,$qtPedidos);
        
        return true;
    }
    
    public function buscarPedidoByCliente($cdCliente){
        
        return $this->dao->buscarPedidoByCliente($cdCliente);
        
    }
    
    public function buscarPedidoByConfeiteiro($cdConfeiteiro){
        
        return $this->dao->buscarPedidoByConfeiteiro($cdConfeiteiro);
        
    }
    
    protected function getDAO() {
        return $this->dao;
    }

}
