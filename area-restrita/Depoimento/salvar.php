<?php
include ('../../dao/conexao.php');
if($_POST){
    $id_depoimento =trim($_POST['id_depoimento']);
    $tipo =trim($_POST['tipo']);
    $depoimento =trim($_POST['depoimento']);
    $autor =trim($_POST['autor']);
    echo $id_depoimento;


if(is_numeric($id_depoimento)){
    $sql = "
    UPDATE tab_depoimento SET
    tipo = '$tipo',
    depoimento = '$depoimento',
    autor = '$autor'
    WHERE id_depoimento = $id_depoimento
    ";
}else{
    $sql = "
    INSERT INTO tab_depoimento (tipo , depoimento, autor) VALUES
    (
        '$tipo',
        '$depoimento',
        '$autor'
    )
    ";
}

$query = $conexao->prepare($sql);
$query->execute();
}
header('Location: ./');

?>