<?php

    // Trabalha na montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    // implode('#', $_POST);
    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //Abrindo o arquivo
    $arquivo = fopen('arquivo.hd','a');

    // Escrevendo texto no arquivo
    fwrite($arquivo, $texto);
    
    // Fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>