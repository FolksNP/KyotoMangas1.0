<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="estilos/header-footer.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">   
  </head>

  <body>
    
    <nav  class="navbar sticky-top navbar-expand-sm navbar-dark" style="background: #2187A8; font-size: 1.4em;">

      <a href="index-home.php" class="navbar-brand" style="font-size: 1.4em;">Kyoto Mangás</a>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target2">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="nav-target2">
        <ul class="navbar-nav ml-auto">
        <?php @session_start(); ?>
        <?php 

          if(isset($_SESSION['login']) && $_SESSION['login'] == true){
              echo "<a class=\"nav-link\" href=logoff.php><li>Sair</li></a>";
          }else{
            echo "<li class=\"nav-item\">";
              echo "<a href=\"login.php\" class=\"nav-link\">Login</a>";
            echo "</li>";
          }
        ?>

          <li class="nav-item">
            <a href="catalogo.php" class="nav-link">Catálogo</a>
          </li>
          <li class="nav-item">
            <a href="carrinho.php" class="nav-link">Carrinho</a>
          </li>
        </ul>
    </nav>
    
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>