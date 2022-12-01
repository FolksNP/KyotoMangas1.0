<?php require('sec.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyotos Cad - 製品</title>
    <link rel="stylesheet" href="estilos/inserir_produto.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    
    
    <?php include('header.php')?>

    <?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=cadcon>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        }
    ?>

    <div class="container">
        <h1>Cadastramento do produto</h1>
        <form action="inserir_produto.act.php" method="post" enctype="multipart/form-data">
            <p>Titulo:</p>      <input type="text" name="titulo" class="form-control">
            <p>Série:</p>       <input type="text" name="serie" class="form-control">
            <p>Gênero:</p>      <select name="genero" class="form-control">
                                    <option value="">N/A</option>
                                    <option value="Romance">Romance</option>
                                    <option value="Ação">Ação</option>
                                    <option value="Aventura">Aventura</option>
                                    <option value="Escolar">Escolar</option>
                                    <option value="Mágia">Mágia</option>
                                    <option value="Comédia">Comédia</option>
                                </select>
            <p>Autor(a):</p>    <input type="text" name="autor" class="form-control">
            <p>Editora</p>      <input type="text" name="editora" class="form-control">
            <p>Volume</p>       <input type="text" name="volume" class="form-control">
            <p>Sinopse</p>      <input type="text" name="sinopse" class="form-control">
            <br>
            <div class="btn btn-primary btn-rounded">
            <label class="form-label text-white m-1" for="customFile1">Escolha a imagem</label>
            <input type="file" class="form-control d-none" name="capa" id="customFile1" />
            </div>
            <input type="submit" value="Cadastrar Produto" class="btn" onclick="veficar_campo()">
        </form>
    </div>


</body>
</html>