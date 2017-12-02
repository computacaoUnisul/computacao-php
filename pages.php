<?php
  if(isset($_GET['page'])){
    $arrPar = preg_split('[/]', $_GET['page'], -1, PREG_SPLIT_NO_EMPTY);

    $pagina = 'home';

    if(isset($arrPar[0])){
      $pagina = $arrPar[0];

      // se o arquivo existir seta a página
      if(file_exists("pages/".$pagina.'.php')){
        include("pages/".$pagina.".php");
      }else{
        include("pages/errors/404.php");
      }

    } //fecha if isset



    // if(isset($arrPar[1])){
    //   $pagina = "home";
    //   if($arrPar[1] == 'detalhes'){
    //     include('detalhes_noticias.php');
    //   }

    // }


  } else {
    include_once('pages/home.php');
  }


?>
