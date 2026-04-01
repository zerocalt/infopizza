<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Gestão de Despesas</h3></div>
        <div class="col-sm-6 text-end">
          <a href="despesa_form.php" class="btn btn-primary"><i class="bi bi-plus"></i> Registrar Despesa</a>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <div class="card-tools d-flex">
            <select class="form-select form-select-sm me-2" style="width: 150px;">
              <option value="all">Todas</option>
              <option value="pago">Pagas</option>
              <option value="pendente">Pendentes</option>
            </select>
            <input type="month" class="form-control form-control-sm" value="2026-03">
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped align-middle">
            <thead>
              <tr>
                <th>Descrição / Categoria</th>
                <th>Vencimento</th>
                <th>Valor (R$)</th>
                <th>Status</th>
                <th style="width: 150px">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Conta de Energia (Luz)</td>
                <td>10/03/2026</td>
                <td>R$ 450,00</td>
                <td><span class="badge text-bg-warning">Pendente</span></td>
                <td>
                  <a href="despesa_form.php?id=1" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-success"><i class="bi bi-check"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>Fornecedor de Farinha</td>
                <td>05/03/2026</td>
                <td>R$ 1.200,00</td>
                <td><span class="badge text-bg-success">Pago</span></td>
                <td>
                  <a href="despesa_form.php?id=2" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>Internet Fibra</td>
                <td>15/03/2026</td>
                <td>R$ 120,00</td>
                <td><span class="badge text-bg-warning">Pendente</span></td>
                <td>
                  <a href="despesa_form.php?id=3" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-success"><i class="bi bi-check"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
            </tbody>
            <tfoot>
                <tr class="table-info">
                    <th colspan="2" class="text-end">Total no Período</th>
                    <th colspan="3">R$ 1.770,00</th>
                </tr>
            </tfoot>
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
