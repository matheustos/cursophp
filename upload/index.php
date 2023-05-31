<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>
<body>

<?php 
if(isset($_POST['enviar-formulario'])):
    $formatos = array("png", "jpeg", "jpg", "gif", "pdf");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
    if(in_array($extensao, $formatos)):
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";

        if(move_uploaded_file($temporario, $pasta.$novoNome)):
            $mensagem = "upload feito com sucesso!";
        else:
            $mensagem = "erro, não foi possível fazer upload!";
        endif;
    else:
        $mensagem = "Formato inválido";
    endif;
endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
    enctype="multipart/form-data">

    <input type="file" name="arquivo"><br>
    <input type="submit" name="enviar-formulario">
</form>
</body>
</html>
