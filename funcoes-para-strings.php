<?php 
// strtoupper - converte string para maiuscula

$nome = "matheus santos ferro";
$nomeMaiusculo = strtoupper($nome);
echo $nomeMaiusculo;
echo "<br>";

// strtolower - converte string para minusculo

$nome = "matheus santos ferro";
$nomeMinusculo = strtolower($nome);
echo $nomeMinusculo;
echo "<br>";

// substr - conta apenas os caracteres após a posição passada como parâmetro

$mensagem = "Olá Mundo";
echo substr($mensagem, 4);
echo "<br>";

// str_pad - complementa outra string com a aquantidade especificada de caracteres

$objeto = "mouse";
$novo_objeto = str_pad($objeto, 7, "&&");
echo $novo_objeto;
echo "<br>";

// str_repeat - repete uma string de acordo com a quantidade de vezes colocada como parâmetro

$string = str_repeat("Sucesso "."<br>", 5);
echo $string;
echo "<br>";

// strlen - Retorna o comprimento de uma string - equivalente ao len em python

$mensagem = "Olá Mundo";
$comp = strlen($mensagem);
echo $comp;
echo "<br>";

// str_replace - substitui uma palavra por outra

$texto = "A seleção argentina será campeã do mundo em 2026";
$novo_texto = str_replace("argentina", "brasileira", $texto);
echo $novo_texto;
echo "<br>";

// strpos - serve para mostrar a posição de uma palavra em um texto

echo strpos($texto, "campeã");


?>