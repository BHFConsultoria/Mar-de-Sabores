<?php 
include_once '../../controller/cliente/clienteController.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form name="Cadastro" action="../../controller/cliente/clienteController.php" Method="POST" >
            <table border = "1">
                
                <?php 
                    if ($acao == 'alterarDados'){
                ?>
                
                    <tr>
                    <td><input type="hidden" name="cdCliente" id="cdCliente" value="<?=$bean->getCdCliente()?>">
                        Nome:<input type="text" name="nmCliente" value="<?=$bean->getNmCliente()?>"/></td>
                <tr>
                </tr>
                <td>E-mail:<input type="text" name="nmEmail" value="<?=$bean->getNmEmail()?>" /></td>
                <tr>
                </tr>
                <td>Senha:<input type="text" name="dsSenha" value="<?=$bean->getDsSenha()?>" /></td>
                <tr>
                </tr>
                <td>CPF:<input type="text" name="cdCpf" value="<?=$bean->getCdCpf()?>" /></td>
                <tr>                    
                </tr>
                <td>Data de Nascimento:<input type="date" value="<?=$bean->getDtNascimento()?>" name="dtNascimento" /></td>
                <tr>
                </tr>
                <td>Telefone:<input type="text" name="cdTelefone" value="<?=$bean->getCdTelefone()?>" /></td>
                <tr>
                </tr>
                <td>Celular:<input type="text" name="cdCelular" value="<?=$bean->getCdCelular()?>" /></td>
                <tr>
                </tr>
                <td>Logradouro:<input type="text" name="nmLogradouro" value="<?=$bean->getNmLogradouro()?>" /></td>
                <tr>
                </tr>
                <td>Complemento:<input type="text" name="nmComplemento" value="<?=$bean->getNmComplemento()?>" /></td>
                <tr>
                </tr>
                <td>Cidade:<input type="text" name="nmCidade"  value="<?=$bean->getNmCidade()?>"/></td>
                <tr>
                </tr>
                <td>Bairro:<input type="text" name="nmBairro"  value="<?=$bean->getNmBairro()?>"/></td>
                <tr>
                </tr>
                <td>CEP:<input type="text" name="cdCep" value="<?=$bean->getCdCep()?>" /></td>
                <tr>
                </tr>
                <td>UF:<input type="text" name="sgUf" value="<?=$bean->getSgUf()?>" /></td>
                <tr>
                </tr>
                <tr>
                    <td>Sexo:<input type="text" name="sgSexo" value="<?=$bean->getSgSexo()?>" /></td>
                </tr>
                <tr>
                    <td><input type="submit" name="acao" value="alterar" /></td>
                </tr>
                
                    <?php } else { ?>
                <tr>
                    <td><input type="hidden" name="cdConfeiteiro" id="cdCliente" value="">
                        Nome:<input type="text" name="nmCliente" /></td>
                <tr>
                </tr>
                <td>E-mail:<input type="text" name="nmEmail" /></td>
                <tr>
                </tr>
                <td>Senha:<input type="text" name="dsSenha" /></td>
                <tr>
                </tr>
                <td>CPF:<input type="text" name="cdCpf" /></td>
                <tr>                    
                </tr>
                <td>Data de Nascimento:<input type="date" name="dtNascimento" /></td>
                <tr>
                </tr>
                <td>Telefone:<input type="text" name="cdTelefone" /></td>
                <tr>
                </tr>
                <td>Celular:<input type="text" name="cdCelular" /></td>
                <tr>
                </tr>
                <td>Logradouro:<input type="text" name="nmLogradouro" /></td>
                <tr>
                </tr>
                <td>Complemento:<input type="text" name="nmComplemento" /></td>
                <tr>
                </tr>
                <td>Cidade:<input type="text" name="nmCidade" /></td>
                <tr>
                </tr>
                <td>Bairro:<input type="text" name="nmBairro" /></td>
                <tr>
                </tr>
                <td>CEP:<input type="text" name="cdCep" /></td>
                <tr>
                </tr>
                <td>UF:<input type="text" name="sgUf" /></td>
                <tr>
                </tr>
                <tr>
                    <td>Sexo:<input type="text" name="sgSexo" /></td>
                </tr>
                <tr>
                    <td><input type="submit" name="acao" value="cadastrar" /></td>
                </tr>
                
                    <?php } ?>
            </table>           
        </form>
    </body>
</html>



