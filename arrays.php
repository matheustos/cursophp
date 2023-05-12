<?php
// arrays -> equivalente a lista em python
$carros = array("BMW", "Veloster", "Hilux");

echo "<hr>";
echo $carros[0];
echo "<hr>";
echo $carros[1];
echo "<hr>";
echo $carros[2];

//inserindo dado no array
$carros[] = "Amarok";
echo "<hr>";

echo $carros[3];
echo "<hr>";
print_r ($carros);
echo "<hr>";

// Count
echo count($carros);
echo "<hr>";

// Foreach
foreach($carros as $valor){
    echo $valor. "<br>";
}

// Arrays associativos -> equivalente a dicionário em python
echo "<hr>";
$pessoa = array("nome"=> "Rodrigo", "idade"=> 23, "altura"=> 1.75);
echo $pessoa["nome"];
echo "<hr>";
echo $pessoa["idade"];
echo "<hr>";
echo $pessoa["altura"];

$pessoa["cidade"] = "Aracaju";
echo "<hr>";
print_r($pessoa);
echo "<hr>";

foreach($pessoa as $indice => $valor){
    echo $indice.' : '.$valor. "<br>";
}
echo "<hr>";

//Array multidimensional
$times = array("cariocas" => array("Flamengo", "Vasco", "Fluminense", "Botafogo"), 
"paulistas" => array("São Paulo", "Santos", "Palmeiras", "Corinthians"));
print_r($times["cariocas"]);
echo "<hr>";
print_r($times["paulistas"]);
echo "<hr>";
echo $times["cariocas"][0];

echo "<hr>";
foreach($times["cariocas"] as $indice => $valor){
    echo $indice.' : '.$valor. "<br>";
}
echo "<hr>";

foreach($times["paulistas"] as $indice => $valor){
    echo $indice.' : '.$valor. "<br>";
}
echo "<hr>";