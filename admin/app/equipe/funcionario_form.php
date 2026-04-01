<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Cadastro de Funcionário</h3></div>
        <div class="col-sm-6 text-end">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="../index/index.php">Principal</a></li>
            <li class="breadcrumb-item"><a href="funcionarios_lista.php">Funcionários</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulário</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-primary card-outline">
        <form action="funcionarios_lista.php" method="POST">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Nome Completo</label>
                  <input type="text" class="form-control" name="nome" placeholder="Ricardo Pereira" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">CPF</label>
                  <input type="text" class="form-control" name="cpf" placeholder="000.000.000-00" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Cargo</label>
                  <select class="form-select" name="cargo" required>
                    <option value="atendente">Atendente</option>
                    <option value="pizzaiolo">Pizzaiolo</option>
                    <option value="gerente">Gerente</option>
                    <option value="outros">Outros</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Telefone</label>
                  <input type="text" class="form-control" name="telefone" placeholder="(00) 00000-0000">
                </div>
                <div class="mb-3">
                  <label class="form-label">Salário (R$)</label>
                  <input type="text" class="form-control" name="salario" placeholder="0.00">
                </div>
                <div class="mb-3">
                  <label class="form-label">Data de Admissão</label>
                  <input type="date" class="form-control" name="data_admissao">
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar Funcionário</button>
            <a href="funcionarios_lista.php" class="btn btn-secondary">Voltar</a>
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
