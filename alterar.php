<? require('sec.php')?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alterar.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Atualizar produto - Kyoto Admin</title>
</head>
<body>

    <?php include('header.php'); ?>

    <?php
        $codigo = $_GET['codigoproduto'];
        require('connect.php');
        $busca = mysqli_query($con,"Select * FROM `produtos` WHERE `codigo_produto` = '$codigo'");
        $produto = mysqli_fetch_array($busca);
    ?>

    <div class="container">
        <h2>Atualizar produtos</h2>
        <br>
        <form  action="alterar.act.php" method="post" enctype="multipart/form-data">
            <p>Código: <?php echo $produto['codigo_produto'];?> <input type="hidden" name="codigo" value="<?php echo $produto['codigo_produto'];?>"></p>
            <p>Titulo:</p>      <input type="text" name="titulo"  value="<?php echo $produto['titulo'];?>"  class="form-control">
            <p>Série:</p>       <input type="text" name="serie"   value="<?php echo $produto['serie'];?>"   class="form-control">
            <p>Gênero:</p>      <select name="genero" value="<?php echo $produto['genero'];?>" class="form-control">
                                    <option value="">N/A</option>
                                    <option value="Romance">Romance</option>
                                    <option value="Ação">Ação</option>
                                    <option value="Aventura">Aventura</option>
                                    <option value="Escolar">Escolar</option>
                                    <option value="Mágia">Mágia</option>
                                    <option value="Comédia">Comédia</option>
                                </select>
            <p>Autor(a):</p>    <input type="text" name="autor"   value="<?php echo $produto['autor'];?>"   class="form-control">
            <p>Editora</p>      <input type="text" name="editora" value="<?php echo $produto['editora'];?>" class="form-control">
            <p>Volume</p>       <input type="text" name="volume"  value="<?php echo $produto['volume'];?>"  class="form-control">
            <p>Sinopse</p>      <input type="text" name="sinopse" value="<?php echo $produto['sinopse'];?>"class="form-control">
            <br>
            <div class="btn btn-primary btn-rounded">
            <label class="form-label text-white m-1" for="customFile1">Escolha a imagem</label>
            <input type="file" class="form-control d-none" name="capa" id="customFile1" />
            </div>
            <input type="submit" value="Atualizar Produto" class="btn" onclick="veficar_campo()">
        </form>
    </div>

    <br><br>
    <?php include('footer.php')?>

</body>
</html>
            
            
            





