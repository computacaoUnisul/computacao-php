<?php

$aliasProfessor = preg_split('[/]', $_GET['page'], -1, PREG_SPLIT_NO_EMPTY);

// SELECT DE MATÉRIAS DO PROFESSOR
$select = $conn->prepare("SELECT *
  FROM professores
  LEFT JOIN materias ON materias.mat_professor = professores.prof_id
  WHERE professores.prof_alias = ?");
  $select->execute(array($aliasProfessor[1]));
  $linha = $select->fetch(PDO::FETCH_OBJ); ?>


  <div class="row dados-professor">

    <?php if(!empty($linha->prof_avatar)){ ?>
      <div class="col-md-2 mb-3">
        <img class="img-responsive" style="width: 100%;" src="<?php echo urlSite; ?>assets/professores/<?php echo $linha->prof_avatar; ?>">
      </div>

      <div class="col-10">
      <?php } else { ?>
        <div class="col-12">
        <?php } ?>

        <?php if(!empty($linha->prof_nome)){ echo "<h4>".$linha->prof_nome." ".$linha->prof_sobrenome;

          if($linha->prof_status == "Desativado"):
            echo " <span class='badge badge-pill badge-danger'>Desativado</span>";
          endif;

          echo "</h4>";
        }
        ?>
        <?php if(!empty($linha->prof_email)){ echo "<p>E-mail: ".$linha->prof_email."</p>"; } ?>
          <?php if(!empty($linha->prof_telefone)){ echo "<p>Telefone: ".$linha->prof_telefone."</p>"; } ?>

            <?php if(!empty($linha->prof_descricao)){
              echo "<div style='margin: 15px 0 15px 0; border: 1px solid #383e44;'></div>";
              echo $linha->prof_descricao."<br/><br/>";
            }
            ?>

          </div>
        </div>

        <div class="line" style="margin: 0 0 30px 0;"></div>
        <h5>Matérias lecionadas</h5>

        <div class="table-responsive">
          <table class="table table-striped table-dark">
            <!-- <thead>
            <tr>
            <th scope="col">Nome da matéria</th>
          </tr>
        </thead> -->
        <tbody>

          <?php
          //verifica se existem registros
          if($select->rowCount() > 0):

            // estrutura de repetição
            while($row = $select->fetch(PDO::FETCH_OBJ)): ?>
            <tr>

              <!-- NOME DA MATÉRIA -->
              <td>
                <?php if($row->mat_status == "Pendente"){
                  echo $row->mat_nome;
                  ?>
                  <span class="badge badge-warning">Aprovação pendente</span>
                  <?php
                } else { ?>
                  <a href="<?php echo urlSite."materia/".$row->mat_alias; ?>"><?php echo $row->mat_nome; ?></a>
                <?php } ?>
              </td>

            </tr>
          <?php endwhile; endif;?>

        </tbody>
      </table>
    </div>
