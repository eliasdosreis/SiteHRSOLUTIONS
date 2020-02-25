<?php
define("HOST","mysql873.umbler.com");
define("USUARIO","hrsolutions");
define('SENHA', '123456abc');
define("DB","login_hr");

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die("Não foi possivel conectar");
