<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" />
  <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <title>Atendimento</title>
</head>
<body>
  <!--Navbar -->
  <nav class=" style-scope mb-1 navbar navbar-expand-sm navbar-dark secondary-color lighten-1" style="background-image: linear-gradient(to left, #0250c5 0%, #d43f8d 150%);">
    <?php include("modal.php"); ?>
    <a class="navbar-brand" href= "index.php"><img  id="logo-img"  src="img/logo3.png" class="img-responsive" style="width: 50px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalCliente">Cliente</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalServicos">Serviços</a>
      </li>
</ul>
<ul class="navbar-nav ml-auto nav-flex-icons">
  <li class="nav-item">
    <a class="nav-link waves-effect waves-light">1
      <i class="fas fa-envelope"></i>
    </a>
  </li>
  <li class="nav-item avatar dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="modal" data-target="#modalLogin" aria-haspopud="true" aria-expanded="false" id="user" >
      <img src="img/ex.jpg" class="rounded-circle z-depth-0"
      alt="avatar image" style="width: 30px;">
    </a>
</div>
</li>
</ul>
</div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <?php include("config.php"); ?>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>