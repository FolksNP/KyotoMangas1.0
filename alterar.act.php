<?php
var_dump($_FILES);
extract($_POST);
extract($_FILES);
require('connect.php');

    if($capa['size']>0){
        if($capa_anterior==""){
            $destino = "capas/".md5(time()).".jpg";
        }else{
            $destino=$capa_anterior;
        }
        move_uploaded_file($capa['tmp_name'],$destino);
    }else{
        $destino = $capa_anterior;
    }
    if(mysqli_query($con,"UPDATE `produtos` SET 
    `titulo` = '$titulo',
    `serie` = '$serie',
    `genero` = '$genero',
    `autor` = '$autor',
    `editora` = '$editora',
    `volume` = '$volume',
    `sinopse` = '$sinopse',
    `capa` = '$capa'
    WHERE `produtos`.`codigo_produto` = '$codigo';")){
        $msg ="Registro alterado com sucesso!";
    }else{
        $msg ="erro ao alterar";
    }
    session_start();
    $_SESSION['msg']= $msg;
    header("location:gerenciar_produtos.php");