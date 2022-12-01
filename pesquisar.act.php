<?php
$texto = $_GET['texto'];

require('connect.php');
$produtos = mysqli_query($con, "Select * from `produtos` where `titulo` like '%$texto%'");

while($produto = mysqli_fetch_array($produtos)){
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
}

?>