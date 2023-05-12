<?php
$nome = "Matheus Ferro";

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

function exibeCidade() {
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;