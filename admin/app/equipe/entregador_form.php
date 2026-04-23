<?php
 require_once("../config/database.php");
  require_once("../config/permissoes.php");
  exigirLogin();

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    try{
    $nome = $_POST['nome'];
    $cpf= $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $veiculo_tipo = $_POST ['veiculo_tipo'];
    $placa = $_POST['placa'];
    $dados_bancarios = $_POST['dados_bancarios'];

    $pizzaria_id = $_SESSION['pizzaria_id'];

    $stmt = $pdo->prepare("INSERT INTO entregadores (pizzaria_id,nome,cpf,telefone,	veiculo_tipo,veiculo_placa	,dados_bancarios) VALUES (:pizzaria_id	,:nome	,:cpf,	:telefone,	:veiculo_tipo,	:veiculo_placa	,:dados_bancarios)");
    $stmt->bindParam(':pizzaria_id', $pizzaria_id);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':veiculo_tipo', $veiculo_tipo);
    $stmt->bindParam(':veiculo_placa', $veiculo_tipo);
    $stmt->bindParam(':dados_bancarios', $dados_bancarios);
    $stmt->execute();

    header("Location: entregadores_lista.php");
    exit();
    }catch(PDOxception $e){
      echo"erro au cadastra categoria:" .$e->getMessage();
  }
  }
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Cadastro de Entregador</h3></div>
        <div class="col-sm-6 text-end">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="../index/index.php">Principal</a></li>
            <li class="breadcrumb-item"><a href="entregadores_lista.php">Entregadores</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulário</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="card card-primary card-outline">
        <form action="entregador_form.php" method="POST">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Nome Completo</label>
                  <input type="text" class="form-control" name="nome" placeholder="Paulo Motta" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">CPF</label>
                  <input type="text" class="form-control" name="cpf" placeholder="000.000.000-00" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Telefone</label>
                  <input type="text" class="form-control" name="telefone" placeholder="(00) 00000-0000">
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label">Tipo de Veículo</label>
                  <select class="form-select" name="veiculo_tipo">
                    <option value="moto">Moto</option>
                    <option value="carro">Carro</option>
                    <option value="bike">Bicicleta</option>
                    <option value="outros">Outros</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Placa do Veículo (Se houver)</label>
                  <input type="text" class="form-control" name="placa" placeholder="ABC-1234">
                </div>
                <div class="mb-3">
                  <label class="form-label">Dados Bancários para Pagamento</label>
                  <textarea class="form-control" name="dados_bancarios" rows="2" placeholder="Banco, Agência, Conta ou Chave PIX"></textarea>
                </div>
              </div>
            </div>
            <div class="alert alert-info small mt-3">O modelo de comissão é global e pode ser configurado em <a href="../config/regras.php">Regras de Negócio</a>.</div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar Entregador</button>
            <a href="entregadores_lista.php" class="btn btn-secondary">Voltar</a>
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
