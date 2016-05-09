<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>    
        <script src="view/js/jquery-2.2.2.js" type='text/javascript'></script>
        <script src="view/js/funcoes.js" type='text/javascript'></script>
        <link rel="stylesheet" href="view/bootstrap/css/bootstrap.css">
    </head>
    <body>
        <table class="table-bordered">
            <form action="controller/login/login.php">
                <tr>
                    <td class="col-md-6">E-mail:<input type="text" name="nmEmail" id="nmEmail"></td>
                    <td class="col-md-6">Senha:<input type="password" name="dsSenha" id="dsSenha"></td>
                    <td class="col-md-6">Selecione:
                        <select name="tpUsuario" id="tpUsuario">
                            <option value=""></option>
                            <option value="cliente">Cliente</option>
                            <option value="confeiteiro">Confeiteiro</option>
                        </select>
                    </td>
                    <td class="col-md-6"><input type="submit" name="enviar" id="enviar"></td>
                </tr>
            </form>
            
            <tr>
                </tr><td><a href="view/confeiteiro/confeiteiro.php">Cadastro Confeiteiro</a></td>               
                <td><a href="view/confeiteiro/listaConfeiteiro.php">Listar Confeiteiros</a></td>
                <td><a href="view/produto/listaProduto.php">Listar Produtos</a></td>
            </tr>
        </table>
    </body>
</html>
