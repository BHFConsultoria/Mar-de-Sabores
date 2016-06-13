<?php

require_once '../../config.inc.php';

session_start();

//-------------------------------------------------------//
//-------Onde estiver comentado, deve ser alterado-------//
//-------------------------------------------------------//

$bo = new PedidoBO();
$boProduto = new ProdutoBO();

$acao = $_REQUEST['acao'];

if ($acao == 'cadastrar') {
$dados = [
    'cd_confeiteiro' => $_POST['cdConfeiteiro'],
    'cd_cliente' => $_POST['cdCliente'],
    'cd_produto' => $_POST['cdProduto']
];
}

switch ($acao) {

    case 'cadastrar':
        $produto = $boProduto->findByPk($dados['cd_produto']);
        $bean = $boProduto->populaBean($produto[0]);
        $bo->cadastrarPedido($bean,$dados);
        echo "<script>alert('Pedido realizado com sucesso!')</script>";
        echo "<script>window.location.assign('../../view/pedido/indexPedido.php')</script>";
        break;

    case 'deletar':
        $dao = new PedidoDAO();
        $dao->deletarProdutoPedido($_POST['cdPedido']);
        $dao->deletarPedido($_POST['cdPedido']);
        echo "<script>alert('Pedido excluído com sucesso!')</script>";
        echo "<script>window.location.assign('../../view/pedido/indexPedido.php')</script>";
        break;

}

