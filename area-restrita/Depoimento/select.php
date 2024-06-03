<?php
    include('../../dao/conexao.php');
    
    $querySelect = "SELECT * FROM tab_depoimento";

    $resultado = $conexao->query($querySelect);

    $depoimento = $resultado->fetchAll();
    
?>