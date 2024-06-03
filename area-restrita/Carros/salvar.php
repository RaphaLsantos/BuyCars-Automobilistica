<?php
include ('../../dao/conexao.php');
if($_POST){
    $idGaleria =trim($_POST['idGaleria']);
    $nomeCarro =trim($_POST['nomeCarro']);
    $marcaCarro =trim($_POST['marcaCarro']);
    $valorCarro =trim($_POST['valorCarro']);
    $novo_nome =trim($_POST['imgCarro']);
                

    echo empty($_FILES['foto']['size']);
    if(empty($_FILES['foto']['size']) !=1){
        $extensao = strtolower(substr($_FILES['foto']['name'], -4));
        if($novo_nome ==""){
            $novo_nome = md5(time()). $extensao;
        }
        $diretorio = "../../fotos/carros/";
        $nomeCompleto = $diretorio.$novo_nome;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto);
    }

    if(is_numeric($idGaleria)){
        $sql =" 
            UPDATE tab_galeria SET
            nomeCarro = '$nomeCarro' ,
            marcaCarro = '$marcaCarro' , 
            valorCarro = '$valorCarro' , 
            imgCarro = '$novo_nome'
            WHERE idGaleria = $idGaleria
        ";
        }else{
            $sql = "
            INSERT INTO tab_galeria (nomeCarro , marcaCarro, valorCarro, imgCarro)
            VALUES 
            (
                '$nomeCarro', 
                '$marcaCarro', 
                '$valorCarro', 
                '$novo_nome'
            )
            ";
        }
        $query = $conexao->prepare($sql);
        $query->execute();
        }
        header('Location: ./');
        exit;
?>