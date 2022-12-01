<?php
require('connect.php');
extract($_POST);
$busca = mysqli_query($con, "Select * from `funcionarios` where `ID` = '$id'");
    session_start();
    if($busca-> num_rows == 1){
    $cadastro = mysqli_fetch_array($busca);
    if($senha === $cadastro['Senha']){
      echo "Ohayogozaimasu";
      $_SESSION['login'] = true;
      $target = "location:administrativo.php";
      }else{
        $msg = "Email ou senha incorretos!";
        $target = "location:administrativo-acesso.php";
      }
      }else{
        $msg = "Email ou senha incorretos!";
        $target = "location:administrativo-acesso.php";
      }
      $_SESSION['msg'] = $msg;
      header($target);