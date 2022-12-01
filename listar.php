<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/produtos_geral.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title></title>
</head>
<body>

    <?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "<p class=alert>$_SESSION[msg]</p>";
            unset($_SESSION['msg']);
        } 
        require('connect.php');
        $produtos = mysqli_query($con, "Select * from `produtos`");
        while($produto = mysqli_fetch_array($produtos)){
            echo "<div class=\"col-md-6\" ng-repeat=item in items | limitTo: items.length /2: 0>";
                echo "<div class=\"card mb-3\" style=\"min-width: 600px; max-width: 650px;\">";
                    echo "<div class=\"row g-0\">";
                        echo "<div class=\"col-md-4\">";
                            echo "<img src=\"$produto[capa]\" class=\"img-fluid rounded-start\" alt=\"...\">";
                        echo "</div>";
                        echo "<div class=\"col-md-8\">";
                            echo "<div class=\"card-body\">";
                                echo "<h5 class=\"card-title\" style=\"margin-bottom: 5px;\">$produto[titulo]</h5>";
                                echo "<p class=\"card-text\" style=\"margin-bottom: 5px;\">Gênero: $produto[genero]</p>";
                                echo "<p class=\"card-text\" style=\"margin-bottom: 5px;\">Autor: $produto[autor]</p>";
                                echo "<p class=\"card-text\" style=\"margin-bottom: 5px;\">Editora: $produto[editora]</p>";
                                echo "<p class=\"card-text\" style=\"margin-bottom: 5px;\">Volume: $produto[volume]</p>";
                                echo "<p class=\"card-text\" style=\"margin-bottom: 5px;\">Sinopse: $produto[sinopse]</p>";
                                echo "<button class=\"btn\"onclick=carrinho()>Comprar</button>" ;
                            echo"</div>";
                        echo"</div>";
                    echo "</div>";
                echo "</div>";
                
            echo "</div>";
        }
    ?>

    <script>
        function carrinho(codigo){
            resp = comfirm('Deseja comprar o mangá?');
            if(resp == true){
                window.location = "carrinho.php?cod="+codigo_produto;
            }
        }
    </script>

</body>
</html>
