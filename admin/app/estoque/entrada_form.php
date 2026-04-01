<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Registrar Entrada de Material</h3></div>
        <div class="col-sm-6 text-end">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="../index/index.php">Principal</a></li>
            <li class="breadcrumb-item"><a href="lista.php">Estoque</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulário</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-success card-outline">
        <form action="lista.php" method="POST">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Ingrediente / Insumo</label>
                  <select class="form-select" name="ingrediente_id" required>
                    <option value="">Selecione...</option>
                    <option value="1">Farinha de Trigo</option>
                    <option value="2">Molho de Tomate</option>
                    <option value="3">Queijo Mussarela</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Quantidade Recebida</label>
                  <input type="number" step="0.001" class="form-control" name="quantidade" placeholder="0.000" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Data de Recebimento</label>
                  <input type="date" class="form-control" name="data" value="<?php echo date('Y-m-d'); ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Fornecedor (Opcional)</label>
                  <input type="text" class="form-control" name="fornecedor" placeholder="Ex: Distribuidora Silva">
                </div>
                <div class="mb-3">
                  <label class="form-label">Valor Total da Compra (R$ - Opcional)</label>
                  <input type="text" class="form-control" name="valor_total" placeholder="0.00">
                </div>
                <div class="mb-3">
                  <label class="form-label">Observação</label>
                  <textarea class="form-control" rows="2"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Salvar Entrada de Estoque</button>
            <a href="lista.php" class="btn btn-secondary">Voltar</a>
          </div>
        </form>
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
