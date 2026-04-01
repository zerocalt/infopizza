<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Cadastro de Ingrediente</h3></div>
        <div class="col-sm-6 text-end">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="../index/index.php">Principal</a></li>
            <li class="breadcrumb-item"><a href="ingredientes_lista.php">Ingredientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulário</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-primary card-outline">
        <form action="ingredientes_lista.php" method="POST">
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Nome do Ingrediente</label>
              <input type="text" class="form-control" name="nome" placeholder="Ex: Queijo Mussarela" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Unidade de Medida</label>
              <select class="form-select" name="unidade" required>
                <option value="kg">Quilograma (kg)</option>
                <option value="un">Unidade (un)</option>
                <option value="litro">Litro (l)</option>
                <option value="grama">Grama (g)</option>
              </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Estoque Mínimo para Alerta</label>
                <input type="number" step="0.001" class="form-control" name="estoque_minimo" placeholder="5.000">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar Ingrediente</button>
            <a href="ingredientes_lista.php" class="btn btn-secondary">Voltar</a>
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
