<!-- nome do site -->
<nav id="sidebar">
  <div class="sidebar-header">
    <h3><?php echo nomeSite; ?></h3>
  </div>

  <ul class="list-unstyled components">

    <!-- BARRA DE BUSCA -->
    <div class="barra-busca">
      <div class="row">
        <div class="col-md-12">
          <div id="custom-search-input">

            <form action="index.php" method="get">
              <div class="input-group col-md-12 no-padding">
                <input type="text" class="form-control input-lg" placeholder="Buscar..." />
                <span class="input-group-btn">
                  <button class="btn btn-info btn-lg botao-buscar" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    <!-- HOME -->
    <li class="active">
      <a href="<?php echo urlSite; ?>">Home</a>
    </li>

    <li>
      <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Matérias</a>
      <ul class="collapse list-unstyled" id="pageSubmenu">
        <li><a href="#">Arquitetura de computadores</a></li>
        <li><a href="#">Algoritmos I</a></li>
        <li><a href="#">Algoritmos II</a></li>
        <li><a href="#">Grafos</a></li>
        <li><a href="#">Lógica Booleana</a></li>
        <li><a href="#">Probabilidade e estatística</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Portfolio</a>
    </li>
    <li>
      <a href="<?php echo urlSite; ?>team/">Team</a>
    </li>
  </ul>

  <ul class="list-unstyled CTAs">
    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="perfil"><i class="fa fa-user"></i> Meu perfil</a></li>
    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="logout"><i class="fa fa-sign-out"></i> Sair do sistema</a></li>
  </ul>
</nav>
