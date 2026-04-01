<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Relatório Financeiro (DRE)</h3></div>
        <div class="col-sm-6 text-end">
          <input type="month" class="form-control d-inline-block w-auto" value="2026-03">
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-outline card-primary shadow">
        <div class="card-body">
          <table class="table table-bordered align-middle">
            <thead>
              <tr class="table-primary">
                <th>Descrição</th>
                <th class="text-end">Valor (R$)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Receita Bruta (Vendas de Pedidos)</strong></td>
                <td class="text-end text-success">R$ 45.200,00</td>
              </tr>
              <tr>
                <td>Outras Entradas de Caixa</td>
                <td class="text-end text-success">R$ 500,00</td>
              </tr>
              <tr class="table-secondary">
                <th>Total de Receitas</th>
                <th class="text-end text-success">R$ 45.700,00</th>
              </tr>
              <tr>
                <td>Custo de Insumos (Estoque)</td>
                <td class="text-end text-danger">- R$ 12.300,00</td>
              </tr>
              <tr>
                <td>Despesas Fixas e Variáveis</td>
                <td class="text-end text-danger">- R$ 8.450,00</td>
              </tr>
              <tr>
                <td>Comissões de Entregadores</td>
                <td class="text-end text-danger">- R$ 3.840,00</td>
              </tr>
              <tr>
                <td>Folha de Pagamento (Salários)</td>
                <td class="text-end text-danger">- R$ 7.200,00</td>
              </tr>
              <tr class="table-secondary">
                <th>Total de Despesas</th>
                <th class="text-end text-danger">- R$ 31.790,00</th>
              </tr>
            </tbody>
            <tfoot>
              <tr class="table-dark fs-4">
                <th>LUCRO LÍQUIDO</th>
                <th class="text-end">R$ 13.910,00</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <div class="card-footer text-center">
            <button class="btn btn-outline-primary btn-sm me-2"><i class="bi bi-printer"></i> Imprimir DRE</button>
            <button class="btn btn-outline-success btn-sm"><i class="bi bi-file-earmark-excel"></i> Exportar para Excel</button>
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
