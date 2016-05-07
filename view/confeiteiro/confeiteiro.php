<?php

include_once '../../controller/confeiteiro/confeiteiroController.php';

?>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="../../controller/confeiteiro/confeiteiroController.php" method="post" >
            <table border = "1">
                <tr><td>
                        <input type="hidden" name="cdConfeiteiro" id="cdConfeiteiro" value="">
                        Nome:<input type="text" name="nmConfeiteiro" value="" />
                    </td>
                </tr>
                <tr><td>Senha:<input type="text" name="dsSenha" /></td></tr>
                <tr><td>Razão Social:<input type="text" name="nmRazaoSocial" /></td></tr>
                <tr><td>Nome Fantasia:<input type="text" name="nmFantasia" /></td></tr>
                <tr><td>CPF:<input type="text" name="cdCpf" /></td></tr>
                <tr><td>CNPJ:<input type="text" name="cdCnpj" /></td></tr>
                <tr><td>Inscrição Estadual:<input type="text" name="cdInscricaoEstadual" /></td></tr>
                <tr><td>Data de Nascimento:<input type="date" name="dtNascimento" /></td></tr>
                <tr><td>Telefone:<input type="text" name="cdTelefone" /></td></tr>
                <tr><td>Celular:<input type="text" name="cdCelular" /></td></tr>
                <tr><td>Logradouro:<input type="text" name="nmLogradouro" /></td></tr>
                <tr><td>Complemento:<input type="text" name="nmComplemento" /></td></tr>
                </tr><td>Cidade:<input type="text" name="nmCidade" /></td><tr>
                </tr><td>Bairro:<input type="text" name="nmBairro" /></td><tr>
                </tr><td>CEP:<input type="text" name="cdCep" /></td><tr>
                </tr><td>UF:<input type="text" name="sgUf" /></td></tr>
                <tr><td>Sexo:<input type="text" name="sgSexo" /></td></tr>
                <tr><td><input type="submit" name="acao" value="alterar" /></td></tr>
                
                <?php if ($acao == 'alterarDados'){ ?>
                <tr><td>
                        <input type="hidden" name="cdConfeiteiro" id="cdConfeiteiro" value="">
                        Nome:<input type="text" name="nmConfeiteiro" value="" />
                    </td>
                </tr>
                <tr><td>Senha:<input type="text" name="dsSenha" value="<?=$bean->get?>"/></td></tr>
                <tr><td>Razão Social:<input type="text" name="nmRazaoSocial" value="<?=$bean->get?>"/></td></tr>
                <tr><td>Nome Fantasia:<input type="text" name="nmFantasia" value="<?=$bean->get?>"/></td></tr>
                <tr><td>CPF:<input type="text" name="cdCpf" value="<?=$bean->get?>"/></td></tr>
                <tr><td>CNPJ:<input type="text" name="cdCnpj" value="<?=$bean->get?>"/></td></tr>
                <tr><td>Inscrição Estadual:<input type="text" name="cdInscricaoEstadual" value="<?=$bean->get?>"/></td></tr>
                <tr><td>Data de Nascimento:<input type="date" name="dtNascimento" value="<?=$bean->get?>"/></td></tr>
                <tr><td>Telefone:<input type="text" name="cdTelefone" value="<?=$bean->get?>"/></td></tr>
                <tr><td>Celular:<input type="text" name="cdCelular" value="<?=$bean->get?>"/></td></tr>
                <tr><td>Logradouro:<input type="text" name="nmLogradouro" value="<?=$bean->get?>"/></td></tr>
                <tr><td>Complemento:<input type="text" name="nmComplemento" value="<?=$bean->get?>"/></td></tr>
                <tr><td>Cidade:<input type="text" name="nmCidade" value="<?=$bean->get?>"/></td></tr>
                <tr><td>Bairro:<input type="text" name="nmBairro" value="<?=$bean->get?>"/></td></tr>
                <tr><td>CEP:<input type="text" name="cdCep" value="<?=$bean->get?>"/></td></tr>
                <tr><td>UF:<input type="text" name="sgUf" value="<?=$bean->get?>"/></td></tr>
                <tr><td>Sexo:<input type="text" name="sgSexo" value="<?=$bean->get?>"/></td></tr>
                <tr><td><input type="submit" name="acao" value="alterar" /></td></tr>
                <?php } ?>
                
            </table>            
        </form>
    </body>
</html>
