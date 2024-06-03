<?php
    $servidor = "localhost";
    $banco = "bdcarro";
    $usuario = "root";
    $senha = "";

    try{

        $conexao = new PDO("mysql:host=$servidor;
        dbname=$banco",
        $usuario,
        $senha);
    
        return $conexao;
    }catch(PDOException $e){
        echo '<P>' .$e->getMessage(). '<P>';
    }

?>