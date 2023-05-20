<?php
// is_array
$nomes= array("Primo" => "Rodrigo", "Vizinho" => "Felipe", "Mãe" => "Maria", "Pai" => "José");

$keys = array($nomes);

print_r($keys);

echo "<br>";

echo is_array($nomes);

echo "<br>";

if(is_array($nomes)):
    echo "Sim, é um array";

else:
    echo "Não é um array";
endif;

echo "<br>";

// in_array

echo in_array("Rodrigo", $nomes);

echo "<br>";

if(in_array("Carlos", $nomes)):
    echo "Sim, o valor está no array";

else:
    echo "O valor não foi encontrado no array";
endif;

echo "<br>";

// array_values

$values = array_values($nomes);
print_r($values);

echo "<br>";

// arrays_merge

$carros = array("Camaro", "Uno", "Gol");
$motos = array("Pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);


print_r($veiculos);
echo "<br>";

// array_pop

array_pop($carros);
print_r($carros);

echo "<br>";


// array_unshift

$frutas = array("Uva", "Laranja", "Maçã");
print_r($frutas);

echo "<br>";

array_unshift($frutas, "manga", "Acerola", "morango");
print_r($frutas);

echo "<br>";
// array_push

array_push($frutas, "Goiaba");
print_r($frutas);

echo "<br>";

//array_combine

$keys = array("campeão", "Vice", "Terceiro");
$Valores = array("Flamengo", "Vasco", "Botafogo");

$times = array_combine($keys, $Valores);

print_r($times);

echo "<br>";

// array_sum

$numbers = array(10, 20, 30, 50);

echo array_sum($numbers);

echo "<br>";



