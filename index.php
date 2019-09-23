<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pokémon Battle</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/main.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand text" href="#">
        Pokémon Battle
        <img class="img-logo"src="assets/img/logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button type="button" class="btn btn-primary nav-link text" data-toggle="modal" data-target="#modalExemplo">
            Sobre
            </button>
            <!-- Modal -->
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title text" id="exampleModalLabel">Sobre</h5>
                  </div>
                  <div class="modal-body text" >
                    Criadores: <br> Matheus Rocha Da Silva <br> Alexandre Pedroza Machado
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary text" data-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container index">
    <?php
      require('view/home.php');
      ?>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
