<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyoto - Moderations</title>
    <link rel="stylesheet" href="estilos/adm.css">
</head>
<body>
    
    <?php include('header.php') ?>

    <div class="geral">
        <h2>Login</h2>
        <form action="acesso.act.php" method="post" >
            <label for="email"> ID de Funcionário:</label>
            <input type="text" name="id" id="general-form">

            <label for="senha"> Senha de Acesso:</label>
            <input type="password" name="senha" id="general-form">

            <input type="submit" value="Entrar" id="entrar-btn">
        </form>
    </div>
<br>
    <?php include('footer.php')?>



</body>
</html>