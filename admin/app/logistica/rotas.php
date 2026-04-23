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
        <div class="col-sm-6"><h3 class="mb-0">Rotas de Entrega</h3></div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-outline card-primary mb-4">
            <div class="card-header"><h3 class="card-title">Atribuição de Entregas</h3></div>
            <div class="card-body p-2">
              <div class="mb-3">
                <label class="form-label">Selecionar Entregador</label>
                <select class="form-select form-select-sm">
                  <option value="1">Paulo Motta (Moto)</option>
                  <option value="2">Ricardo Japa (Bike)</option>
                </select>
              </div>
              <p class="text-muted small">Selecione as entregas prontas para gerar a rota otimizada:</p>
              <div class="list-group list-group-sm mb-3">
                <label class="list-group-item d-flex gap-2">
                  <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked>
                  <span>
                    <strong>#1023 - Ana Costa</strong>
                    <small class="d-block text-muted">Rua das Flores, 123 - Jardins</small>
                  </span>
                </label>
                <label class="list-group-item d-flex gap-2">
                  <input class="form-check-input flex-shrink-0" type="checkbox" value="" checked>
                  <span>
                    <strong>#1022 - Roberto Lima</strong>
                    <small class="d-block text-muted">Av. Paulista, 1000 - Centro</small>
                  </span>
                </label>
              </div>
              <button class="btn btn-primary btn-block w-100">Gerar Rota Otimizada</button>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card card-outline card-info">
            <div class="card-header"><h3 class="card-title">Visualização da Rota (Mockup)</h3></div>
            <div class="card-body">
              <div class="alert alert-info py-2 small mb-2"><strong>Distância Estimada:</strong> 8.5 km | <strong>Tempo Médio:</strong> 22 min</div>
              <div style="background: #e9ecef; border-radius: 8px; height: 400px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden;">
                <p class="text-muted">Mapa Interativo (Integração Google Maps/GPS)</p>
                <!-- Simulando pontos de rota -->
                <div style="position: absolute; top: 50%; left: 50%; width: 10px; height: 10px; background: red; border-radius: 50%;" title="Pizzaria"></div>
                <div style="position: absolute; top: 40%; left: 30%; width: 10px; height: 10px; background: blue; border-radius: 50%;" title="Cliente 1"></div>
                <div style="position: absolute; top: 70%; left: 60%; width: 10px; height: 10px; background: blue; border-radius: 50%;" title="Cliente 2"></div>
                <svg width="100%" height="100%" style="position: absolute; top: 0; left: 0;">
                    <line x1="50%" y1="50%" x2="30%" y2="40%" stroke="gray" stroke-dasharray="4" />
                    <line x1="30%" y1="40%" x2="60%" y2="70%" stroke="gray" stroke-dasharray="4" />
                </svg>
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
