<?php
  require_once("../top/topo.php");
  require_once("../menu/menu.php");
?>
<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Gestão de Caixa</h3></div>
        <div class="col-sm-6 text-end">
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalFecharCaixa">Fechar Caixa</button>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row">
        <!-- Resumo -->
        <div class="col-md-4">
          <div class="small-box text-bg-info">
            <div class="inner"><h3>R$ 150,00</h3><p>Valor de Abertura</p></div>
            <i class="small-box-icon bi bi-wallet2"></i>
          </div>
          <div class="small-box text-bg-success">
            <div class="inner"><h3>R$ 840,00</h3><p>Entradas (Vendas)</p></div>
            <i class="small-box-icon bi bi-plus-circle"></i>
          </div>
          <div class="small-box text-bg-danger">
            <div class="inner"><h3>R$ 35,00</h3><p>Saídas (Sangrias)</p></div>
            <i class="small-box-icon bi bi-dash-circle"></i>
          </div>
          <div class="small-box text-bg-primary">
            <div class="inner"><h3>R$ 955,00</h3><p>Saldo Atual</p></div>
            <i class="small-box-icon bi bi-cash"></i>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Movimentações de Hoje</h3>
              <div class="card-tools">
                <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalMovimentacao"><i class="bi bi-plus"></i> Nova Movimentação</button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table table-striped align-middle">
                <thead>
                  <tr>
                    <th>Hora</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Forma</th>
                    <th class="text-end">Valor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>18:00</td>
                    <td><span class="badge text-bg-info">Abertura</span></td>
                    <td>Abertura de Caixa</td>
                    <td>Dinheiro</td>
                    <td class="text-end">R$ 150,00</td>
                  </tr>
                  <tr>
                    <td>18:45</td>
                    <td><span class="badge text-bg-success">Entrada</span></td>
                    <td>Pedido #1024</td>
                    <td>Cartão</td>
                    <td class="text-end">R$ 65,00</td>
                  </tr>
                  <tr>
                    <td>19:20</td>
                    <td><span class="badge text-bg-danger">Saída</span></td>
                    <td>Sangria (Troco Moedas)</td>
                    <td>Dinheiro</td>
                    <td class="text-end">R$ 35,00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Movimentação -->
  <div class="modal fade" id="modalMovimentacao" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registrar Movimentação de Caixa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Tipo de Movimento</label>
              <select class="form-select">
                <option value="entrada">Entrada (Suprimento)</option>
                <option value="saida">Saída (Sangria)</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Valor (R$)</label>
              <input type="text" class="form-control" placeholder="0.00">
            </div>
            <div class="mb-3">
              <label class="form-label">Descrição / Motivo</label>
              <input type="text" class="form-control" placeholder="Ex: Compra de gelo">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Registrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Fechar Caixa -->
  <div class="modal fade" id="modalFecharCaixa" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Fechar Caixa - Conferência</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-info">Saldo esperado no sistema: <strong>R$ 955,00</strong></div>
          <div class="mb-3">
            <label class="form-label">Valor Real Contado em Dinheiro (R$)</label>
            <input type="text" class="form-control" placeholder="0.00">
          </div>
          <p class="text-muted small">O sistema calculará automaticamente qualquer diferença (sobra ou falta).</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
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
