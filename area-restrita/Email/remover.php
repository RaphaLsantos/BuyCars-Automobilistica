<?php
include('../../dao/conexao.php');
   if($_POST) {
    $idEmail = $_POST['idEmailUp'];
    $querySelect = "DELETE  FROM tab_email  WHERE idEmail = $idEmail";
    $resultado = $conexao->query($querySelect);
  }
  header('Location: ./');
  exit;

?>