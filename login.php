<?php require("config/config.php"); ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Efetue login | <?php echo nomeSite; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Font-awesome -->
    <script src="https://use.fontawesome.com/dd1e1cb31a.js"></script>

    <!-- css do sistema -->
    <link rel="stylesheet" type="text/css" href="<?php echo urlSite; ?>css/style-login.css">

  </head>

  <body>

  <div class="container-fluid jumbotron">
    <div class="row justify-content-md-center justify-content-sm-center">

      <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">

        <h2><i class="fa fa-lock"></i> Efetue login</h2>
        <p>Para acessar os materiais é necessário efetuar login.</p>

        <form action="verifica-login.php" class="mb-4" method="post">

          <div class="form-group">
            <label class="col-form-label" for="login">Usuário: </label>
            <input type="text" class="form-control" id="login" placeholder="Usuário">
          </div>

          <div class="form-group cursor-pointer">
            <label class="col-form-label" for="pass">Senha: </label>
            <input type="password" class="form-control" id="pass" placeholder="Senha">
          </div>

          <button type="submit" class="btn btn-primary btn-lg btn-block">Acessar</button>

        </form>

        <p>Não possui conta? <br><a href="<?php echo urlSite; ?>cadastro.php"><b>Preencha um pré-cadastro.</b></a></p>

      </div>
    </div>


  </div>



  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
