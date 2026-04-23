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
        <div class="col-sm-6"><h3 class="mb-0">Regras de Negócio</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="../index/index.php">Principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Regras</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card card-primary card-outline">
            <div class="card-header"><div class="card-title">Regra de Preço (Meio-a-Meio)</div></div>
            <form action="regras.php" method="POST">
              <div class="card-body">
                <p class="text-muted">Como será calculado o valor de pizzas com múltiplos sabores:</p>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="regra_preco" value="maior" checked>
                  <label class="form-check-label">Pelo maior valor entre os sabores</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="regra_preco" value="soma">
                  <label class="form-check-label">Soma das frações (ex: 50% de um sabor + 50% do outro)</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="radio" name="regra_preco" value="media">
                  <label class="form-check-label">Média aritmética dos valores</label>
                </div>
              </div>
              <div class="card-footer"><button class="btn btn-primary">Salvar Regras de Preço</button></div>
            </form>
          </div>
        </div>

        <div class="col-md-6">
          <div class="card card-success card-outline">
            <div class="card-header"><div class="card-title">Remuneração de Entregadores</div></div>
            <form action="regras.php" method="POST">
              <div class="card-body">
                <p class="text-muted">Defina como os entregadores serão pagos:</p>
                <div class="mb-3">
                  <label class="form-label">Modelo de Pagamento</label>
                  <select class="form-select" name="modelo_entregador">
                    <option value="comissao_fixa">Comissão Fixa por Entrega (R$)</option>
                    <option value="comissao_percentual">Percentual sobre a Entrega (%)</option>
                    <option value="salario_fixo">Salário Fixo Mensal</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Valor / Percentual</label>
                  <div class="input-group">
                    <span class="input-group-text">R$ ou %</span>
                    <input type="text" class="form-control" placeholder="Ex: 5.00">
                  </div>
                </div>
              </div>
              <div class="card-footer text-end"><button class="btn btn-success">Salvar Regras de Entregadores</button></div>
            </form>
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
