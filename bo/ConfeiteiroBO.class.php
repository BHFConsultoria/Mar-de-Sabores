<?php


class ConfeiteiroBO {
    
    private $dao;
    
    private $nmConfeiteiro;
    private $nmEmail;
    
    function __construct() {
        $this->dao = new ConfeiteiroDAO();
    }
    
    function cadastrarConfeiteiro($bean){
        $this->dao->cadastrarConfeiteiro($bean);
    }
    
    function setNmConfeiteiro($nmConfeiteiro) {
        $this->nmConfeiteiro = $nmConfeiteiro;
    }

    function setNmEmail($nmEmail) {
        $this->nmEmail = $nmEmail;
    }

}
