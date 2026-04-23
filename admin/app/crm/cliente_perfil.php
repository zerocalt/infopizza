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
        <div class="col-sm-6"><h3 class="mb-0">Perfil do Cliente: João Silva</h3></div>
        <div class="col-sm-6 text-end">
          <a href="clientes_lista.php" class="btn btn-secondary">Voltar</a>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-outline card-primary shadow">
            <div class="card-body text-center">
              <img src="../assets/img/user1-128x128.jpg" class="rounded-circle mb-3" alt="User Image">
              <h4 class="mb-0">João Silva</h4>
              <p class="text-muted">Membro desde 2025</p>
              <div class="mb-3">
                <span class="badge text-bg-success fs-5">Score Interno: 5.0</span>
              </div>
              <p><strong>Telefone:</strong> (11) 99999-9999</p>
              <p><strong>E-mail:</strong> joao.silva@email.com</p>
              <p><strong>Endereço:</strong> Rua das Flores, 123 - Jardins</p>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card card-outline card-warning shadow mb-4">
            <div class="card-header"><h3 class="card-title">Score e Observações Internas</h3></div>
            <form action="cliente_perfil.php" method="POST">
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Alterar Score (1-5)</label>
                  <select class="form-select w-25">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5" selected>5</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label class="form-label">Observação Privada (Apenas equipe)</label>
                  <textarea class="form-control" rows="3" placeholder="Ex: Cliente costuma pedir sempre os mesmos sabores e paga em dia."></textarea>
                </div>
              </div>
              <div class="card-footer text-end">
                <button type="submit" class="btn btn-warning">Salvar Observação</button>
              </div>
            </form>
          </div>

          <div class="card card-outline card-info shadow">
            <div class="card-header"><h3 class="card-title">Histórico de Pedidos</h3></div>
            <div class="card-body p-0">
              <table class="table table-striped align-middle small">
                <thead>
                  <tr>
                    <th>Data</th>
                    <th>Itens</th>
                    <th>Valor</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01/03/2026</td>
                    <td>1x Pizza Calabresa, 1x Coca-Cola 2L</td>
                    <td>R$ 62,00</td>
                    <td><span class="badge text-bg-success">Entregue</span></td>
                  </tr>
                  <tr>
                    <td>15/02/2026</td>
                    <td>1x Pizza Portuguesa (M)</td>
                    <td>R$ 42,00</td>
                    <td><span class="badge text-bg-success">Entregue</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
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
