<?php
     include('../../dao/conexao.php');
    
     $querySelect = "SELECT * FROM tab_galeria";
 
     $resultado = $conexao->query($querySelect);
 
     $galeria = $resultado->fetchAll();
?>