<?php 
$numero = 0;

if ($numero == 10):
    echo "É igual a 10";
elseif ($numero ==0):
    echo "É igual a zero.";
else:
    echo "É diferente de 10";
endif;

echo "<hr>";

$media = 7;

echo ($media >= 7) ? "Aprovado!" : "Reprovado!";

?>