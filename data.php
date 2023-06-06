<?php 
// DATAS
// dia
echo date('d/m/y');
echo "<br>";
echo date('d/m/Y');

echo "<br>";

//horario
date_default_timezone_set('America/Sao_Paulo');
echo date('H:i:s');

echo "<br>";

//TIME
echo time();
$time = time();
echo "<br>";

//MKTIME
$data_pagamento = mktime(15, 30, 00, 07, 05, 2023);
echo date('d/m - h:i', $data_pagamento);




?>