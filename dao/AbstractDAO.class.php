<?php

abstract class AbstractDAO {

    abstract protected function getTabela();

    abstract protected function getPk();
    
    abstract protected function getCon();
    
    public function findByPk($pk) {

        $query = "SELECT * FROM {$this->getTabela()} WHERE {$this->getPk()} = ?";
        $pdo = $this->getCon()->getConexao()->prepare($query);
        $pdo->bindValue(1, $pk);
        $pdo->execute();

        $dados = $pdo->fetchAll(PDO::FETCH_ASSOC);

        return $dados;
    }
    
    public function listAll(){
        
        $query = "SELECT * FROM {$this->getTabela()}";
        $pdo = $this->getCon()->getConexao()->prepare($query);
        $pdo->execute();
        
        $dados = $pdo->fetchAll(PDO::FETCH_ASSOC);
        
        return $dados;
    }

}
