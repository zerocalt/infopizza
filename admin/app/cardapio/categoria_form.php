<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Cadastro de Categoria</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="../index/index.php">Principal</a></li>
            <li class="breadcrumb-item"><a href="categorias_lista.php">Categorias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulário</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-primary card-outline">
        <form action="categorias_lista.php" method="POST">
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Nome da Categoria</label>
              <input type="text" class="form-control" name="nome" placeholder="Ex: Pizzas" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Tempo de Preparo Padrão (Minutos)</label>
              <input type="number" class="form-control" name="tempo_preparo" placeholder="40" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Descrição</label>
              <textarea class="form-control" name="descricao" rows="3"></textarea>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar Categoria</button>
            <a href="categorias_lista.php" class="btn btn-secondary">Voltar</a>
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
