<?php
include('../../dao/conexao.php');
   if($_POST) {
    $idUser = $_POST['idUserUp'];
    $querySelect = "DELETE  FROM tab_user  WHERE idUser = $idUser";
    $resultado = $conexao->query($querySelect);
  }
  header('Location: ./');
  exit;

?>