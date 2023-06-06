<?php 
$string = "255ghhhhh";

$padrao = "/^[a-z0-9]{8,500}$/i";

if(preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";

endif;




?>