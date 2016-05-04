<?php

class ClienteDAO {
    private $con;
    
    function __construct() {
        $this->con = new Conexao();
    }

    function deletarCliente($cdCliente){
        try {
                    
        } catch (Exception $ex) {
            
        }
    }
    
    function alterarCliente($bean){
        
    }
    
    function cadastrarCliente($bean){
        
        try {
         $query = "INSERT INTO cliente (nm_cliente,nm_email,ds_senha, cd_cpf, dt_nascimento, cd_telefone, nm_logradouro, nm_complemento, nm_cidade, nm_bairro, cd_cep, sg_uf, sg_sexo,cd_celular)
VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,? )";
         $pdo  = $this->con->getConexao()->prepare($query);
         
         $pdo->bindValue(1, $bean->getNmCliente());
         $pdo->bindValue(2, $bean->getNmEmail());
         $pdo->bindValue(3, $bean->getDsSenha());
         $pdo->bindValue(4, $bean->getCdCpf());
         $pdo->bindValue(5, $bean->getDtNascimento());
         $pdo->bindValue(6, $bean->getCdTelefone());
         $pdo->bindValue(7, $bean->getNmLogradouro());
         $pdo->bindValue(8, $bean->getNmComplemento());
         $pdo->bindValue(9, $bean->getNmCidade());
         $pdo->bindValue(10, $bean->getNmBairro());
         $pdo->bindValue(11, $bean->getCdCep());
         $pdo->bindValue(12, $bean->getSgUf());
         $pdo->bindValue(13, $bean->getSgSexo());
         $pdo->bindValue(14, $bean->getCdCelular());
         $pdo->execute();

         if($pdo->rowCount()){
             return "Cliente Cadastrado";
         }
        } catch (Exception $e) {
            echo $e->getCode(),$e->getMessage(),$e->getFile(),$e->getLine();
        }  
    }
}
