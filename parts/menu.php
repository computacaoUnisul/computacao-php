<!-- <div class="container-fluid">
  <div class="row row-offcanvas row-offcanvas-left">
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation"> -->
      <!-- nome do site -->
      <nav id="sidebar">

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
              <li><a href="<?php echo urlSite; ?>materias"><i class="fa fa-list"></i> Ver todas em lista</a></li>

              <?php

              $select = $conn->prepare("SELECT * FROM materias ORDER BY mat_nome ASC");
              $select->execute();

              //verifica se existem registros
              if($select->rowCount() > 0):

                // estrutura de repetição
                while($row = $select->fetch(PDO::FETCH_OBJ)): ?>

                <li><a href="<?php echo urlSite; ?>materia/<?php echo $row->mat_alias; ?>"><?php echo $row->mat_nome; ?></a></li>

              <?php endwhile; endif;?>

            </ul>

          </li>

          <li>
            <a href="#pageSubmenuProfessores" data-toggle="collapse" aria-expanded="false">Professores</a>

            <ul class="collapse list-unstyled" id="pageSubmenuProfessores">

              <?php

              $selectProfessores = $conn->prepare("SELECT * FROM professores WHERE prof_status <> ? AND prof_status <> ? ORDER BY prof_nome ASC");
              $selectProfessores->execute(array("Desativado", "Pendente"));

              // verifica se existem registros
              if($selectProfessores->rowCount() > 0):

                // estrutura de repetição
                while($rowProfessores = $selectProfessores->fetch(PDO::FETCH_OBJ)): ?>

                <li><a href="<?php echo urlSite; ?>professor/<?php echo $rowProfessores->prof_alias; ?>"><?php echo $rowProfessores->prof_nome." ".$rowProfessores->prof_sobrenome; ?></a></li>

              <?php endwhile; endif;?>

            </ul>

          </li>

          <li>
            <a href="<?php echo urlSite; ?>qisso/">Qisso?</a>
          </li>
          <li>
            <a href="<?php echo urlSite; ?>team/">Team</a>
          </li>

        </ul>

        <ul class="list-unstyled CTAs botoes-sidebar">
          <li><a href="#" class="perfil"><i class="fa fa-user"></i> Meu perfil</a></li>
          <li><a href="<?php echo urlSite; ?>login.php" class="logout"><i class="fa fa-sign-out"></i> Sair do sistema</a></li>
        </ul>
      </nav>
    <!-- </div>
  </div>
</div> -->
