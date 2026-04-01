<?php include '../layout/header.php'; ?>
<?php include '../layout/sidebar.php'; ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gerenciar Contato</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Dados do Contato</h3>
                </div>
                <form>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nome">Nome Completo</label>
                                    <input type="text" class="form-control" id="nome" placeholder="Nome do contato">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" placeholder="email@exemplo.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control" id="telefone" placeholder="(00) 00000-0000">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cargo">Cargo/Função</label>
                                    <select class="form-control" id="cargo">
                                        <option>Proprietário</option>
                                        <option>Sócio</option>
                                        <option>Patrocinador</option>
                                        <option>Gerente</option>
                                        <option>Outro</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="contatos.php" class="btn btn-default">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php include '../layout/footer.php'; ?>
