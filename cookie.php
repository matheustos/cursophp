<?php 
// COOKIE

setcookie('user', 'Matheus Santos', time()+3600);
setcookie('email', 'matheus@gmail.com', time()-3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);


?>