<?php
include('../../dao/conexao.php');
   if($_POST) {
    $id_depoimento = $_POST['id_depoimentoUp'];
    $querySelect = "DELETE  FROM tab_depoimento  WHERE id_depoimento = $id_depoimento";
    $resultado = $conexao->query($querySelect);
  }
  header('Location: ./');
  exit;

?>