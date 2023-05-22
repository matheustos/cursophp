<?php 
$contador = 1;

while($contador <= 10):
    echo "contador é $contador";
    $contador+=1;
    echo "<br>";
endwhile;

echo "<hr>";

$contador = 1;

do {
    echo "contador é $contador";
    $contador+=1;
    echo "<br>";
} while($contador <= 10);


?>
