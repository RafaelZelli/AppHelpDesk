<?php

    // Inicia uma sessão
    session_start();

//variavel que verifica se a autenticacao foi realizada
    $usuario_autenticado = false;

//todos os usuarios do sistema
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
        array('email' => 'rafa@teste.com.br', 'senha' => 'rafa1234'),
        array('email' => 'zelli@teste.com.br', 'senha' => 'zelli1234'),
    );

    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'Usuario autenticado';
        $_SESSION['autenticado'] = 'SIM';
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro'); //o Header redireciona para a pagina index.php
    }  

?>