<?php include '../layout/header.php'; ?>
<?php include '../layout/sidebar.php'; ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gerenciar Cliente</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados do Cliente</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nome">Nome Completo</label>
                                    <input type="text" class="form-control" id="nome" placeholder="Nome do cliente">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefone">Telefone (WhatsApp)</label>
                                    <input type="text" class="form-control" id="telefone" placeholder="(00) 00000-0000">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" placeholder="cliente@email.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cpf">CPF (Opcional)</label>
                                    <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00">
                                </div>
                            </div>
                        </div>
                        
                        <hr>
                        <h5>Endereço de Entrega</h5>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" id="cep" placeholder="00000-000">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="rua">Logradouro (Rua/Av)</label>
                                    <input type="text" class="form-control" id="rua" placeholder="Nome da rua">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="numero">Número</label>
                                    <input type="text" class="form-control" id="numero" placeholder="123">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" class="form-control" id="complemento" placeholder="Apto, Bloco, etc">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control" id="bairro" placeholder="Nome do bairro">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="clientes_lista.php" class="btn btn-default">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php include '../layout/footer.php'; ?>
