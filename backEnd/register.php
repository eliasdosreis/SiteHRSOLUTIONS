<?php
$register = "";

if(!empty($_SESSION['usuario'])){
    $register = "<a class='btn btn-primary entrar m-0' href='./backEnd/sair.php'>";
}else{
    $register = "<a class='btn btn-primary entrar m-0' href='./cadastro.php'>";
}
