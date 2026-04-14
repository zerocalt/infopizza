<?php
  require_once("../config/database.php");

  $pizzaria_id = 1;
  $id = $_GET['id'] ?? null;
  if($id){
    $stmt = $pdo->prepare("SELECT * FROM categorias WHERE id = :id AND pizzaria_id = :pizzaria_id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':pizzaria_id', $pizzaria_id);
    $stmt->execute();
    $categoria = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$categoria){
      header("Location: categorias_lista.php");
      exit();
    }
  }

  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    try{
      $nome = $_POST['nome'];
      $tempo_preparo = $_POST['tempo_preparo'];
      $descricao = $_POST['descricao'];
      
      if($id){
        $stmt = $pdo->prepare("UPDATE categorias SET nome = :nome, tempo_preparo_padrao = :tempo_preparo, descricao = :descricao WHERE id = :id AND pizzaria_id = :pizzaria_id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':pizzaria_id', $pizzaria_id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':tempo_preparo', $tempo_preparo);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->execute(); 
      } else {

      $stmt = $pdo->prepare("INSERT INTO categorias (pizzaria_id, nome, tempo_preparo_padrao, descricao) VALUES (:pizzaria_id, :nome, :tempo_preparo, :descricao)");
      $stmt->bindParam(':pizzaria_id', $pizzaria_id);
      $stmt->bindParam(':nome', $nome);
      $stmt->bindParam(':tempo_preparo', $tempo_preparo);
      $stmt->bindParam(':descricao', $descricao);
      $stmt->execute();

      }

      header("Location: categorias_lista.php");
      exit();
    } catch(PDOException $e) {
      echo "Erro ao cadastrar categoria: " . $e->getMessage();
    }
  }

  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0"><?php echo $id ? 'Editar' : 'Cadastrar'; ?> Categoria</h3></div>
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
        <form action="categoria_form.php<?php echo $id ? '?id=' . $id : ''; ?>" method="POST">
          <div class="card-body">
            <div class="mb-3">
              <label class="form-label">Nome da Categoria</label>
              <input type="text" class="form-control" name="nome" placeholder="Ex: Pizzas" value="<?php echo $id ? $categoria['nome'] : ''; ?>" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Tempo de Preparo Padrão (Minutos)</label>
              <input type="number" class="form-control" name="tempo_preparo" placeholder="40" value="<?php echo $id ? $categoria['tempo_preparo_padrao'] : ''; ?>" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Descrição</label>
              <textarea class="form-control" name="descricao" rows="3"><?php echo $id ? $categoria['descricao'] : ''; ?></textarea>
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
