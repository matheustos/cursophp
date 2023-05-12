<?php
// string

$nome = "Olá mundo 123";
var_dump($nome);

if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

//int 
$idade = 23;
var_dump($idade);

if(is_int($idade)):
    echo "É um número inteiro";
else:
    echo "Não é um número inteiro";
endif;
echo "<hr>";

// float

$altura = 1.83;
var_dump($altura);

if(is_float($altura)):
    echo "É um número flutuante";
else:
    echo "Não é um número flutuante";
endif;
echo "<hr>";

//boolean

$admin = false;
var_dump($admin);

if(is_bool($admin)):
    echo "É um tipo booleano";
else:
    echo "Não é um tipo boolenao";
endif;
echo "<hr>";

// arrays

$carros = array("Gol", "Uno", "Camaro");
var_dump($carros);

if(is_array($carros)):
    echo "É uma lista";
else:
    echo "Não é uma lista";
endif;
echo "<hr>";

// objeto

class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this -> $nome = $nome;
    }
}

$cliente = new Cliente();
$cliente -> atribuirNome("Matheus");
var_dump($cliente);

if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";