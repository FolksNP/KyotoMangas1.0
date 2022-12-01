<?php

echo $codigo = $_GET['cod'];
require('connect.php');
$busca = mysqli_query($con, "SELECT * FROM `carro` where `codigo_produto` = $codigo");
$produto = mysqli_fetch_array($busca);
unset($produto['capa']);
if(mysqli_query($con, "delete from `produtos`  where `codigo_produto` = $codigo")){
    $msg = "Mangá deletado ):";
}else{
    $msg = "Esse mangá foi salvo da morte";
}
@session_start();
$_SESSION['msg'] = $msg;
header("location:gerenciar_produtos.php");

