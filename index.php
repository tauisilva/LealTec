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
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark secondary-color lighten-1" style="background-image: linear-gradient(to left, #0250c5 0%, #d43f8d 150%);">
    <a class="navbar-brand href="#"><img  id="logo-img" src="img/logo3.png" class="img-responsive" style="width: 90px;"></a>
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">etc
      </a>
      <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
        <a class="dropdown-item" href="index.php?page=cad-cliente">Cadastrar</a>
        <a class="dropdown-item" href="index.php?page=lis-clienteListar">Procurar</a>
      </div>
    </li>
</ul>
<ul class="navbar-nav ml-auto nav-flex-icons">
  <li class="nav-item avatar dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="modal" data-target="#modalLogin" aria-haspopud="true" aria-expanded="false" id="user">
      <img src="img/ex.jpg" class="rounded-circle z-depth-0"
      alt="avatar image" style="width: 30px;">
    </a>
</div>
</li>
</ul>
</div>
</nav>
<!---------------------------------------------------------------------------------------------------------- MODAL's  ----------------------------------------------------------------------------------------------------------------------->
   <!-- Modal Tecnico  -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLogin" aria-hidden="true" >
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content form-elegant" style="border-radius: 20px;" >
        <!--Header-->
        <div class="modal-header text-center" style="background-image: linear-gradient(to left, #005C97 0%, #363795 100%); border-top-right-radius:  20px; border-top-left-radius: 20px;">
          <h3 class="modal-title w-100 white-text font-weight-bold my-3" id="myModalLogin"><strong>Login</strong></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body mx-4">
          <!--Body-->
          <div class="md-form mb-5" style="border-radius: 20px;">
            <input type="email" id="Form-email1" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-email1">Email</label>
          </div>

          <div class="md-form pb-3">
            <input type="password" id="Form-pass1" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-pass1">Senha</label>
            <p class="font-small blue-text d-flex justify-content-end">Esqueceu a   <a href="#" class="blue-text ml-1">
            senha?</a></p>
          </div>

          <div class="text-center mb-3">
            <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a white-text" style="border-radius: 20px">Login</button>
          </div>
          <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
          with:</p>
        </div>
        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#" class="blue-text ml-1">
          Sign Up</a></p>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
<!--------------------------------------------------------------------------------------------------------------------- Modal Cliente -------------------------------------------------------------------------------------------------------->

<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document" >
    <!--Content-->
    <div class="modal-content" style="border-radius: 20px">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist" style="border-radius: 20px">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab" style="border-radius: 20px"><i class="fas fa-user mr-1"></i>
              Procurar</a>
          </li>
          <li class="nav-item" style="border-radius: 20px">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab" style="border-radius: 20px"><i class="fas fa-user-plus mr-1"></i>
              Cadastrar</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalClienteInput10" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalClienteInput10">CPF</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalClienteInput11" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalClienteInput11">Nome</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn blue-gradient btn-rounded white-text" style="border-radius: 20px;">Procurar <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal" style="border-radius: 20px">Sair</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
              <form action="index.php?page=sal-cliente" method="POST" id="form1">
              <input type="hidden" name="acao" value="cadastrar">
              <!--Nome Cliente-->
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="text" id="nome_cli" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="nome_cliente">Nome Completo</label>
              </div>
              <!--CPF-->
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="text" id="cpf" pattern="\d{[0-9.]}\.\d{[0-9.]}\.\d{[0-9.]}-\d{[0-9.]}" maxlength="14" class="form-control form-control-sm validate" onkeypress="return isNumberKey(event)">
                <label data-error="wrong" data-success="right" for="cpf_cliente">CPF</label>
              </div>
              <!--Telefone-->
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="text" id="tel_cliente" maxlenght="20" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="tel_cliente">Telefone</label>
              </div>
              <!--Email-->
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="email_cliente" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="email_cliente">Email</label>
              </div>
              <!--Cidade-->
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="text" id="cidade" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="cidade">Cidade</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalClienteInput14" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalClienteInput14">Repeat password</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn blue-gradient btn-rounded white-text" style="border-radius: 20px">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>
              </form>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal" style="border-radius: 20px">Sair</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->
<!--------------------------------------------------------------------------------------------------------------------- MODAL's  ------------------------------------------------------------------------------------------------------------->








<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <?php include("direciona.php"); ?>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>