<?php
require('connect.php');
extract($_POST);
extract($_FILES);
    
$destino = "capas/".md5(time().$capa['size']).".jpg";
move_uploaded_file($capa['tmp_name'], $destino);


if(mysqli_query($con, "INSERT INTO `produtos` (`codigo_produto`, `titulo`, `serie`, `genero`, `autor`, `editora`, `volume`, `sinopse`, `capa`) 
VALUES (NULL, '$titulo', '$serie', '$genero' ,'$autor', '$editora', '$volume', '$sinopse', '$destino');")){
        $msg = "O mangá $titulo foi adicionado no catálogo.";
    } else{
        $msg = "Erro ao cadastar obra prima japonesa.";
    }

session_start();
$_SESSION['msg'] = $msg;
header("location:inserir_produto.php"); 