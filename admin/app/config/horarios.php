<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Horários de Atendimento</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="../index/index.php">Principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Horários</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mb-3">
          <div class="card card-warning card-outline">
            <div class="card-header"><div class="card-title">Controle Manual da Loja</div></div>
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <h4 class="mb-0">Loja Ativa: <span class="badge text-bg-success">ABERTO</span></h4>
                  <p class="text-muted">A loja está aceitando pedidos no momento.</p>
                </div>
                <div>
                  <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalFechar">Fechar Manualmente</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="card card-primary card-outline">
            <div class="card-header"><div class="card-title">Grade Semanal de Horários</div></div>
            <form action="horarios.php" method="POST">
              <div class="card-body p-0">
                <table class="table table-hover align-middle">
                  <thead>
                    <tr>
                      <th style="width: 20%">Dia da Semana</th>
                      <th>Status</th>
                      <th>Abertura</th>
                      <th>Fechamento</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $dias = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
                    foreach ($dias as $dia) {
                      echo "<tr>
                        <td>$dia</td>
                        <td>
                          <div class='form-check form-switch'>
                            <input class='form-check-input' type='checkbox' checked>
                          </div>
                        </td>
                        <td><input type='time' class='form-control' value='18:00'></td>
                        <td><input type='time' class='form-control' value='23:30'></td>
                      </tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Salvar Grade de Horários</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Fechamento -->
  <div class="modal fade" id="modalFechar" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Fechar Loja para Pedidos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form id="formFechar">
            <div class="mb-3">
              <label class="form-label">Justificativa para os Clientes</label>
              <textarea class="form-control" rows="3" placeholder="Ex: Hoje não abriremos devido ao feriado de Natal."></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Confirmar Fechamento</button>
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
