<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['enviar-formulario'])):
        $erros = array();
        // validação idade
        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
            $erros[] = "Idade precisa ser um inteiro<br>";
        endif;

        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
        else: 
            echo "Formato de idade válido!<br>";
        endif;

        //validação email
        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = "Formato inválido";
        endif;

        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
        else: 
            echo "Formato de email ok!";
        endif;

        //validação peso
        if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
            $erros[] = "Peso precisa ser um número decimal<br>";
        endif;

        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
        else: 
            echo "Formato de peso válido<br>";
        endif;

        //validação ip
        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
            $erros[] = "IP inválido<br>";
        endif;

        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
        else: 
            echo "Formato de IP válido!<br>";
        endif;

        //validação url

        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
            $erros[] = "Formato de url inválido<br>";
        endif;

        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
        else: 
            echo "Formato de url ok!";
        endif;
    endif;
    
    
    
    
    ?>
    <form action="index.php" method="POST">
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        Peso: <input type="text" name="peso"><br>
        IP: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario"> Enviar </button><br>
    </form>
    
</body>
</html>