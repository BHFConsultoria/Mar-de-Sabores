<?php

class PedidoBean {
    
    private $cdProdutoPedido;
    private $dtPedido;
    private $vlPedido;
    private $vlTroco;

    function getCdProdutoPedido() {
        return $this->cdProdutoPedido;
    }

    function getDtPedido() {
        return $this->dtPedido;
    }

    function getVlPedido() {
        return $this->vlPedido;
    }

    function getVlTroco() {
        return $this->vlTroco;
    }

    function setCdProdutoPedido($cdProdutoPedido) {
        $this->cdProdutoPedido = $cdProdutoPedido;
    }

    function setDtPedido($dtPedido) {
        $this->dtPedido = $dtPedido;
    }

    function setVlPedido($vlPedido) {
        $this->vlPedido = $vlPedido;
    }

    function setVlTroco($vlTroco) {
        $this->vlTroco = $vlTroco;
    }



}
