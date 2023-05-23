<?php 
// Criando funcoes

function exibirNome() {
    echo "Meu nome é Matheus";

}
exibirNome();

echo "<hr>";

function exibirNome2($nome) {
    echo "Meu nome é $nome";
}
exibirNome2("Leandro");

echo "<hr>";

function tabuada($valor){
    $contador = 0;
    while($contador <= 10):
        $contador+=1;
        $resul = $valor*$contador;
        echo "$valor x $contador = $resul<br>";
    endwhile;
}

tabuada(93);

echo "<hr>";

function calcularMedia($valor1, $valor2){
    $media = ($valor1 + $valor2) / 2;
    echo "A média entre $valor1 e $valor2 é $media";
}

calcularMedia(10, 15);

echo "<hr>";

function calculadora($operacao, $valor1, $valor2){
    if($operacao == "multiplicação"):
        $result = $valor1 * $valor2;
        echo "O resultado é $result";
    elseif($operacao == "divisão"):
        $result = $valor1 / $valor2;
        echo "O resultado é $result";  
    elseif($operacao == "adição"):
        $result = $valor1 + $valor2;
        echo "O resultado é $result";
    elseif($operacao == "subtração"):
        $result = $valor1 - $valor2;
        echo "O resultado é $result";
    else:
        echo "operação indevida, tente novamente!";
    endif;
}

calculadora("multiplicação", 10, null);




?>