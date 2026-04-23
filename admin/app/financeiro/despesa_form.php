<?php
  require_once("../config/database.php");
  require_once("../config/permissoes.php");
  exigirLogin();
  
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  try{
    $descricao = $_POST['descricao'];
    $categoria = $_POST['categoria'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $vencimento = $_POST['vencimento'];
    $status_pagamento = $_POST['status'];
    $pizzaria_id = $_SESSION['pizzaria_id'];

    $stmt = $pdo->prepare("INSERT INTO despesas (pizzaria_id, descricao, categoria, tipo, valor, vencimento, status_pagamento) VALUES (:pizzaria_id, :descricao, :categoria, :tipo, :valor, :vencimento, :status_pagamento)");
    $stmt->bindParam(':pizzaria_id', $pizzaria_id);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':categoria', $categoria);
    $stmt->bindParam(':tipo', $tipo);
    $stmt->bindParam(':valor', $valor);
    $stmt->bindParam(':vencimento', $vencimento);
    $stmt->bindParam(':status_pagamento', $status_pagamento);
    $stmt->execute();

    header("Location:despesas_lista.php");
    exit();
  }catch(PDOException $e) {
    echo " erro ao cadastrar categoria: " . $e->getMessage();
  }
  }
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Registrar Despesa</h3></div>
        <div class="col-sm-6 text-end">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="../index/index.php">Principal</a></li>
            <li class="breadcrumb-item"><a href="despesas_lista.php">Despesas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulário</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-primary card-outline">
        <form action="despesa_form.php" method="POST">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Descrição da Despesa</label>
                  <input type="text" class="form-control" name="descricao" placeholder="Ex: Conta de Energia" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Categoria</label>
                  <select class="form-select" name="categoria" required>
                    <option value="">Selecione...</option>
                    <option value="agua">Água</option>
                    <option value="luz">Luz</option>
                    <option value="internet">Internet</option>
                    <option value="insumos">Insumos (Farinha, Tomate...)</option>
                    <option value="manutencao">Manutenção</option>
                    <option value="outros">Outros</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Tipo</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" value="fixa" checked>
                    <label class="form-check-label">Despesa Fixa</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="tipo" value="variavel">
                    <label class="form-check-label">Despesa Variável</label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Valor (R$)</label>
                  <input type="text" class="form-control" name="valor" placeholder="0.00" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Data de Vencimento</label>
                  <input type="date" class="form-control" name="vencimento" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Status do Pagamento</label>
                  <select class="form-select" name="status">
                    <option value="pendente">Pendente</option>
                    <option value="pago">Já Pago</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar Despesa</button>
            <a href="despesas_lista.php" class="btn btn-secondary">Voltar</a>
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
