<?php
include ('../../dao/conexao.php');
if($_POST){
    $idUser =trim($_POST['idUser']);
    $nomeUser =trim($_POST['nomeUser']);
    $cpf =trim($_POST['cpf']);
    $email=trim($_POST['email']);
    $rg=trim($_POST['rg']);
    $senha=trim($_POST['senha']);
    $novo_nome = trim($_POST['foto_usuario']); 

    echo empty($_FILES['foto']['size']);
    if(empty($_FILES['foto']['size']) !=1){
        $extensao = strtolower(substr($_FILES['foto']['name'],-4)) ;
        if ($novo_nome ==""){   
            $novo_nome = md5(time()). $extensao;
        }
        $diretorio = "../../fotos/usuarios/";
        $nomeCompleto = $diretorio.$novo_nome;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto );
     }  

    
     
     if(is_numeric($idUser)) {
        $sql = "
        UPDATE tab_user SET
        nomeUser = '$nomeUser',
        cpf = '$cpf',
        email = '$email',
        rg = '$rg',
        senha = '$senha',
        foto_usuario = '$novo_nome'
        WHERE idUser = $idUser
        ";
     }else{
            $sql = "
            INSERT INTO tab_user (nomeUser , cpf , email , rg , senha, foto_usuario) 
            VALUES
            (
                '$nomeUser', 
                '$cpf' , 
                '$email' ,
                '$rg' ,  
                '$senha',
                '$novo_nome'
            )
            ";
         }
$query = $conexao->prepare($sql);
$query->execute();
}
header('Location: ./');
?>