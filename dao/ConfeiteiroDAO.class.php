<?php

class ConfeiteiroDAO {
    
    private $con;

    function __construct() {
        $this->con = new Conexao();
    }
    
//    "INSERT INTO confeiteiro (nm_confeiteiro,nm_email,ds_senha,"
//                . "nm_razao_social,nm_fantasia,cd_cpf,cd_cnpj,cd_inscricao_estadual,"
//                . "dt_nascimento,cd_telefone,cd_celular,nm_logradouro,nm_complemento,"
//                . "nm_cidade,nm_bairro,cd_cep,sg_uf,sg_sexo)"
    
    function cadastrarConfeiteiro($bean){
        $tamanho = count($bean);
        $query = "INSERT INTO confeiteiro (nm_confeiteiro,nm_email) values(?,?)";
        
        $pdo = $this->con->getConexao()->prepare($query);
        for($i = 0;$i < $tamanho;$i++ ){
            $pdo->bindValue($i + 1, $bean[$i]);
        }
        $pdo->execute();
        
    }
    
}
