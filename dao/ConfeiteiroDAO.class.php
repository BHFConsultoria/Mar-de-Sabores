<?php

class ConfeiteiroDAO extends AbstractDAO {

    private $con;

    function __construct() {
        $this->con = new Conexao();
    }

    public function cadastrarConfeiteiro($bean) {
        try {
            $query = "INSERT INTO confeiteiro (nm_confeiteiro,nm_email,ds_senha,"
                    . "nm_razao_social,nm_fantasia,cd_cpf,cd_cnpj,cd_inscricao_estadual,"
                    . "dt_nascimento,cd_telefone,cd_celular,nm_logradouro,nm_complemento,"
                    . "nm_cidade,nm_bairro,cd_cep,sg_uf,sg_sexo,nm_situacao) "
                    . "values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $pdo = $this->con->getConexao()->prepare($query);

            $pdo->bindValue(1, $bean->getNmConfeiteiro());
            $pdo->bindValue(2, $bean->getNmEmail());
            $pdo->bindValue(3, $bean->getDsSenha());
            $pdo->bindValue(4, $bean->getNmRazaoSocial());
            $pdo->bindValue(5, $bean->getNmFantasia());
            $pdo->bindValue(6, $bean->getCdCpf());
            $pdo->bindValue(7, $bean->getCdCnpj());
            $pdo->bindValue(8, $bean->getCdInscricaoEstadual());
            $pdo->bindValue(9, $bean->getDtNascimento());
            $pdo->bindValue(10, $bean->getCdTelefone());
            $pdo->bindValue(11, $bean->getCdCelular());
            $pdo->bindValue(12, $bean->getNmLogradouro());
            $pdo->bindValue(13, $bean->getNmComplemento());
            $pdo->bindValue(14, $bean->getNmCidade());
            $pdo->bindValue(15, $bean->getNmBairro());
            $pdo->bindValue(16, $bean->getCdCep());
            $pdo->bindValue(17, $bean->getSgUf());
            $pdo->bindValue(18, $bean->getSgSexo());
            $pdo->bindValue(19, $bean->getNmSituacao());

            $pdo->execute();

            if ($pdo->rowCount()) {
                return "Cadastro realizado com sucesso";
            }
        } catch (Exception $e) {
            echo $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine();
        }
    }
    
    public function alterarConfeiteiro($bean){
        try{
            var_dump($bean);
            $query = "UPDATE confeiteiro SET nm_confeiteiro = ?, nm_email = ?,"
                    . "ds_senha = ?, nm_razao_social = ?, nm_fantasia = ?,"
                    . "cd_cpf = ?, cd_cnpj = ?, cd_inscricao_estadual = ?,"
                    . "dt_nascimento = ?, cd_telefone = ?, cd_celular = ?,"
                    . "nm_logradouro = ?, nm_complemento = ?, nm_cidade = ?,"
                    . "nm_bairro = ?, cd_cep = ?, sg_uf = ?, sg_sexo = ? "
                    . "WHERE cd_confeiteiro = ?";
            
            $pdo = $this->con->getConexao()->prepare($query);
            
            $pdo->bindValue(1, $bean->getNmConfeiteiro());
            $pdo->bindValue(2, $bean->getNmEmail());
            $pdo->bindValue(3, $bean->getDsSenha());
            $pdo->bindValue(4, $bean->getNmRazaoSocial());
            $pdo->bindValue(5, $bean->getNmFantasia());
            $pdo->bindValue(6, $bean->getCdCpf());
            $pdo->bindValue(7, $bean->getCdCnpj());
            $pdo->bindValue(8, $bean->getCdInscricaoEstadual());
            $pdo->bindValue(9, $bean->getDtNascimento());
            $pdo->bindValue(10, $bean->getCdTelefone());
            $pdo->bindValue(11, $bean->getCdCelular());
            $pdo->bindValue(12, $bean->getNmLogradouro());
            $pdo->bindValue(13, $bean->getNmComplemento());
            $pdo->bindValue(14, $bean->getNmCidade());
            $pdo->bindValue(15, $bean->getNmBairro());
            $pdo->bindValue(16, $bean->getCdCep());
            $pdo->bindValue(17, $bean->getSgUf());
            $pdo->bindValue(18, $bean->getSgSexo());
            $pdo->bindValue(19, $bean->getCdConfeiteiro());
            
            $pdo->execute();
            
           // return "Dados alterados com sucesso";
            
        } catch (Exception $ex) {
            echo $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine();
        }
    }
    
    public function desativarConfeiteiro($cdConfeiteiro) {
        try {

            $query = "UPDATE confeiteiro SET nm_situacao = 'D' WHERE cd_confeiteiro = ?";

            $pdo = $this->con->getConexao()->prepare($query);

            $pdo->bindValue(1, $cdConfeiteiro);

            $pdo->execute();
            
            return "Confeiteiro desativado com sucesso";
            
        } catch (Exception $e) {
            echo $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine();
        }
    }

    protected function getTabela() {
        return "confeiteiro";
    }

    protected function getPk() {
        return "cd_confeiteiro";
    }

    protected function getCon() {
        return $this->con;
    }

}
