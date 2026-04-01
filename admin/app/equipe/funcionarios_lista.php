<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Gestão de Funcionários</h3></div>
        <div class="col-sm-6 text-end">
          <a href="funcionario_form.php" class="btn btn-primary"><i class="bi bi-plus"></i> Novo Funcionário</a>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-outline card-primary">
        <div class="card-body p-0">
          <table class="table table-striped align-middle">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Telefone</th>
                <th>Status</th>
                <th style="width: 150px">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Ricardo Pereira</td>
                <td>Pizzaiolo</td>
                <td>(11) 98888-8888</td>
                <td><span class="badge text-bg-success">Ativo</span></td>
                <td>
                  <a href="funcionario_form.php?id=1" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>Juliana Lima</td>
                <td>Atendente</td>
                <td>(11) 97777-7777</td>
                <td><span class="badge text-bg-success">Ativo</span></td>
                <td>
                  <a href="funcionario_form.php?id=2" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../js/adminlte.js"></script>
  </body>
</html>
