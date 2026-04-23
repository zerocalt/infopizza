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
        <div class="col-sm-6"><h3 class="mb-0">Detalhes do Pedido #1025</h3></div>
        <div class="col-sm-6 text-end">
          <a href="painel.php" class="btn btn-secondary">Voltar</a>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-outline card-primary">
            <div class="card-header"><h3 class="card-title">Itens do Pedido</h3></div>
            <div class="card-body p-0">
              <table class="table table-striped align-middle">
                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Observação</th>
                    <th class="text-end">Qtd</th>
                    <th class="text-end">Valor Unit</th>
                    <th class="text-end">Subtotal</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Pizza de Calabresa (G)</td>
                    <td>Sem cebola</td>
                    <td class="text-end">1</td>
                    <td class="text-end">R$ 45,00</td>
                    <td class="text-end">R$ 45,00</td>
                  </tr>
                  <tr>
                    <td>Coca-Cola 2L</td>
                    <td>Gelada</td>
                    <td class="text-end">1</td>
                    <td class="text-end">R$ 12,00</td>
                    <td class="text-end">R$ 12,00</td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th colspan="4" class="text-end">Total Itens</th>
                    <th class="text-end">R$ 57,00</th>
                  </tr>
                  <tr>
                    <th colspan="4" class="text-end">Taxa de Entrega</th>
                    <th class="text-end">R$ 5,00</th>
                  </tr>
                  <tr class="table-primary">
                    <th colspan="4" class="text-end fs-4">Total Geral</th>
                    <th class="text-end fs-4">R$ 62,00</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card card-outline card-info">
            <div class="card-header"><h3 class="card-title">Dados do Cliente</h3></div>
            <div class="card-body">
              <strong>Nome:</strong> João Silva <br>
              <strong>Telefone:</strong> (11) 99999-9999 <br>
              <strong>Endereço:</strong> Rua das Flores, 123, Bairro Jardins <br>
              <strong>Pagamento:</strong> Cartão (Máquina) <br>
              <hr>
              <strong>Tempo Estimado:</strong> 40 min <br>
              <strong>Status Atual:</strong> <span class="badge text-bg-info">Recebido</span>
            </div>
            <div class="card-footer text-center">
              <button class="btn btn-danger btn-block w-100" data-bs-toggle="modal" data-bs-target="#modalCancelar">Cancelar Pedido</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Cancelar -->
  <div class="modal fade" id="modalCancelar" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cancelar Pedido #1025</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-warning small">O cancelamento estornará os itens ao estoque automaticamente.</div>
          <div class="mb-3">
            <label class="form-label">Motivo do Cancelamento</label>
            <textarea class="form-control" rows="3" placeholder="O cliente desistiu..."></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-danger">Confirmar Cancelamento</button>
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
