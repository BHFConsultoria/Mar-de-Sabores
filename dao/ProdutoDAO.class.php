<?php

class ProdutoDAO extends AbstractDAO {

    private $con;

    function __construct() {
        $this->con = new Conexao();
    }

    function listaProduto($cdConfeiteiro) {
        try {
            $query = "SELECT * FROM produto WHERE CONFEITEIRO_cd_confeiteiro = ?";
            $pdo = $this->con->getConexao()->prepare($query);
            $pdo->bindValue(1, $cdConfeiteiro);
            $pdo->execute();
            return $pdo->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $ex) {
            echo $ex->getCode(), $ex->getFile(), $ex->getLine(), $ex->getMessage();
        }
    }

    function deletarProduto($cdProduto) {
        try {
            $query = "DELETE FROM produto WHERE cd_produto = ?";
            $pdo = $this->con->getConexao()->prepare($query);
            $pdo->bindValue(1, $cdProduto);
            $pdo->execute();
            if ($pdo->rowCount()) {
                return "Produto Deletada";
            }
        } catch (Exception $ex) {
            echo $ex->getCode(), $ex->getFile(), $ex->getLine(), $ex->getMessage();
        }
    }

    function desativarProduto($cdProduto) {
        try {
            $query = "UPDATE produto SET nm_situacao = 'D' WHERE cd_produto = ?";
            $pdo = $this->con->getConexao()->prepare($query);
            $pdo->bindValue(1, $cdProduto);
            $pdo->execute();

            return "Produto Desativado";
        } catch (Exception $e) {
            echo $e->getCode(), $e->getFile(), $e->getLine(), $e->getMessage();
        }
    }

    function alterarProduto($bean) {
        try {
            $query = "UPDATE produto SET CONFEITEIRO_cd_confeiteiro =?"
                    . ",nm_produto=? ,vl_produto= ? ,ds_produto=? ,"
                    . "nm_tipo_produto=?,nm_situacao=?, nm_categoria= ? "
                    . "where cd_produto = ?";

            $pdo = $this->con->getConexao()->prepare($query);

            $pdo->bindValue(1, $bean->getConfeiteiroCdConfeiteiro());
            $pdo->bindValue(2, $bean->getNmProduto());
            $pdo->bindValue(3, $bean->getVlProduto());
            $pdo->bindValue(4, $bean->getDsProduto());
            $pdo->bindValue(5, $bean->getNmTipoProduto());
            $pdo->bindValue(6, $bean->getNmSituacao());
            $pdo->bindValue(7, $bean->getNmCategoria());
            $pdo->bindValue(8, $bean->getCdProduto());
            $pdo->execute();
            return "Produtos Alterados com sucesso";
        } catch (Exception $ex) {
            echo $ex->getCode(), $ex->getMessage(), $ex->getFile(), $ex->getLine();
        }
    }

    function cadastrarProduto($bean, $img) {
        try {
            $caminhoProjeto = '/datafiles/imagens/produtos/confeiteiro_';
            $caminhoDiretorio = $_SERVER['DOCUMENT_ROOT'] . $caminhoProjeto . $bean->getConfeiteiroCdConfeiteiro();
            
            $extensao = strtolower(substr($img['name'], -4));
            $novo_nome = md5(time()) . $extensao;

            if (!is_dir($caminhoDiretorio)) {
                $resultado = mkdir($caminhoDiretorio, 0777);
            }

            move_uploaded_file($img['tmp_name'], $caminhoDiretorio . '\\' . $novo_nome);
           
            $query = "INSERT INTO produto (CONFEITEIRO_cd_confeiteiro,nm_produto,vl_produto,ds_produto,nm_tipo_produto,nm_situacao,nm_categoria,nm_caminho_imagem)values(?,?,?,?,?,?,?,?)";
            $pdo = $this->con->getConexao()->prepare($query);

            $pdo->bindValue(1, $_SESSION['codigo']);
            $pdo->bindValue(2, $bean->getNmProduto());
            $pdo->bindValue(3, $bean->getVlProduto());
            $pdo->bindValue(4, $bean->getDsProduto());
            $pdo->bindValue(5, $bean->getNmTipoProduto());
            $pdo->bindValue(6, $bean->getNmSituacao());
            $pdo->bindValue(7, $bean->getNmCategoria());
            $pdo->bindValue(8, $caminhoProjeto.$bean->getConfeiteiroCdConfeiteiro().'/'.$novo_nome);

            $pdo->execute();
            
            if ($pdo->rowCount()) {
                return "Produto cadastrado com sucesso";
            }
        } catch (Exception $e) {
            echo $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine();
            exit();
            
        }
    }

    public function buscarProduto($nmProduto) {
        try {
            $query = "SELECT * FROM produto WHERE nm_produto like('%{$nmProduto}%')";

            $pdo = $this->con->getConexao()->prepare($query);

            $pdo->execute();

            $resultado = $pdo->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } catch (Exception $e) {
            echo $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine();
        }
    }

    protected function getTabela() {
        return "produto";
    }

    protected function getPk() {
        return "cd_produto";
    }

    protected function getCon() {
        return $this->con;
    }

}
