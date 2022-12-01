<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyoto Mangas - Hits</title>
    <link rel="stylesheet" href="estilos/index-home.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    
    <?php include('header.php') ?>

    <div class="geral">

      <h1>Seja bem vindo! - 歓迎します！</h1>

      <section class="carousel">
        <input type="radio" name="carousel" id="carousel1" checked="checked" />
        <input type="radio" name="carousel" id="carousel2" />
        <input type="radio" name="carousel" id="carousel3" />
        <input type="radio" name="carousel" id="carousel4" />

        <main class="carousel__stage">
          <aside class="carousel__item">
            <img class="carousel__image" src="imagens/bannerqq.png" />
            <label for="carousel2" class="carousel__next carousel__control"></label>
          </aside>

          <aside class="carousel__item">
            <label for="carousel1" class="carousel__prev carousel__control"></label>
            <img class="carousel__image" src="imagens/bannermydress.webp" />
            <label for="carousel3" class="carousel__next carousel__control"></label>
          </aside>

          <aside class="carousel__item">
            <label for="carousel2" class="carousel__prev carousel__control"></label>
            <img class="carousel__image" src="imagens/demon-slayer-capa.webp" />
            <label for="carousel4" class="carousel__next carousel__control"></label>
          </aside>

          <aside class="carousel__item">
            <label for="carousel3" class="carousel__prev carousel__control"></label>
            <img class="carousel__image" src="imagens/mangas.jpg" />
          </aside>

        </main>
        
      </section>
  </div>

  <br>

  <div class="container">

  </div>
  <section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Novidades na loja! </h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="capas/hanayome.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Gotoubun no Hanayome</h4>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="capas/demonslayeer.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Kimetsu no Yaiba</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="capas/d6755b4fc47b011b18b7c0baaba7a85a.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Komi-san wa Komyushou desu</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="capas/mydress.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Sono Bisque Doll wa Koi o Suru</h4>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="capas/aluguel.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Kanojo, Okarishimasu</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="capas/attack.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Shingeki no Kyojin</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="capas/baki.webp">
                                        <div class="card-body">
                                            <h4 class="card-title">Baki the Champion</h4>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="capas/onepiece.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">One Piece</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="capas/nagatoro.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Ijiranaide Nagatoro-san!</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <br>
  
  <?php include('footer.php');?>

</body>
</html>