<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Painel de Pedidos</h3></div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row">
        <!-- Recebidos -->
        <div class="col-md-3">
          <div class="card card-info">
            <div class="card-header"><h3 class="card-title">Recebidos (2)</h3></div>
            <div class="card-body p-2" style="min-height: 400px; background: #f4f6f9;">
              <div class="card mb-2 shadow-sm border-left-info">
                <div class="card-body p-2">
                  <div class="d-flex justify-content-between">
                    <strong>#1025</strong>
                    <small class="text-muted">18:45</small>
                  </div>
                  <div>João Silva</div>
                  <div class="small text-muted">1x Pizza Calabresa, 1x Coca 2L</div>
                  <div class="mt-2 text-end">
                    <a href="detalhes.php?id=1025" class="btn btn-xs btn-primary">Detalhes</a>
                    <button class="btn btn-xs btn-success">Aceitar</button>
                  </div>
                </div>
              </div>
              <div class="card mb-2 shadow-sm">
                <div class="card-body p-2">
                  <strong>#1026</strong>
                  <div>Maria Souza</div>
                  <div class="mt-2 text-end">
                    <button class="btn btn-xs btn-success">Aceitar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Em Preparo -->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header"><h3 class="card-title">Em Preparo (1)</h3></div>
            <div class="card-body p-2" style="min-height: 400px; background: #f4f6f9;">
              <div class="card mb-2 shadow-sm">
                <div class="card-body p-2">
                  <strong>#1024</strong>
                  <div>Carlos Santos</div>
                  <div class="small text-danger">Atrasado: 45 min</div>
                  <div class="mt-2 text-end">
                    <button class="btn btn-xs btn-primary">Pronto</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Saiu para Entrega -->
        <div class="col-md-3">
          <div class="card card-warning">
            <div class="card-header"><h3 class="card-title">Em Entrega (1)</h3></div>
            <div class="card-body p-2" style="min-height: 400px; background: #f4f6f9;">
              <div class="card mb-2 shadow-sm">
                <div class="card-body p-2">
                  <strong>#1023</strong>
                  <div>Ana Costa</div>
                  <div class="small">Entregador: Paulo</div>
                  <div class="mt-2 text-end">
                    <button class="btn btn-xs btn-success">Concluir</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Concluídos -->
        <div class="col-md-3">
          <div class="card card-success">
            <div class="card-header"><h3 class="card-title">Hoje (15)</h3></div>
            <div class="card-body p-2" style="min-height: 400px; background: #f4f6f9;">
              <div class="text-center text-muted small mt-3">Exibindo últimos 5 concluídos</div>
              <div class="card mb-2 shadow-sm opacity-75">
                <div class="card-body p-2">
                  <strong>#1022</strong>
                  <div>Roberto Lima</div>
                  <div class="small text-success text-end">R$ 54,00</div>
                </div>
              </div>
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
    <script src="../js/adminlte.js"></script>
  </body>
</html>
