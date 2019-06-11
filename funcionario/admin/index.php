<?php

  require_once("../../login/verificaLogin.php"); 

?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="icon" type="image/png" href="img/favicon-32x32.png" />
      <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link href="css/mdb.css" rel="stylesheet">
    <title>LealTec - Admin</title>
  </head>
  <body>
  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark black lighten-1">
    <a class="navbar-brand" href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
      aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cliente
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="index.php?page=edi-cliente">Editar</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons list-inline quicklinks">
        <li class="nav-item avatar dropdown">
          <a class="nav-link p-0" href="../../login/logout.php" >
            <img src="jackson.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="35">
            <button type="button" class="btn btn-primary btn-rouded btn-sm waves-effect waves-light" style="border-radius: 40px;" data-toggle="modal" data-target="basicExampleModal"><i class="fas fa-sign-out-alt"></i></button>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Modal -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
  </div>
  <!--/.Navbar -->
    <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="js/popper.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
  </body>
</html>