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
        <div class="col-sm-6"><h3 class="mb-0">Relatório de Comissões</h3></div>
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
                <th>KM Estimado</th>
                <th>Comissão (R$)</th>
                <th style="width: 150px">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Paulo Motta</td>
                <td>45</td>
                <td>120 km</td>
                <td>R$ 225,00</td>
                <td><span class="badge text-bg-warning">Aguardando Pgto</span></td>
              </tr>
              <tr>
                <td>Ricardo Japa</td>
                <td>32</td>
                <td>85 km</td>
                <td>R$ 160,00</td>
                <td><span class="badge text-bg-success">Pago</span></td>
              </tr>
            </tbody>
            <tfoot>
                <tr class="table-info">
                    <th colspan="3" class="text-end">Total Geral de Comissões</th>
                    <th colspan="2">R$ 385,00</th>
                </tr>
            </tfoot>
          </table>
        </div>
        <div class="card-footer text-end">
            <button class="btn btn-primary btn-sm">Gerar Relatório em PDF</button>
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
