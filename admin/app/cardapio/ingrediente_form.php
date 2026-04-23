
<?php
 require_once("../config/database.php");
  require_once("../config/permissoes.php");
  exigirLogin();

 $pizzaria_id = $_SESSION['pizzaria_id'];
 $id = $_GET['id'] ?? null;
 if($id){
    $stmt = $pdo->prepare("SELECT * FROM ingredientes WHERE id = :id AND pizzaria_id = :pizzaria_id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':pizzaria_id', $pizzaria_id);
    $stmt->execute();
    $ingredientes = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$ingredientes){
      header("Location: ingredientes_lista.php");
      exit();
    }
  }

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    try{
    $nome = $_POST['nome'];
    $unidade = $_POST['unidade'];
    $estoque_minimo = $_POST['estoque_minimo'];

    if($id){
        $stmt = $pdo->prepare("UPDATE ingredientes SET nome = :nome, unidade_medida = :unidade_medida, estoque_minimo = :estoque_minimo WHERE id = :id AND pizzaria_id = :pizzaria_id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':pizzaria_id', $pizzaria_id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':unidade_medida', $unidade);
        $stmt->bindParam(':estoque_minimo', $estoque_minimo);
        $stmt->execute(); 
      } else {

    $stmt = $pdo->prepare("INSERT INTO ingredientes ( pizzaria_id,nome, unidade_medida, estoque_minimo) VALUES (:pizzaria_id, :nome, :unidade, :estoque_minimo)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':unidade', $unidade);
    $stmt->bindParam(':estoque_minimo', $estoque_minimo);
    $stmt->bindParam(':pizzaria_id', $pizzaria_id);
    $stmt->execute();

    }

    header("Location: ingredientes_lista.php");
    exit();
    }catch(PDOException $e) {
      echo "erro ao cadastrar categoria: " . $e->getMessage();
    }
  }
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
        <form action="ingrediente_form.php<?php echo $id ? '?id=' . $id : ''; ?>" method="POST">
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Nome do Ingrediente</label>
              <input type="text" class="form-control" name="nome" placeholder="Ex: Queijo Mussarela" value="<?php echo $id ? $ingredientes['nome'] : ''; ?>" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Unidade de Medida</label>
              <select class="form-select" name="unidade" required>
                <option value="kg" <?php echo $id && $ingredientes['unidade_medida'] === 'kg' ? 'selected' : ''; ?>>Quilograma (kg)</option>
                <option value="un" <?php echo $id && $ingredientes['unidade_medida'] === 'un' ? 'selected' : ''; ?>>Unidade (un)</option>
                <option value="litro" <?php echo $id && $ingredientes['unidade_medida'] === 'litro' ? 'selected' : ''; ?>>Litro (l)</option>
                <option value="grama" <?php echo $id && $ingredientes['unidade_medida'] === 'grama' ? 'selected' : ''; ?>>Grama (g)</option>
              </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Estoque Mínimo para Alerta</label>
                <input type="number" step="0.001" class="form-control" name="estoque_minimo" placeholder="5.000" value="<?php echo $id ? $ingredientes['estoque_minimo'] : ''; ?>" required>
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
