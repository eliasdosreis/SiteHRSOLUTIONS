<?php
$logar = "";
$register = "";

if(!empty($_SESSION['usuario'])){
    $logar = "<a class='btn btn-primary entrar m-0' href='./dashboard/dist/index.php'>";
}else{
    $logar = "<a class='btn btn-primary entrar m-0' href='./login.php'>";
}


if(!empty($_SESSION['usuario'])){
    $register= "<a class='btn btn-primary entrar m-0 ml-2' href='./backEnd/sair.php'>";
}else{
    $register = "<a class='btn btn-primary entrar m-0 ml-2' href='./cadastro.php'>";
}

