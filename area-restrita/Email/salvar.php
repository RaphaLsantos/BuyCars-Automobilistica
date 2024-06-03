<?php
include ('../../dao/conexao.php');
if($_POST){
    $idEmail =trim($_POST['idEmail']);
    $email =trim($_POST['email']);
    $nome =trim($_POST['nome']);
    $assunto =trim($_POST['assunto']);
    $mensagem =trim($_POST['mensagem']);
    echo $idEmail;


if(is_numeric($idEmail)){
    $sql = "
    UPDATE tab_email SET
    email = '$email',
    nome = '$nome',
    assunto = '$assunto',
    mensagem = '$mensagem'
    WHERE idEmail = $idEmail
    ";
}else{
    $sql = "
    INSERT INTO tab_email (email,  nome , assunto,  mensagem)
    VALUES
    (
        '$email', 
        '$nome', 
        '$assunto',  
        '$mensagem' 
    )
    ";
}

$query = $conexao->prepare($sql);
$query->execute();
}
header('Location: ./');


?>