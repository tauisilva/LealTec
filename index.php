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
<nav class="mb-1 navbar navbar-expand-lg navbar-light secondary-color lighten-1" style="background-image: linear-gradient(60deg, #FFF 0%, #2b76b9 37%, #35eb93 65%, #2cacd1 100%);>
  <a class="navbar-brand href="#"><img  id="logo-img" src="img/logo2.png" class="img-responsive" style="width: 120px;"></a>
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Caixa
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="index.php?page=cad-cliente">Cadastrar</a>
          <a class="dropdown-item" href="index.php?page=lis-clienteListar">Procurar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Ordem de Serviço
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="index.php?page=cad-cliente">Nova</a>
          <a class="dropdown-item" href="index.php?page=lis-clienteListar">Procurar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Cliente
        </a>
        <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
          <a class="dropdown-item" href="index.php?page=cad-cliente">Cadastrar</a>
          <a class="dropdown-item" href="index.php?page=lis-clienteListar">Procurar</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light">1
          <i class="fas fa-envelope"></i>
        </a>
      </li>
      <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopud="true" aria-expanded="false" id="user">
          <img src="img/ex.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" style="width: 30px;">
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-secondary"
          aria-labelledby="navbarDropdownMenuLink-55">
          <div class="card">

            <h5 class="card-header info-color white-text text-center py-4">
              <strong>Sign in</strong>
            </h5>
            <div class="card-body px-lg-5 pt-0">
              <form class="text-center" style="color: #000;">
                <div class="md-form">
                  <input type="email" id="materialLoginFormEmail" class="form-control">
                  <label for="materialLoginFormEmail">E-mail</label>
                </div>
                <div class="md-form">
                  <input type="password" id="materialLoginFormPassword" class="form-control">
                  <label for="materialLoginFormPassword">Password</label>
                </div>

                <div class="d-flex justify-content-around">
                  <div>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                      <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                    </div>
                  </div>
                  <div>
                    <a href="">Forgot password?</a>
                  </div>
                </div>
                <button class="btn blue-gradient btn-rounded btn-block my-4 waves-effect z-depth-0"  type="submit">Sign in</button>
            </div>
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