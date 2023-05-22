<?php 
$idade = 25;
$nome = "Matheus";

// and
if(($idade == 25) and ($nome == "Matheus")):
    echo "Verdade";
else:
    echo "Falso";
endif;

echo "<br>";

// or
if(($idade == 25) or ($nome == "Ronaldo")):
    echo "Verdade";
else:
    echo "Falso";
endif;

echo "<br>";

// xor
if(($idade == 25) xor ($nome == "Matheus")):
    echo "Verdade";
else:
    echo "Falso";
endif;

echo "<br>";

// negação
if(!($idade == 25) and ($nome == "Matheus")):
    echo "Verdade";
else:
    echo "Falso";
endif;

echo "<br>";





?>
