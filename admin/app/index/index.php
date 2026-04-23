<?php
  require_once("../config/database.php");
  require_once("../config/permissoes.php");
  exigirLogin();
  
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Dashboard PizzaExpress</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 1-->
                <div class="small-box text-bg-primary">
                  <div class="inner">
                    <h3>42</h3>
                    <p>Novos Pedidos</p>
                  </div>
                  <i class="small-box-icon bi bi-cart-plus"></i>
                  <a
                    href="../pedidos/painel.php"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    Ver Pedidos <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 1-->
              </div>
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 2-->
                <div class="small-box text-bg-success">
                  <div class="inner">
                    <h3>R$ 3.450<sup class="fs-5">,00</sup></h3>
                    <p>Faturamento Diário</p>
                  </div>
                  <i class="small-box-icon bi bi-currency-dollar"></i>
                  <a
                    href="../relatorios/vendas.php"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    Relatório Vendas <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 2-->
              </div>
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 3-->
                <div class="small-box text-bg-warning">
                  <div class="inner">
                    <h3>12</h3>
                    <p>Entregadores Online</p>
                  </div>
                  <i class="small-box-icon bi bi-bicycle"></i>
                  <a
                    href="../equipe/entregadores_lista.php"
                    class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    Gerenciar Equipe <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 3-->
              </div>
              <!--end::Col-->
              <div class="col-lg-3 col-6">
                <!--begin::Small Box Widget 4-->
                <div class="small-box text-bg-danger">
                  <div class="inner">
                    <h3>5</h3>
                    <p>Insumos em Falta</p>
                  </div>
                  <i class="small-box-icon bi bi-exclamation-triangle"></i>
                  <a
                    href="../estoque/lista.php"
                    class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
                  >
                    Verificar Estoque <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
                <!--end::Small Box Widget 4-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
              <!-- Start col -->
              <div class="col-lg-7 connectedSortable">
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Volume de Vendas (Última Semana)</h3>
                  </div>

                  <div class="card-body">
                    <div id="revenue-chart"></div>
                  </div>
                </div>
                <!-- /.card -->

                <!-- Recent Orders -->
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Pedidos Recentes</h3>
                  </div>
                  <div class="card-body p-0">
                    <table class="table table-striped align-middle">
                      <thead>
                        <tr>
                          <th>Pedido</th>
                          <th>Cliente</th>
                          <th>Status</th>
                          <th>Tempo</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#1024</td>
                          <td>João Silva</td>
                          <td><span class="badge text-bg-info">Em Preparo</span></td>
                          <td>15 min</td>
                        </tr>
                        <tr>
                          <td>#1023</td>
                          <td>Maria Oliveira</td>
                          <td><span class="badge text-bg-warning">Saiu para Entrega</span></td>
                          <td>22 min</td>
                        </tr>
                        <tr>
                          <td>#1022</td>
                          <td>Carlos Santos</td>
                          <td><span class="badge text-bg-success">Entregue</span></td>
                          <td>35 min</td>
                        </tr>
                        <tr>
                          <td>#1021</td>
                          <td>Ana Costa</td>
                          <td><span class="badge text-bg-danger">Cancelado</span></td>
                          <td>--</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.Start col -->

              <!-- Start col -->
              <div class="col-lg-5 connectedSortable">
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Produtos Mais Vendidos</h3>
                  </div>
                  <div class="card-body">
                    <div id="pie-chart"></div>
                  </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">
                      <h3 class="card-title">Avaliações Recentes</h3>
                    </div>
                    <div class="card-body">
                      <div class="d-flex border-bottom mb-2 pb-2">
                        <div class="flex-shrink-0">
                          <img src="../assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 rounded-circle me-3">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-0">João Silva <small class="text-muted float-end">Hoje</small></h6>
                          <div class="text-warning mb-1">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                          <p class="mb-0 small">Pizza muito quente e deliciosa!</p>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img src="../assets/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 rounded-circle me-3">
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-0">Maria Oliveira <small class="text-muted float-end">Ontem</small></h6>
                          <div class="text-warning mb-1">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
                          </div>
                          <p class="mb-0 small">Entrega rápida, porém a borda estava um pouco queimada.</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- /.Start col -->
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">PizzaExpress Admin</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2026&nbsp;
          <a href="#" class="text-decoration-none">PizzaExpress</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="../js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

        // Disable OverlayScrollbars on mobile devices to prevent touch interference
        const isMobile = window.innerWidth <= 992;

        if (
          sidebarWrapper &&
          OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
          !isMobile
        ) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->

    <!-- OPTIONAL SCRIPTS -->

    <!-- sortablejs -->
    <script
      src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
      crossorigin="anonymous"
    ></script>

    <!-- sortablejs -->
    <script>
      new Sortable(document.querySelector('.connectedSortable'), {
        group: 'shared',
        handle: '.card-header',
      });

      const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
      cardHeaders.forEach((cardHeader) => {
        cardHeader.style.cursor = 'move';
      });
    </script>

    <!-- apexcharts -->
    <script
      src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
      integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
      crossorigin="anonymous"
    ></script>

    <!-- ChartJS -->
    <script>
      const sales_chart_options = {
        series: [
          {
            name: 'Vendas (R$)',
            data: [1200, 1900, 1500, 2500, 3100, 2800, 3450],
          }
        ],
        chart: {
          height: 300,
          type: 'area',
          toolbar: {
            show: false,
          },
        },
        colors: ['#0d6efd'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth',
        },
        xaxis: {
          categories: [
            'Segunda',
            'Terça',
            'Quarta',
            'Quinta',
            'Sexta',
            'Sábado',
            'Domingo',
          ],
        }
      };

      const sales_chart = new ApexCharts(
        document.querySelector('#revenue-chart'),
        sales_chart_options,
      );
      sales_chart.render();

      const pie_chart_options = {
        series: [44, 33, 20, 10],
        chart: {
          type: 'donut',
          height: 300
        },
        labels: ['Pizza Calabresa', 'Pizza Marguerita', 'Pizza Portuguesa', 'Bebidas'],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
      };

      const pie_chart = new ApexCharts(document.querySelector('#pie-chart'), pie_chart_options);
      pie_chart.render();
    </script>
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
