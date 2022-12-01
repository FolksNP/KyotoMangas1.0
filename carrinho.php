<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arigatogozaimasu!</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<form>

  <?php include('header.php')?>

    <br>

    <div class="container">

    <div class="lista-produtos">

    </div>


    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">CPF</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="XXX.XXX.XXX-XXX">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Rua Tal, nº 0">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Endereço 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option>São Paulo</option>
        <option>Minas Gerais</option>
        <option>Rio de Janeiro</option>
        <option>Mato Grosso</option>
        <option>Paraná</option>
        <option>Santa Catarina</option>
        <option>Rio Grande do Sul</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control" id="inputCEP" placeholder="00000-000">
    </div>
  </div>

  <div class="pagamento">
    <h2>Pagamento</h2>
    <div class="form-row">
        <div class="form-group col-md-6">
        <div class="inputCartao">
            <label for="numcard">Numero do Cartão</label>
            <input type="text" name="numcard" id="" class="form-control" placeholder="0000 0000 0000 0000">
        </div>
        </div>

        <div class="form-group col-md-4">
        <div class="inputCartao">
        <label for="inputBandeira">Bandeira do Cartão</label>
        <select id="inputBandeira" class="form-control">
        <option selected>Escolher...</option>
        <option>Mastercard</option>
        <option>Visa</option>
        <option>Elo</option>
        <option>American Express</option>
        </select>
            
        </div>
        </div>
          
    </div>

    <div class="form-row">
    <div class="form-group col-md-2">
        <div class="inputCartao">
            <label for="data">Data</label>
            <input type="text" name="data" id="" class="form-control" placeholder="12/10">
        </div>
        </div>    
        <div class="form-group col-md-2">
        <div class="inputCartao">
            <label for="data">Código</label>
            <input type="text" name="data" id="" class="form-control" placeholder="000">
        </div>
        </div> 
    </div>

  </div>

    <button type="submit" class="btn btn-primary">Finalizar Compra</button>
    </form>

    </div>
    </div>

    <br>

  <?php include('footer.php')?>

</body>
</html>