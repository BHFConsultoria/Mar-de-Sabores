<?php

abstract class AbstractBO {

    abstract protected function getDAO();

    /** Função para buscar um registro na tabela pela sua chave primária. */
    public function findByPk($pk) {
        $dados = $this->getDAO()->findByPk($pk);

        return $dados;
    }


    /** Função para listar todos os registros de uma tabela */
    public function listAll() {
        $dados = $this->getDAO()->listAll();

        return $dados;
    }
    
    /** Função para verificar se já exite cadastro com esse email. */
    public function findEmailByEmail($nmEmail){
        
        $resultado = $this->getDAO()->findEmailByEmail($nmEmail);
        
        if(empty($resultado)){
            return true;
        }else{
            echo "<script>alert('Este email já possui cadastro em nosso sistema')</script>";
            return false;;
        }
        
    }
    
}
