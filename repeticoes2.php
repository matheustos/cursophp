<?php 
// for
for($contador = 0; $contador <= 10; $contador+=1):
    echo "O contador é $contador";
    echo "<br>";
endfor;

echo "<hr>";

// foreach
$cores = array("Verde", "Vermelho", "Amarelo");
foreach($cores as $indice => $valor):
    echo $indice. "-". $valor. "<br>";
endforeach;



?>