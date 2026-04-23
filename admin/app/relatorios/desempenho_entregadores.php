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
        <div class="col-sm-6"><h3 class="mb-0">Desempenho de Entregadores</h3></div>
        <div class="col-sm-6 text-end">
          <input type="month" class="form-control d-inline-block w-auto" value="2026-03">
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
                <th>Entregador</th>
                <th>Total Entregas</th>
                <th>Avaliação Média</th>
                <th>Tempo Médio de Entrega</th>
                <th>Total Comissões (R$)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Paulo Motta</td>
                <td>120</td>
                <td><span class="text-warning"><i class="bi bi-star-fill"></i> 4.9</span></td>
                <td>25 min</td>
                <td>R$ 600,00</td>
              </tr>
              <tr>
                <td>Ricardo Japa</td>
                <td>95</td>
                <td><span class="text-warning"><i class="bi bi-star-fill"></i> 4.2</span></td>
                <td>32 min</td>
                <td>R$ 475,00</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="card-footer text-end">
            <button class="btn btn-outline-primary btn-sm">Baixar CSV</button>
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
