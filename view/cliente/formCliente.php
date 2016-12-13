<?php
if (!isset($_SESSION)) {
    session_start();
}
$menuCadas = 1;
?>
<!DOCTYPE html>
<?php include_once 'cabecalhoCliente.php'; ?>
<!-- /Section: intro -->

<!-- Section: Formulario PF -->
<section id="contact" class="home-section text-center">
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-offset-2">
                    <?php if (isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'alterar') { ?>
                        <div class="section-heading">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <h2>alterar cliente</h2>
                            </div>
                            <p class="wow lightSpeedIn" data-wow-delay="0.3s">Atualize seus dados em nossa rede.</p>
                        </div> 
                    <?php } else { ?>
                        <div class="section-heading">
                            <div class="wow bounceInDown" data-wow-delay="0.4s">
                                <h2>cadastro cliente</h2>
                            </div>
                            <p class="wow lightSpeedIn" data-wow-delay="0.3s">Em poucos minutos você fazerá parte de nossa rede.</p>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
                <div class="form-wrapper marginbot-50">
                    <form id="contact-form" method="POST" action="../../controller/cliente/clienteController.php">
                        <div class="row">

                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nmCliente" value="<?= isset($_SESSION['nome']) ? $_SESSION['nome'] : ''; ?>" name="nmCliente" placeholder="Seu nome" title="Aqui é seu nome" required="required"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <select class="form-control" id="sgSexo" name="sgSexo">
                                        <option value="<?= isset($_SESSION['sgSexo']) ? $_SESSION['sgSexo'] : ''; ?>">
                                            <?php
                                            if (isset($_SESSION['sgSexo'])) {
                                                if ($_SESSION['sgSexo'] == 'F') {
                                                    echo 'Feminino';
                                                } elseif ($_SESSION['sgSexo'] == 'M') {
                                                    echo 'Masculino';
                                                }
                                            } else {
                                                echo 'Selecione';
                                            }
                                            ?>
                                        </option>
                                        <option value="F">Feminino</option>
                                        <option value="M">Masculino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="nmEmail" name="nmEmail" value="<?= isset($_SESSION['nmEmail']) ? $_SESSION['nmEmail'] : ''; ?>" placeholder="Seu email" title="Aqui é seu email" required="required"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="dtNascimento" name="dtNascimento" value="<?= isset($_SESSION['dtNascimento']) ? $_SESSION['dtNascimento'] : ''; ?>" placeholder="Data de Nascimento" title="Aqui é sua data de nascimento" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cdTelefone" name="cdTelefone" value="<?= isset($_SESSION['cdTelefone']) ? $_SESSION['cdTelefone'] : ''; ?>" placeholder="Seu Telefone" title="Aqui é seu telefone residencial" required="required"/>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cdCelular" name="cdCelular" value="<?= isset($_SESSION['cdCelular']) ? $_SESSION['cdCelular'] : ''; ?>" placeholder="Seu Celular" title="Aqui é seu celular pessoal" required="required"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cdCpf" name="cdCpf" value="<?= isset($_SESSION['cdCpf']) ? $_SESSION['cdCpf'] : ''; ?>" onkeypress="mascara(this, '###.###.###-##');" maxlength="14" placeholder="Seu CPF" title="Aqui é seu cpf" required="required"/>
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cdCep" name="cdCep" value="<?= isset($_SESSION['cdCep']) ? $_SESSION['cdCep'] : ''; ?>" onkeypress="mascara(this, '#####-###');" maxlength="9" placeholder="Seu CEP" title="Aqui é o CEP da sua residência" required="required"/>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nmLogradouro" name="nmLogradouro" value="<?= isset($_SESSION['nmLogradouro']) ? $_SESSION['nmLogradouro'] : ''; ?>" placeholder="Seu Endereço" title="Aqui é seu endereço residêncial" required="required"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nmComplemento" name="nmComplemento" value="<?= isset($_SESSION['nmComplemento']) ? $_SESSION['nmComplemento'] : ''; ?>" placeholder="Complemento" title="Ex.: casa 1, apto 101, fundos" required="required"/>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nmBairro" name="nmBairro" value="<?= isset($_SESSION['nmBairro']) ? $_SESSION['nmBairro'] : ''; ?>" placeholder="Bairro" title="Aqui é o seu bairro" required="required"/>
                                    </div>                 
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nmCidade" name="nmCidade" value="<?= isset($_SESSION['nmCidade']) ? $_SESSION['nmCidade'] : ''; ?>" placeholder="Cidade" title="Aqui é a sua cidade" required="required"/>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="sgUf" name="sgUf" value="<?= isset($_SESSION['sgUf']) ? $_SESSION['sgUf'] : ''; ?>" placeholder="Estado" title="Aqui é seu Estado" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="senha">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="dsSenha" name="dsSenha" value="" placeholder="Digite sua senha" title="Aqui é a sua senha" required="required"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="dsConfirmaSenha" name="dsConfirmaSenha" value="" placeholder="Confirme sua senha" title="Digite novamente sua senha" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'alterar') { ?>
                                <button type="submit" class="btn btn-skin btn-block" id="acao" name="acao" value="alterar" onclick="return compararSenhas()">Alterar</button>
                            <?php } else { ?>
                                <button type="submit" class="btn btn-skin btn-block" id="acao" name="acao" value="cadastrar" onclick="return compararSenhas(); return validarCPF()">Cadastrar</button>
                            <?php } ?>
                        </div>
                    </form>

                </div>
            </div>

        </div>	

    </div>
</section>
<!-- /Section: Formulario PF -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/rodape.php'; ?>
