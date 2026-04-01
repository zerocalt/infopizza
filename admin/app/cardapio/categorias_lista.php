<?php
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
              <tr>
                <td>Pizzas Salgadas</td>
                <td>40</td>
                <td>Todas as pizzas de sabores tradicionais e especiais.</td>
                <td>
                  <a href="categoria_form.php?id=1" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>Bebidas</td>
                <td>5</td>
                <td>Sucos, Refrigerantes e Cervejas.</td>
                <td>
                  <a href="categoria_form.php?id=2" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>Pizzas Doces</td>
                <td>35</td>
                <td>Sabores com chocolate, frutas e doces variados.</td>
                <td>
                  <a href="categoria_form.php?id=3" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
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
