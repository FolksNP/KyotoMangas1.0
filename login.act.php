<?php
require('connect.php');
extract($_POST);

$busca = mysqli_query($con, "Select * from `users` where `usuario` = '$usuario'");
    
    session_start();

    if($busca-> num_rows == 1){
    $cadastro = mysqli_fetch_array($busca);
    if($senha === $cadastro['senha']){
      echo "Ohayogozaimasu";
      $_SESSION['login'] = true;
      $target = "location:catalogo.php";
      }else{
        $msg = "Email ou senha incorretos!";
        $target = "location:login.php";
      }
      }else{
        $msg = "Email ou senha incorretos!";
        $target = "location:login.php";
      }
      $_SESSION['msg'] = $msg;
      header($target);