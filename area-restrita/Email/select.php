<?php
    include('../../dao/conexao.php');
    
    $querySelect = "SELECT * FROM tab_email";

    $resultado = $conexao->query($querySelect);

    $Email = $resultado->fetchAll();
    
?>