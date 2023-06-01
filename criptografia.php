<?php 
$senha ="Alm#2020";

$novasenha = base64_encode($senha);

echo "<br>";

echo $novasenha;

$senha2 = base64_decode($novasenha);

echo "<br>";

echo $senha2;

echo "<hr>";

echo "Md5: ". md5($senha);

echo "<hr>";

echo "SHA1: ". sha1($senha);





?>