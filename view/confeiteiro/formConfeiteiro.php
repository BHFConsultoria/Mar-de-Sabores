<?php
$menuCadas = 1;
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/marDeSabores/marDeSabores/view/cabecalho.php'; ?>

<section id="intro" class="intro-pages">
    <?php if (isset($menuCadas)) { ?>
        <div class="slogan">
            <a href="indexConfeiteiro.php"><img style="padding:10px" src="../bootstrap/img/logo.png" alt="" /></a>
            <h3>Os melhores bolos e doces na sua casa!</h3>
        </div>
        <div id="navigation">

        <?php } else { ?>    

            <nav class="navbar navbar-custom" role="navigation">
                <h4>Olá <?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : ''; ?>, Seja bem vindo!</h4>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="formConfeiteiro.php?acao=alterar">Alterar Cadastro</a></li>
                        <li><a href="../../controller/confeiteiro/confeiteiroController.php?acao=desativar" onclick="return confirmarDesativarConta();">Desativar Cadastro</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../../controller/login/login.php?acao=deslogar">SAIR</a></li>
                    </ul>

                </div>         

            </nav>
        </div>   
        <div class="slogan">
            <a href="indexConfeiteiro.php"><img style="padding:10px" src="../bootstrap/img/logo.png" alt="" /></a>

            <h3>Confeiteiro</h3>
        </div>

    <?php } ?>

</section>
<section id="contact" class="home-section text-center">
    <div class="heading-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-offset-2">
                    <div class="section-heading">
                        <div class="wow bounceInDown" data-wow-delay="0.4s">
                            <h2>cadastro confeiteiro</h2>
                        </div>
                        <p class="wow lightSpeedIn" data-wow-delay="0.3s">Em poucos minutos você fazerá parte de nossa rede.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
                <div class="form-wrapper marginbot-50">
                    <form id="contact-form" name="formConfeiteiro" method="POST" action="../../controller/confeiteiro/confeiteiroController.php">
                        <div class="row">

                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nmConfeiteiro" value="<?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : ''; ?>"name="nmConfeiteiro" placeholder="Seu nome" title="Aqui é seu nome" required="required"/>
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
                                        <input type="date" class="form-control" id="dtNascimento" name="dtNascimento" value="<?= isset($_SESSION['dtNascimento']) ? $_SESSION['dtNascimento'] : ''; ?>" placeholder="Data de Nascimento" title="Aqui é sua data de nascimento"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cdTelefone" name="cdTelefone" value="<?= isset($_SESSION['cdTelefone']) ? $_SESSION['cdTelefone'] : ''; ?>" maxlength="" placeholder="Seu Telefone" title="Aqui é seu telefone residencial"/>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cdCelular" name="cdCelular" value="<?= isset($_SESSION['cdCelular']) ? $_SESSION['cdCelular'] : ''; ?>" placeholder="Seu Celular" title="Aqui é seu celular pessoal" required="required"/>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cdCpf" name="cdCpf" value="<?= isset($_SESSION['cdCpf']) ? $_SESSION['cdCpf'] : ''; ?>" onkeypress="mascara(this, '###.###.###-##');" maxlength="14" placeholder="Seu CPF" title="Aqui é seu cpf"/>
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cdCep" name="cdCep" value="<?= isset($_SESSION['cdCep']) ? $_SESSION['cdCep'] : ''; ?>" onkeypress="mascara(this, '#####-###');" maxlength="9" placeholder="Seu CEP" title="Aqui é o CEP da sua residência"/>
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
                                        <input type="text" class="form-control" id="sgUf" name="sgUf" value="<?= isset($_SESSION['sgUf']) ? $_SESSION['sgUf'] : ''; ?>" placeholder="UF" title="Aqui é o seu estado" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nmRazaoSocial" name="nmRazaoSocial" value="<?= isset($_SESSION['nmRazaoSocial']) ? $_SESSION['nmRazaoSocial'] : ''; ?>" placeholder="Razão Social" title="Aqui é seu nome"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nmFantasia" name="nmFantasia" value="<?= isset($_SESSION['nmFantasia']) ? $_SESSION['nmFantasia'] : ''; ?>" placeholder="Nome Fantasia" title="Aqui é seu nome"/>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cdCnpj" name="cdCnpj" value="<?= isset($_SESSION['cdCnpj']) ? $_SESSION['cdCnpj'] : ''; ?>" onkeypress="mascara(this, '##.###.###/####-##');" maxlength="18" placeholder="CNPJ" title=""/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="cdInscricaoEstadual" name="cdInscricaoEstadual" value="<?= isset($_SESSION['cdInscricaoEstadual']) ? $_SESSION['cdInscricaoEstadual'] : ''; ?>" placeholder="Inscrição Estadual" title="Digite novamente sua senha"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="senha">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="dsSenha" name="dsSenha" placeholder="Digite sua senha" title="Aqui é a sua senha" required="required"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="dsConfirmaSenha" name="dsConfirmaSenha" placeholder="Confirme sua senha" title="Digite novamente sua senha" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <?php if (isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'alterar') { ?>
                                <button type="submit" class="btn btn-skin btn-block" id="acao" name="acao" value="alterar"  onclick="return compararSenhas()">Alterar</button>
                            <?php } else { ?>
                                <button type="submit" class="btn btn-skin btn-block" id="acao" name="acao" value="cadastrar" onclick="return compararSenhas()">Cadastrar</button>
                            <?php } ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>	
    </div>
</section>
<!-- /Section: Formulario PF -->

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/marDeSabores/marDeSabores/view/rodape.php'; ?>
