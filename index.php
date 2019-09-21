<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pokémon Battle</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/main.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Pokémon Battle</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Vote no seu Pokémon Favorito!</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <form action="#">
      <div class="row">
        <div class="col-lg-12 text-center">
          <label>
            <input type="radio" name="pokemon" value="Pokémon 1"/> 
            <img src="img/1.png" alt="">
          </label>
          <label>
            <input type="radio" name="pokemon" value="Pokémon 2">
            <img src="img/2.png" alt="">
          </label>
          <label>
            <input type="radio" name="pokemon" value="Pokémon 3">
            <img src="img/3.png" alt="">
          </label>  
          <div class="row">
            <input type="submit" value="Submit">
          </div>
        </div>
    </form>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
