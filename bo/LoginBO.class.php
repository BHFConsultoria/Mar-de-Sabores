<?php

class LoginBO {
    
    private $dao;
    
    private $nmEmail;
    private $dsSenha;
    
    function __construct() {
        $this->dao = new LoginDAO();
    }

    function verificaLogin($nmEmail,$dsSenha,$tpUsuario){        
        $this->setNmEmail($nmEmail);
        $this->setDsSenha($dsSenha);
        
        $resultado = $this->dao->verificaLogin($this->nmEmail, $this->dsSenha,$tpUsuario);
        
        if(empty($resultado)){
            echo "usuário nao encontrado";
        }else{
            echo "usuário encontrado";
            var_dump(md5($resultado[0]['ds_senha']));
        }
        
    }
    
    function setNmEmail($nmEmail) {
        $this->nmEmail = $nmEmail;      
    }

    function setDsSenha($dsSenha) {
        $this->dsSenha = $dsSenha;
    }


}
