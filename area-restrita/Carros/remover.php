<?php
include('../../dao/conexao.php');
   if($_POST) {
    $idGaleria = $_POST['idGaleriaUp'];
    $querySelect = "DELETE  FROM tab_galeria  WHERE idGaleria = $idGaleria";
    $resultado = $conexao->query($querySelect);
  }
  header('Location: ./');
  exit;

?>