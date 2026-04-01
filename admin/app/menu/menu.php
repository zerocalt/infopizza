<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="../index/index.php" class="brand-link">
      <!--begin::Brand Image-->
      <img
        src="../assets/img/infologo.png"
        alt="iNFO Logo"
        class="brand-image opacity-75 shadow"
      />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">PizzaExpress</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="navigation"
        aria-label="Main navigation"
        data-accordion="false"
        id="navigation"
      >
        <li class="nav-item">
          <a href="../index/index.php" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <!-- Configurações -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-gear-fill"></i>
            <p>
              Configurações
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../config/tema.php" class="nav-link">
                <i class="nav-icon bi bi-palette"></i>
                <p>Identidade Visual</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../config/horarios.php" class="nav-link">
                <i class="nav-icon bi bi-clock"></i>
                <p>Horários</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../config/regras.php" class="nav-link">
                <i class="nav-icon bi bi-list-check"></i>
                <p>Regras de Negócio</p>
              </a>
                        </li>
                        <li class="nav-item">
                            <a href="../configuracoes/contatos.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contatos</p>
                            </a>
            </li>
          </ul>
        </li>

        <!-- Gestão de Cardápio -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-journal-text"></i>
            <p>
              Gestão de Cardápio
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../cardapio/categorias_lista.php" class="nav-link">
                <i class="nav-icon bi bi-tags"></i>
                <p>Categorias</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../cardapio/produtos_lista.php" class="nav-link">
                <i class="nav-icon bi bi-bag"></i>
                <p>Produtos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../cardapio/ingredientes_lista.php" class="nav-link">
                <i class="nav-icon bi bi-egg"></i>
                <p>Ingredientes</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Pedidos -->
        <li class="nav-item">
          <a href="../pedidos/painel.php" class="nav-link">
            <i class="nav-icon bi bi-cart-fill"></i>
            <p>Painel de Pedidos</p>
          </a>
        </li>
            <li class="nav-item">
              <a href="../pedidos/pedido_form.php" class="nav-link">
                <i class="nav-icon bi bi-plus-circle"></i>
                <p>Novo Pedido</p>
              </a>
            </li>

        <!-- Financeiro -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-cash-stack"></i>
            <p>
              Financeiro
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../financeiro/caixa.php" class="nav-link">
                <i class="nav-icon bi bi-calculator"></i>
                <p>Caixa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../financeiro/despesas_lista.php" class="nav-link">
                <i class="nav-icon bi bi-arrow-down-circle"></i>
                <p>Despesas</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Estoque -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-box-seam"></i>
            <p>
              Estoque
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../estoque/lista.php" class="nav-link">
                <i class="nav-icon bi bi-list-ul"></i>
                <p>Consultar Estoque</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../estoque/entrada_form.php" class="nav-link">
                <i class="nav-icon bi bi-plus-circle"></i>
                <p>Entrada de Material</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Equipe & Logística -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-people-fill"></i>
            <p>
              Equipe & Logística
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../equipe/funcionarios_lista.php" class="nav-link">
                <i class="nav-icon bi bi-person-badge"></i>
                <p>Funcionários</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../equipe/entregadores_lista.php" class="nav-link">
                <i class="nav-icon bi bi-bicycle"></i>
                <p>Entregadores</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../logistica/rotas.php" class="nav-link">
                <i class="nav-icon bi bi-geo-alt"></i>
                <p>Rotas de Entrega</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- CRM & Avaliações -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-star-fill"></i>
            <p>
              CRM & Avaliações
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../crm/clientes_lista.php" class="nav-link">
                <i class="nav-icon bi bi-people"></i>
                <p>Clientes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../crm/avaliacoes_produtos.php" class="nav-link">
                <i class="nav-icon bi bi-chat-left-text"></i>
                <p>Avaliações de Produtos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../crm/avaliacoes_entregadores.php" class="nav-link">
                <i class="nav-icon bi bi-chat-right-text"></i>
                <p>Avaliações de Entregadores</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Relatórios -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-graph-up"></i>
            <p>
              Relatórios
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../relatorios/vendas.php" class="nav-link">
                <i class="nav-icon bi bi-pie-chart"></i>
                <p>Vendas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../relatorios/financeiro.php" class="nav-link">
                <i class="nav-icon bi bi-file-earmark-bar-graph"></i>
                <p>Financeiro</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../relatorios/desempenho_entregadores.php" class="nav-link">
                <i class="nav-icon bi bi-speedometer2"></i>
                <p>Entregadores</p>
              </a>
            </li>
          </ul>
        </li>

      </ul>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->
