<?php
  require_once("../config/database.php");
  require_once("../config/permissoes.php");
  exigirLogin();
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Gestão de Clientes</h3></div>
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
                <th>Telefone</th>
                <th>Total Pedidos</th>
                <th>Score Interno</th>
                <th style="width: 100px">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>João Silva</td>
                <td>(11) 99999-9999</td>
                <td>12</td>
                <td><span class="badge text-bg-success">5.0</span></td>
                <td><a href="cliente_perfil.php?id=1" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a></td>
              </tr>
              <tr>
                <td>Maria Oliveira</td>
                <td>(11) 98888-8888</td>
                <td>8</td>
                <td><span class="badge text-bg-warning">3.5</span></td>
                <td><a href="cliente_perfil.php?id=2" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a></td>
              </tr>
              <tr>
                <td>Carlos Santos</td>
                <td>(11) 97777-7777</td>
                <td>2</td>
                <td><span class="badge text-bg-danger">1.0</span></td>
                <td><a href="cliente_perfil.php?id=3" class="btn btn-sm btn-info"><i class="bi bi-eye"></i></a></td>
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
