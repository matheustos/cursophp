<?php 
$cor = "Vermelho";

switch ($cor):
    case "Vermelho":
        echo "A cor é Vermelho!";
    break;
    case "Amarelo":
        echo "A cor é Amarelo!";
    break;
    case "Azul":
        echo "A cor é Azul!";
    break;
    default:
        echo "Sua cor não consta no sistema";
    endswitch;

?>