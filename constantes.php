<?php
//Constantes

define("NOME", "Matheus");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);
echo 'Meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é'.ALTURA.'.';

// usando junto com arrays

define("TIMES", ["Flamengo", "Vasco"]);
echo "<hr>";
echo 'Meu time é o '.TIMES[0].', o rival do meu time é o '.TIMES[1].'.';