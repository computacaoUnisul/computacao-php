<?php

$nomeSite = "Biblioteca da Computação";
$arquivoLogomarca = "";
$urlSite = "http://oregionalsul.me/computacao/";

// o site será liberado ao público, ou seja, não necessita de login e senha
$bloqueiaSite = false;

// seta variáveis no escopo
define("nomeSite", $nomeSite);
define("arquivoLogo", $arquivoLogomarca);
define("urlSite", $urlSite);


//Conexão com o Banco de Dados
try{
    $driver = 'mysql';
    $host = 'oregionalsul.me';
    $usuario = 'pweb';
    $senha = 'pweb';
    $dbname = 'computacao';

    $conn = new PDO("$driver:host=$host;dbname=$dbname", $usuario, $senha);
} catch (PDOException $e){
    echo "Erro ao conectar no banco de dados $dbname <BR/>";
    echo $e->getMessage();
    die();
}


// timezone default
date_default_timezone_set("America/Sao_Paulo");

?>
