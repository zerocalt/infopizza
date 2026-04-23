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
        <div class="col-sm-6"><h3 class="mb-0">Gestão de Produtos</h3></div>
        <div class="col-sm-6 text-end">
          <a href="produto_form.php" class="btn btn-primary"><i class="bi bi-plus"></i> Novo Produto</a>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 250px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar produto...">
              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="bi bi-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped align-middle">
            <thead>
              <tr>
                <th style="width: 80px">Img</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Status</th>
                <th style="width: 150px">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="../assets/img/pizzatumb.jpg" alt="Piz" class="img-thumbnail" style="width: 50px"></td>
                <td>Pizza Calabresa</td>
                <td>Pizzas Salgadas</td>
                <td>R$ 45,00</td>
                <td><span class="badge text-bg-success">Disponível</span></td>
                <td>
                  <a href="produto_form.php?id=1" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td><img src="../assets/img/pizzatumb.jpg" alt="Piz" class="img-thumbnail" style="width: 50px"></td>
                <td>Pizza Portuguesa</td>
                <td>Pizzas Salgadas</td>
                <td>R$ 48,00</td>
                <td><span class="badge text-bg-success">Disponível</span></td>
                <td>
                  <a href="produto_form.php?id=2" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td><img src="../assets/img/bebida.jpg" alt="Beb" class="img-thumbnail" style="width: 50px"></td>
                <td>Coca-Cola 2L</td>
                <td>Bebidas</td>
                <td>R$ 12,00</td>
                <td><span class="badge text-bg-danger">Indisponível</span></td>
                <td>
                  <a href="produto_form.php?id=3" class="btn btn-sm btn-info"><i class="bi bi-pencil"></i></a>
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
