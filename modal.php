    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" />
  <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <?php include("Notebooks.php"); ?>
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
<!-- Modal serviços -->
<div class="modal fade right" id="modalServicos" tabindex="-1" role="dialog" aria-labelledby="modalServicosLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content form-elegant" style="border-radius: 20px;" >
      <div class="modal-header text-center"  style="background-image: linear-gradient(to left, #005C97 0%, #363795 100%); border-top-right-radius:  20px; border-top-left-radius: 20px;">
        <h5 class="modal-title w-100 white-text font-weight-bold my-3" id="modalServicosLabel">Serviços</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <button type="button" class="btn aqua-gradient white-text" data-toggle="modal" data-target="#modalSmartphones" style="border-radius: 20px;">Smartphone</button>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn aqua-gradient white-text" data-toggle="modal" data-target="#modalTablets" style="border-radius: 20px;">tablets</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <button type="button" class="btn aqua-gradient white-text" data-toggle="modal" data-target="#modalNotebooks" style="border-radius: 20px;">Notebook</button>
            </div>
            <div class="col-md-6">
              <button type="button" class="btn aqua-gradient white-text" data-toggle="modal" data-target="#modalComputador" style="border-radius: 20px;">Computador</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn purple-gradient white-text" style="border-radius: 20px;" data-dismiss="modal">Close</button>
        <button class="btn blue-gradient btn-rounded white-text" style="border-radius: 20px;">Novo Serviço</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal serviços-->
<!--------------------------------------------------------------------------------------------------------------------- Modal Smartphones -------------------------------------------------------------------------------------------------------->
<!-- Modal: Smartphones -->
<div class="modal fade" id="modalSmartphones" tabindex="-1" role="dialog" aria-labelledby="modalSmartphonesLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-fluid" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalSmartphones">Smartphones</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Product name</th>
              <th>Price</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Product 1</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Product 2</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Product 3</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Product 4</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr class="total">
              <th scope="row">5</th>
              <td>Total</td>
              <td>400$</td>
              <td></td>
            </tr>
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal" data-target="#modalServicos">voltar</button>
        <button class="btn btn-primary">Checkout</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: Smartphones -->
<!--------------------------------------------------------------------------------------------------------------------- Modal Tablets -------------------------------------------------------------------------------------------------------->
<!-- Modal: Tablets -->
<div class="modal fade" id="modalTablets" tabindex="-1" role="dialog" aria-labelledby="modalTabletsLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-fluid" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalTablets">Tablets</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Product name</th>
              <th>Price</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Product 1</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Product 2</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Product 3</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Product 4</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr class="total">
              <th scope="row">5</th>
              <td>Total</td>
              <td>400$</td>
              <td></td>
            </tr>
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal" data-target="#modalServicos">voltar</button>
        <button class="btn btn-primary">Checkout</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: Tablets -->
<!--------------------------------------------------------------------------------------------------------------------- Modal Notebooks -------------------------------------------------------------------------------------------------------->
<!-- Modal: Notebooks -->
<div class="modal fade" id="modalNotebooks" tabindex="-1" role="dialog" aria-labelledby="modalNotebooksLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-fluid" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalNotebooks">Notebooks</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Product name</th>
              <th>Price</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Product 1</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Product 2</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Product 3</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Product 4</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr class="total">
              <th scope="row">5</th>
              <td>Total</td>
              <td>400$</td>
              <td></td>
            </tr>
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal" data-target="#modalServicos">voltar</button>
        <button class="btn btn-primary">Checkout</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: Notebooks -->
<!--------------------------------------------------------------------------------------------------------------------- Modal Computador -------------------------------------------------------------------------------------------------------->
<!-- Modal: Computador -->
<div class="modal fade" id="modalComputador" tabindex="-1" role="dialog" aria-labelledby="modalComputadorLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-fluid" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalComputador">Notebooks</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Product name</th>
              <th>Price</th>
              <th>Remove</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Product 1</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Product 2</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Product 3</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Product 4</td>
              <td>100$</td>
              <td><a><i class="fas fa-times"></i></a></td>
            </tr>
            <tr class="total">
              <th scope="row">5</th>
              <td>Total</td>
              <td>400$</td>
              <td></td>
            </tr>
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal" data-target="#modalServicos">voltar</button>
        <button class="btn btn-primary">Checkout</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: Computador -->
<!--------------------------------------------------------------------------------------------------------------------- MODAL's  ------------------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>