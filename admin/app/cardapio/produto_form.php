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
        <div class="col-sm-6"><h3 class="mb-0">Cadastro de Produto</h3></div>
        <div class="col-sm-6 text-end">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="../index/index.php">Principal</a></li>
            <li class="breadcrumb-item"><a href="produtos_lista.php">Produtos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulário</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-primary card-outline">
        <form action="produtos_lista.php" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Nome do Produto</label>
                  <input type="text" class="form-control" name="nome" placeholder="Ex: Pizza de Calabresa" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Categoria</label>
                  <select class="form-select" name="categoria_id" required>
                    <option value="">Selecione...</option>
                    <option value="1">Pizzas Salgadas</option>
                    <option value="2">Bebidas</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Preço (R$)</label>
                  <input type="text" class="form-control" name="preco" placeholder="45.00" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="disponivel" checked>
                        <label class="form-check-label">Produto Disponível no Cardápio</label>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Imagem do Produto</label>
                  <input type="file" class="form-control" name="imagem">
                </div>
                <div class="mb-3">
                  <label class="form-label">Descrição / Ingredientes (para o cliente)</label>
                  <textarea class="form-control" name="descricao" rows="4" placeholder="Calabresa fatiada, cebola e azeitonas..."></textarea>
                </div>
              </div>
            </div>

            <hr>
            <h4>Ficha Técnica (Controle de Estoque)</h4>
            <p class="text-muted small">Selecione os ingredientes e quantidades que este produto consome:</p>
            <div class="table-responsive">
              <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th>Ingrediente</th>
                    <th style="width: 150px">Quantidade</th>
                    <th style="width: 80px">Unidade</th>
                    <th style="width: 50px"></th>
                  </tr>
                </thead>
                <tbody id="ingredientes-container">
                  <tr>
                    <td>
                      <select class="form-select form-select-sm">
                        <option value="1">Massa de Pizza</option>
                        <option value="2">Molho de Tomate</option>
                        <option value="3">Queijo Mussarela</option>
                        <option value="4">Calabresa</option>
                      </select>
                    </td>
                    <td><input type="number" step="0.001" class="form-control form-control-sm" placeholder="0.200"></td>
                    <td class="align-middle">kg</td>
                    <td><button type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button></td>
                  </tr>
                </tbody>
              </table>
              <button type="button" class="btn btn-sm btn-success mt-2"><i class="bi bi-plus"></i> Adicionar Ingrediente</button>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar Produto</button>
            <a href="produtos_lista.php" class="btn btn-secondary">Voltar</a>
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
