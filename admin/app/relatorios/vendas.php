<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Relatório de Vendas</h3></div>
        <div class="col-sm-6 text-end d-flex justify-content-end">
          <input type="date" class="form-control d-inline-block w-auto me-2" value="2026-03-01">
          <input type="date" class="form-control d-inline-block w-auto" value="2026-03-31">
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row g-4">
        <div class="col-md-3">
          <div class="small-box text-bg-primary">
            <div class="inner"><h3>R$ 15.420,00</h3><p>Faturamento Total</p></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="small-box text-bg-info">
            <div class="inner"><h3>245</h3><p>Qtd. de Pedidos</p></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="small-box text-bg-success">
            <div class="inner"><h3>R$ 62,90</h3><p>Ticket Médio</p></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="small-box text-bg-warning">
            <div class="inner"><h3>Pizza Calabresa</h3><p>O Mais Vendido</p></div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-header"><h3 class="card-title">Gráfico de Vendas</h3></div>
            <div class="card-body">
              <div id="sales-chart" style="height: 300px"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" crossorigin="anonymous"></script>
    <script src="../js/adminlte.js"></script>
    <script>
      const sales_chart_options = {
        series: [{ name: 'Vendas (R$)', data: [450, 600, 800, 1200, 1500, 2000, 1800, 1600, 1900, 2100, 2500, 3000] }],
        chart: { type: 'bar', height: 300 },
        colors: ['#0d6efd'],
        xaxis: { categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'] }
      };
      new ApexCharts(document.querySelector('#sales-chart'), sales_chart_options).render();
    </script>
  </body>
</html>
