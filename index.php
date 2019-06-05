<!DOCTYPE html>
<html lang="pt-br">
<?php
  session_start();
  require_once("cliente/cliente.php"); 
  include("funcionario/tecnico.php");

?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css" charset="UTF-8">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" charset="UTF-8">
    <link href="css/mdb.css" rel="stylesheet" charset="UTF-8">
    <link href="css/style.css" rel="stylesheet" charset="UTF-8">
    <title>Atendimento</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img id="logo-img"  src="img/logo3.png" class="img-responsive" style="width: 100px;"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="" data-toggle="modal" data-target="#cliente">Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#roms">Roms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#footer">adm</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
    <?php include("config.php"); ?>

  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <script type="text/javascript" src="funcionario/admin/js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/mdb.js"></script>
  
  <?php if(isset($_SESSION["modal"])): ?>
    <script>
      $("<?= $_SESSION["modal"]?>").modal("show");
    </script>
  <?php

    endif;
    
    unset($_SESSION["modal"]);

  ?>
  </body>
</html>