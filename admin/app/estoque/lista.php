<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Consultar Estoque de Insumos</h3></div>
        <div class="col-sm-6 text-end">
          <a href="entrada_form.php" class="btn btn-success"><i class="bi bi-plus"></i> Entrada de Material</a>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row g-3 mb-3">
        <div class="col-md-3">
          <div class="info-box shadow-sm">
            <span class="info-box-icon text-bg-danger"><i class="bi bi-exclamation-triangle"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Estoque Crítico</span>
              <span class="info-box-number">5</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-box shadow-sm">
            <span class="info-box-icon text-bg-warning"><i class="bi bi-info-circle"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Abaixo do Mínimo</span>
              <span class="info-box-number">8</span>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-outline card-primary">
        <div class="card-header">
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 250px;">
              <input type="text" class="form-control float-right" placeholder="Buscar ingrediente...">
              <div class="input-group-append">
                <button class="btn btn-default"><i class="bi bi-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped align-middle">
            <thead>
              <tr>
                <th>Ingrediente</th>
                <th>Unidade</th>
                <th>Estoque Atual</th>
                <th>Estoque Mínimo</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Farinha de Trigo</td>
                <td>kg</td>
                <td><strong>12,500</strong></td>
                <td>10,000</td>
                <td><span class="badge text-bg-success">Ok</span></td>
              </tr>
              <tr class="table-warning">
                <td>Queijo Mussarela</td>
                <td>kg</td>
                <td><strong>4,200</strong></td>
                <td>5,000</td>
                <td><span class="badge text-bg-warning">Abaixo do Mínimo</span></td>
              </tr>
              <tr class="table-danger">
                <td>Molho de Tomate</td>
                <td>kg</td>
                <td><strong>0,500</strong></td>
                <td>3,000</td>
                <td><span class="badge text-bg-danger">Crítico</span></td>
              </tr>
              <tr>
                <td>Coca-Cola 2L</td>
                <td>un</td>
                <td><strong>24</strong></td>
                <td>12</td>
                <td><span class="badge text-bg-success">Ok</span></td>
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
