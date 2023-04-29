<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ohayo! | Kyoto Mangás</title>
    <link rel="stylesheet" href="estilos/login.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

    <?php include("header.php") ?>

    <?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=cadcon>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
            echo'olá';
        }
    ?>

    <div class="geral">
        <div class="lado-esquerdo">
            <br>
            <h2>Cadastre-se</h2>
            <form action="cadastrar.act.php" method="post" enctype="multipart/form-data" onsubmit="verificar_senha()">

                <label for="nome"> Nome</label>
                <input type="text" name="nome" id="general-form">

                <label for="sobrenome"> Sobrenome:</label>
                <input type="text" name="sobrenome" id="general-form">

                <label for="user"> Usuário:</label>
                <input type="text" name="user" id="general-form">

                <label for="email"> Email:</label>
                <input type="email" name="email" id="general-form" placeholder="  exemplo@mail.com">

                <label for="senha"> Senha:</label>
                <input type="password" name="senha" id="general-form">

                <label for="consenha"> Confirmar senha:</label>
                <input type="password" name="consenha" id="general-form">

                <input type="submit" value="Cadastrar" class="btn" id="entrar-btn">


            </form>
        </div>

        <script>

            function verifica_campo(){
            senha = document.getElementById('senha').value;
            consenha = document.getElementById('consenha').value;
            console.log(senha);
            if(senha != consenha){
                alert("As senhas não batem");
                return false;
            }else{
                return true;
            }
        
        }
        </script>

        <div class="lado-direito">
            <br>
            <h2>Login</h2>
            <form action="login.act.php" method="post" >

                <label for="email">Usuário:</label>
                <input type="text" name="usuario" id="general-form">

                <label for="senha"> Senha:</label>
                <input type="password" name="senha" id="general-form">

                <input type="submit" value="Entrar" class="btn" id="entrar-btn">

            </form>

        </div>
    </div>

    

    <?php include('footer.php') ?>

</body>
</html>