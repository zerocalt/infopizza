<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Identidade Visual</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="../index/index.php">Principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tema</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card card-primary card-outline mb-4">
            <div class="card-header"><div class="card-title">Personalização do Tema</div></div>
            <form action="tema.php" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Cor Primária</label>
                  <input type="color" class="form-control form-control-color" name="cor_primaria" value="#007bff">
                </div>
                <div class="mb-3">
                  <label class="form-label">Cor Secundária</label>
                  <input type="color" class="form-control form-control-color" name="cor_secundaria" value="#6c757d">
                </div>
                <div class="mb-3">
                  <label class="form-label">Logomarca (PNG recomendado)</label>
                  <input type="file" class="form-control" name="logo">
                </div>
                <div class="mb-3">
                  <label class="form-label">Banner da Loja</label>
                  <input type="file" class="form-control" name="banner">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
            <div class="card card-info card-outline">
                <div class="card-header"><div class="card-title">Preview</div></div>
                <div class="card-body text-center">
                    <p>Como sua loja aparece para os clientes:</p>
                    <div style="border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
                        <div style="background-color: #007bff; height: 100px; display: flex; align-items: center; justify-content: center; color: white;">
                            Banner Preview
                        </div>
                        <div style="padding: 20px;">
                            <img src="../assets/img/infologo.png" alt="Logo" style="max-height: 60px; margin-bottom: 10px;">
                            <h4 style="color: #007bff;">Nome da sua Pizzaria</h4>
                            <button class="btn btn-primary btn-sm">Fazer Pedido</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
  // Footer scripts would go here, usually in a separate file too but using AdminLTE includes for now.
?>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="../js/adminlte.js"></script>
  </body>
</html>
