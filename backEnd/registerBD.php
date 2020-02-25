<?php
session_start();
include('./conexao.php');

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "INSERT INTO usuario (usuario,email,senha) VALUES ('$usuario','$email',md5('{$senha}'))";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "Inserido com sucesso";
}else{
    echo "erro ao inserir";
}

$conexao->close();

header('Location: ./../cadastro.php');
// header('Location: ./registerBD.php');
exit();
