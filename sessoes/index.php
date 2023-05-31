<?php 
session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Ferrari";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();




?>