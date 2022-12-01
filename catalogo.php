<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fique ligado - Catálogo</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/catalogo.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function pesquisar(texto){
            $.ajax({
                type: "post",
                url: "pesquisar.act.php?texto="+texto,
                data: "texto",
                success: function (response){
                    $('#resultado').html(response);
                }
            })
        }
    </script>
</head>
<body>
    
    <?php include('header.php')?>
    <br>
    <div class="container">

        <div class="container">
        <h1>Procure aqui os mangás pelo título</h1>
        <div class="pesquisar">    
        <ul>
            <input type="text" name="" class="form-control" id="txtPesquisar" onkeyup="pesquisar(this.value)">
            <div id="resultado"></div>
        </ul>
        <br>
        <div id="resultado"></div>
        </div>
        </div>
        <div class="filtro">
            <select class="form-control" name="filtro" onclick="selecao_genero(this.value)">
                
                <option selected value="N/A">N/A</option>

                <option value="Romance">Romance</option>
            
                <option value="Ação">Ação</option>
            
                <option value="Aventura">Aventura</option>
        
                <option value="Escolar">Escolar</option>

                <option value="Magia">Magia</option>
    
                <option value="Comédia">Comédia</option>
            </select>

        </div>
    </div>

    <script>
        function selecao_genero(selecionado){            
            select = selecionado.toLowerCase();
            resultado = select;
            resultado = document.getElementsByClassName(selecionado);
        }
    </script>

    <br>

    <div class="listagem" style="width: 95%; margin: 0 auto;">
        <div class="list-group">
            <div class="row">
                <?php include('listar.php')?>
            </div>
        </div>
    </div>
    
    <br>
    <?php include('footer.php')?>
</body>
</html>