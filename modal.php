    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" />
  <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <!---------------------------------------------------------------------------------------------------------- MODAL's  ----------------------------------------------------------------------------------------------------------------------->
   
<!--------------------------------------------------------------------------------------------------------------------- Modal Cliente -------------------------------------------------------------------------------------------------------->

<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="myModalNotebooks" aria-hidden="true">
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
<!--------------------------------------------------------------------------------------------------------------------- Modal Serviços -------------------------------------------------------------------------------------------------------->


<!--------------------------------------------------------------------------------------------------------------------- MODAL's  ------------------------------------------------------------------------------------------------------------->
  <script type="text/javascript" src="js/jquery-3.4.0.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/mdb.js"></script>