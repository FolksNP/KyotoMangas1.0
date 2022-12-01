<?php
require('connect.php');
extract($_POST);
if(mysqli_query($con, "INSERT INTO `users` (`id`, `nome`, `sobrenome`, `usuario`, `email`, `senha`, `consenha`) 
    VALUES (NULL, '$nome', '$sobrenome', '$user', '$email', '$senha', '$consenha');")){
        $msg = "Ohayo! bem vindo a Kyoto $user";
    } else{
        $msg = "Erro ao virar hashira";
    }

session_start();
$_SESSION['msg'] = $msg;
header("location:login.php"); 