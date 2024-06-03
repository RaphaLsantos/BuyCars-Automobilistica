<?php
    include('../../dao/conexao.php');
    
    $querySelect = "SELECT * FROM tab_user";

    $resultado = $conexao->query($querySelect);

    $User = $resultado->fetchAll();
    
?>