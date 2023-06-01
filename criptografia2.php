<?php 
$senha = "123457";

$options = [
    'cost' => 10,

];


$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

$senha_db = '$2y$10$WJHow42wlwHl7F2WoTC4Q.gYDZ0Xbte.dpFKf/pg4NUuNDE8Ppayy';


if(password_verify($senha, $senha_db)):
    echo "Senha correta";
else:
    echo "senha incorreta";

endif;





?>