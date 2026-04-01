<?php include '../layout/header.php'; ?>
<?php include '../layout/sidebar.php'; ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Novo Pedido (Balcão/Telefone)</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <!-- Seleção de Produtos -->
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Cardápio</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 250px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar produto...">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Categoria</th>
                                        <th>Preço</th>
                                        <th style="width: 100px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pizza Calabresa</td>
                                        <td>Pizzas</td>
                                        <td>R$ 45,00</td>
                                        <td><button class="btn btn-success btn-xs"><i class="fas fa-plus"></i> Add</button></td>
                                    </tr>
                                    <tr>
                                        <td>Pizza Margherita</td>
                                        <td>Pizzas</td>
                                        <td>R$ 42,00</td>
                                        <td><button class="btn btn-success btn-xs"><i class="fas fa-plus"></i> Add</button></td>
                                    </tr>
                                    <tr>
                                        <td>Coca-Cola 2L</td>
                                        <td>Bebidas</td>
                                        <td>R$ 12,00</td>
                                        <td><button class="btn btn-success btn-xs"><i class="fas fa-plus"></i> Add</button></td>
                                    </tr>
                                    <tr>
                                        <td>Pizza Meio-a-Meio</td>
                                        <td>Pizzas</td>
                                        <td>--</td>
                                        <td><button class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-meio-meio"><i class="fas fa-pizza-slice"></i> Montar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Carrinho e Dados do Cliente -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Carrinho</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Pizza Calabresa</b> <a class="float-right text-danger"><i class="fas fa-times"></i></a>
                                    <p class="small text-muted mb-0">Obs: Sem cebola</p>
                                    <span class="float-right text-dark">R$ 45,00</span>
                                </li>
                                <li class="list-group-item">
                                    <b>Coca-Cola 2L</b> <a class="float-right text-danger"><i class="fas fa-times"></i></a>
                                    <span class="float-right text-dark">R$ 12,00</span>
                                </li>
                            </ul>

                            <hr>
                            
                            <div class="form-group">
                                <label>Cliente (Telefone/Nome)</label>
                                <input type="text" class="form-control" placeholder="(11) 99999-9999 ou Nome">
                                <small><a href="../crm/cliente_form.php">+ Novo Cliente</a></small>
                            </div>

                            <div class="form-group">
                                <label>Tipo de Pedido</label>
                                <select class="form-control">
                                    <option>Entrega</option>
                                    <option>Retirada</option>
                                    <option>Consumo no Local</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Forma de Pagamento</label>
                                <select class="form-control">
                                    <option>Dinheiro</option>
                                    <option>Cartão (Maquininha)</option>
                                    <option>Pix (Pagar na Entrega)</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <h5>Total:</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <h4>R$ 57,00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Confirmar Pedido</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal Meio a Meio -->
<div class="modal fade" id="modal-meio-meio">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Montar Pizza Meio-a-Meio</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Tamanho</label>
                    <select class="form-control">
                        <option>Grande (8 fatias)</option>
                        <option>Média (6 fatias)</option>
                        <option>Brotinho (4 fatias)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Sabor 1</label>
                    <select class="form-control">
                        <option>Calabresa (R$ 45,00)</option>
                        <option>Margherita (R$ 42,00)</option>
                        <option>Frango c/ Catupiry (R$ 48,00)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Sabor 2</label>
                    <select class="form-control">
                        <option>Frango c/ Catupiry (R$ 48,00)</option>
                        <option>Calabresa (R$ 45,00)</option>
                        <option>Margherita (R$ 42,00)</option>
                    </select>
                </div>
                <div class="alert alert-info">
                    <strong>Regra de Preço:</strong> Maior Valor<br>
                    <strong>Preço Final:</strong> R$ 48,00
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>
</div>

<?php include '../layout/footer.php'; ?>
