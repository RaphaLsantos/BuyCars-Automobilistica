<?php

session_start();

$usuarios_app = array (
    array ('id' =>1 , 'email' => 'admin', 'senha' => '1234'),
    array ('id' =>2 , 'email' => 'user@teste.com.br', 'senha' => '1234'),
);

$usuario_autenticado = false;

foreach ($usuarios_app as $user) {
    if ($user ['email'] == $_POST ['email'] && $user ['senha'] == $_POST ['senha']){
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado){
    //echo "USUARIO AUTENTICADO";
    $_SESSION ['autenticado'] = "SIM";
    header('Location: Depoimento');
}else {
    //echo "ERRO NA AUTENTICACAO DO USUARIO";
    $_SESSION ['autenticado'] = "NÃO";
    header('Location: login.php?login=erro');
}

?>