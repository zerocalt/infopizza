<?php
  require_once("../config/database.php");
  require_once("../config/permissoes.php");
  exigirLogin();
  
  $id_pizzaria = $_SESSION['pizzaria_id'];
  $stmt = $pdo->prepare("SELECT * FROM categorias WHERE pizzaria_id = :pizzaria_id ORDER BY nome");
  $stmt->execute([':pizzaria_id' => $id_pizzaria]);
  $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Categorias de Produtos</h3></div>
        <div class="col-sm-6 text-end">
          <a href="categoria_form.php" class="btn btn-primary"><i class="bi bi-plus"></i> Nova Categoria</a>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-outline card-primary">
        <div class="card-body p-0">
          <table class="table table-striped align-middle">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Tempo Preparo (min)</th>
                <th>Descrição</th>
                <th style="width: 150px">Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($categorias as $ct): ?>
              <tr>
                <td><?php echo $ct['nome']; ?></td>
                <td><?php echo $ct['tempo_preparo_padrao']; ?></td>
                <td><?php echo $ct['descricao']; ?></td>
                <td>
                  <a href="categoria_form.php?id=<?php echo $ct['id']; ?>" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <?php endforeach; ?>
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
