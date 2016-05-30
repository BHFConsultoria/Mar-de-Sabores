<?php

abstract class AbstractBO {

    abstract protected function getDAO();

    /** Função para buscar um registro na tabela pela sua chave primária. */

    public function findByPk($pk) {
        $dados = $this->getDAO()->findByPk($pk);

        return $dados;
    }

    /*     * Função para listar todos os registros de uma tabela. */

    public function listAll() {
        $dados = $this->getDAO()->listAll();

        return $dados;
    }
    
    /** Função para verificar se já exite cadastro com esse email. */
    public function findEmailByEmail($nmEmail){
        
        $resultado = $this->getDAO()->findEmailByEmail($nmEmail);
        
        session_start();
        
        if($_SESSION['nmEmail'] == $resultado[0]['nm_email']){
            return true;
        }else if(!empty($resultado)){
            echo "<script>alert('Este email já possui cadastro em nosso sistema')</script>";
            echo "<script>window.location.assign('../../index.php')</script>";
            return exit();
        }
        
    }
    
    /** Função para verificar se o cpf já está cadastrado */
    public function findCpfByCpf($cdCpf){
        $resultado = $this->getDAO()->findCpfByCpf($cdCpf);
        
        session_start();
        
        if($_SESSION['cdCpf'] == $resultado[0]['cd_cpf']){
            return true;
        }else if(!empty($resultado)){
            echo "<script>alert('Este cpf já está cadastrado em nosso sistema')</script>";
            echo "<script>window.location.assign('../../index.php')</script>";
            return exit();
        }
        
    }
    
    /** Função para verificar se o cpf já está cadastrado */
    public function findCnpjByCnpj($cdCnpj){
        
        $resultado = $this->getDAO()->findCnpjByCnpj($cdCnpj);
        
        session_start();
        
        if($_SESSION['cdCnpj'] == $resultado[0]['cd_cnpj']){
            return true;
        }else if(!empty($resultado)){
            echo "<script>alert('Este cnpj já está cadastrado em nosso sistema')</script>";
            echo "<script>window.location.assign('../../index.php')</script>";
            return exit();;
        }
        
    }
    
}