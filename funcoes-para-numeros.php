<?php 

// number_format

$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é $preco";
echo "<hr>";

// round - arredonda números

echo round(3.6);
echo "<br>";
echo round(12354,96);
echo "<hr>";

// rand - sorteia numero aleatório

echo rand(0, 100);

?>