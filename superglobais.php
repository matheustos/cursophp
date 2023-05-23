<?php 

// $GLOBALS - usada para acessar variáveis globais de qualquer lugar do script

$x = 10;
$y = 15;

function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();

echo "<hr>";

// $_SERVER

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";

echo "<hr>";

// $_POST - recebe parâmetros de forma invisível

// $_GET - recebe parâmetros que ficam visíveis na url








?>