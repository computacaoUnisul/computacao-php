

<h1>Envie material</h1>
<p>Colabore e envie materiais, tudo o que for enviado ficará pendente até a aprovação de um administrador.</p>

<div class="line"></div>

<form enctype="multipart/form-data" method="post" action="">

  <div class="form-row">

    <div class="form-group col-sm-12 col-md-12 col-lg-4">
      <!-- TÍTULO -->
      <label for="inputTitulo">Título do material</label>
      <input type="text" class="form-control" id="inputTitulo" placeholder="Título do material">
      <small class="text-muted">
        Ex.: Prova 01; Prova 02; Exercícios resolvidos.
      </small>
    </div>

    <div class="form-group col-sm-12 col-md-12 col-lg-3">
      <!-- TIPO DE MATERIAL -->
      <label for="selectTipo">O que cadastrar?</label><br/>
      <select id="selectTipo" class="custom-select" style="width: 100%;">
        <option selected>Tipo de conteúdo</option>
        <option value="Prova/Avaliação">Prova/Avaliação</option>
        <option value="Trabalho">Trabalho</option>
        <option value="Trabalho extra">Trabalho extra</option>
        <option value="Atividade/Exercício">Atividade/Exercício</option>
        <option value="Apostila">Apostila</option>
        <option value="Outro material">Outro material</option>
      </select>

      <br>
      <small class="text-muted">
        Ajude a organizar o sistema.
      </small>
    </div>

  </div>

  <div class="form-row">

    <!-- TIPO DE MATERIAL -->
    <div class="form-group col-sm-12 col-md-12 col-lg-4">
      <label for="selectMateria">Matéria</label><br/>
      <select id="selectMateria" class="custom-select" style="width: 100%;">
        <option selected>Selecione uma matéria</option>
        <?php
        $select = $conn->prepare("SELECT * FROM materias ORDER BY mat_nome ASC");
        $select->execute();

        //verifica se existem registros
        if($select->rowCount() > 0):

          // estrutura de repetição
          while($row = $select->fetch(PDO::FETCH_OBJ)): ?>

          <option value="<?php echo $row->mat_id; ?>"><?php echo $row->mat_nome; ?></option>

        <?php endwhile; endif;?>
      </select>

      <br>
      <small class="text-muted">
        É importante para categorizar os materiais.
      </small>
    </div>

    <!-- SEMESTRE -->
    <div class="form-group col-sm-12 col-md-12 col-lg-3">
      <label for="selectSemestre">Semestre</label><br/>
      <select id="selectSemestre" class="custom-select">
        <option selected>Selecione o semestre</option>

        <optgroup label="2017">
          <option value="2017/2">2&ordm; semestre</option>
          <option value="2017/1">1&ordm; semestre</option>
        </option>

        <optgroup label="2016">
          <option value="2016/2">2&ordm; semestre</option>
          <option value="2016/1">1&ordm; semestre</option>
        </option>

        <optgroup label="2015">
          <option value="2015/2">2&ordm; semestre</option>
          <option value="2015/1">1&ordm; semestre</option>
        </option>

        <optgroup label="2014">
          <option value="2014/2">2&ordm; semestre</option>
          <option value="2014/1">1&ordm; semestre</option>
        </option>

        <optgroup label="Outros">
          <option value="-">Não sei</option>
        </option>

      </select>

      <br>
      <small class="text-muted">
        Se não lembrar, selecione a última opção.
      </small>
    </div>

  </div>

  <div class="form-row">

    <div class="form-group col-sm-12 col-md-12 col-lg-7">
      <label for="observacoes">Observações</label>
      <textarea class="form-control" id="observacoes" rows="2"></textarea>
      <small class="text-muted">
        Se não tiver, pode deixar em branco mesmo.
      </small>
    </div>

  </div>


  <div class="form-row">
    <div class="form-group col-sm-12 col-md-12 col-lg-7">
      <input type="submit" class="btn btn-success pull-right" style="cursor: pointer;" value="Cadastrar e selecionar arquivos"/>
    </div>
  </div>

</form>
