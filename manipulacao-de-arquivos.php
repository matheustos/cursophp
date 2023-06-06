<?php 
$arquivo = 'arquivo.txt';

$conteudo = "Conteudo de teste\r\n";
$conteudo2 = "Teste";

// abre arquivo para escrita
$arquivoAberto = fopen($arquivo, 'r');


$tamanhoArquivo = filesize($arquivo);
//adiciona conteudo no arquivo
//fwrite($arquivoAberto, $conteudo2);

while(!feof($arquivoAberto)):
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha;
endwhile;
//fecha o arquivo
fclose($arquivoAberto);



?>