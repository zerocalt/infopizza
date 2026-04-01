<?php include '../layout/header.php'; ?>
<?php include '../layout/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contatos da Pizzaria</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Configurações</a></li>
                        <li class="breadcrumb-item active">Contatos</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-header-title">Lista de Contatos</h3>
                    <div class="card-tools">
                        <a href="contato_form.php" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Novo Contato
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Cargo/Função</th>
                                <th style="width: 150px">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>João da Silva</td>
                                <td>joao@pizzaexpress.com</td>
                                <td>(11) 99999-8888</td>
                                <td class="badge bg-primary mt-2">Proprietário</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Maria Oliveira</td>
                                <td>maria@fornecedor.com</td>
                                <td>(11) 98888-7777</td>
                                <td class="badge bg-warning mt-2">Patrocinador</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Carlos Santos</td>
                                <td>carlos@pizzaexpress.com</td>
                                <td>(11) 97777-6666</td>
                                <td class="badge bg-success mt-2">Sócio</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include '../layout/footer.php'; ?>
