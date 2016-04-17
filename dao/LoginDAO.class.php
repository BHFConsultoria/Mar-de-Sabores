<?php

class LoginDAO {

    private $con;

    function __construct() {
        $this->con = new Conexao();
    }

    function verificaLogin($nmEmail, $dsSenha,$tpUsuario) {
        try {
            $query = "SELECT * FROM {$tpUsuario} WHERE nm_email = ? AND ds_senha = ?";

            $pdo = $this->con->getConexao()->prepare($query);
            $pdo->bindValue(1, "$nmEmail");
            $pdo->bindValue(2, "$dsSenha");
            
            $pdo->execute();
            
            $resultado = $pdo->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultado;
        } catch (Exception $e) {
            
        }
    }

}
