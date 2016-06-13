<?php

class PedidoDAO extends AbstractDAO {

    private $con;

    function __construct() {
        $this->con = new Conexao();
    }

    public function cadastrarPedido($dados, $data, $bean) {

        try {

            $query = "INSERT INTO pedido (CLIENTE_cd_cliente"
                    . ",CONFEITEIRO_cd_confeiteiro, dt_pedido, vl_pedido) "
                    . "values(?,?,?,?)";
            $pdo = $this->con->getConexao()->prepare($query);

            $pdo->bindValue(1, $dados['cd_cliente']);
            $pdo->bindValue(2, $dados['cd_confeiteiro']);
            $pdo->bindValue(3, $data);
            //Valor do pedido está igual ao valor do produto, isso é parcial,
            //até o sistema estiver completo e aceitar mais de um produto p/ pedido
            $pdo->bindValue(4, $bean->getVlProduto());

            $pdo->execute();

        } catch (Exception $e) {
            echo $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine();
        }
    }

    public function cadastrarProdutoPedido($bean, $data, $qtPedidos) {

        try {

            $query = "INSERT INTO produto_pedido (PRODUTO_cd_produto"
                    . ",nm_produto, vl_produto, ds_produto, nm_tipo_produto"
                    . ",dt_pedido, vl_pedido,PEDIDO_cd_pedido) "
                    . "values(?,?,?,?,?,?,?,?)";
            $pdo = $this->con->getConexao()->prepare($query);

            $pdo->bindValue(1, $bean->getCdProduto());
            $pdo->bindValue(2, $bean->getNmProduto());
            $pdo->bindValue(3, $bean->getVlProduto());
            $pdo->bindValue(4, $bean->getDsProduto());
            $pdo->bindValue(5, $bean->getNmTipoProduto());
            $pdo->bindValue(6, $data);
            //Valor do pedido está igual ao valor do produto, isso é parcial,
            //até o sistema estiver completo e aceitar mais de um produto p/ pedido
            $pdo->bindValue(7, $bean->getVlProduto());
            $pdo->bindValue(8, $qtPedidos['COUNT(*)']);

            $pdo->execute();
            
            return true;

        } catch (Exception $e) {
            echo $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine();
        }
    }
    
    public function deletarPedido($cdPedido) {

        try {

            $query = "DELETE FROM pedido WHERE cd_pedido = ?";
            $pdo = $this->con->getConexao()->prepare($query);

            $pdo->bindValue(1, $cdPedido);

            $pdo->execute();
            
            return true;

        } catch (Exception $e) {
            echo $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine();
        }
    }

    public function deletarProdutoPedido($cdPedido) {

        try {

            $query = "DELETE FROM produto_pedido WHERE PEDIDO_cd_pedido = ?";
            $pdo = $this->con->getConexao()->prepare($query);

            $pdo->bindValue(1, $cdPedido);

            $pdo->execute();
            
            return true;

        } catch (Exception $e) {
            echo $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine();
        }
    }

    public function qtPedidos() {
        try {
            $query = "SELECT COUNT(*) FROM pedido";

            $pdo = $this->con->getConexao()->prepare($query);

            $pdo->execute();

            $qtPedido = $pdo->fetch(PDO::FETCH_ASSOC);

            return $qtPedido;
        } catch (Exception $ex) {
            echo $e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine();
        }
    }

    public function buscarPedidoByCliente($cdCliente) {

        $query = "select a.* , b.*, c.nm_confeiteiro from pedido a "
                . "inner join produto_pedido b "
                . "on (b.PEDIDO_cd_pedido = a.cd_pedido) "
                . "inner join confeiteiro c "
                . "on (c.cd_confeiteiro = a.CONFEITEIRO_cd_confeiteiro) "
                . "where a.CLIENTE_cd_cliente = ?";

        $pdo = $this->con->getConexao()->prepare($query);

        $pdo->bindValue(1, $cdCliente);

        $pdo->execute();

        $pedidos = $pdo->fetchAll(PDO::FETCH_ASSOC);

        return $pedidos;
    }
    
    public function buscarPedidoByConfeiteiro($cdConfeiteiro) {

        $query = "select a.* , b.*, c.nm_cliente from pedido a "
                . "inner join produto_pedido b "
                . "on (b.PEDIDO_cd_pedido = a.cd_pedido) "
                . "inner join cliente c "
                . "on (c.cd_cliente = a.CLIENTE_cd_cliente) "
                . "where a.CONFEITEIRO_cd_confeiteiro = ?";

        $pdo = $this->con->getConexao()->prepare($query);

        $pdo->bindValue(1, $cdConfeiteiro);

        $pdo->execute();

        $pedidos = $pdo->fetchAll(PDO::FETCH_ASSOC);

        return $pedidos;
    }
    
    protected function getCon() {
        return $this->con;
    }

    protected function getPk() {
        return "cd_produto_pedido";
    }

    protected function getTabela() {
        return "produto_pedido";
    }

//put your code here
}
