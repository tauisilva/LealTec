<!-- Modal Tecnico  --> 
<div class="modal fade" id="cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLogin"
  aria-hidden="true" >
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/cliente.jpg'); border-radius: 10px;">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4" style="border-radius: 10px;">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLogin"><a
              class="white-text font-weight-bold"><strong> Cliente</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <div class="row d-flex align-items-center mb-4">
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1" dismiss="cliente" data-toggle="modal" style="border-radius: 10px;" onclick="listarCliente()">Procurar</button>
            </div>
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1"  data-toggle="modal" data-target="#modalCadastrar" style="border-radius: 10px;">Cadastrar</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->
<!--------------------------------------------------------------------------------------------------------------------- Modal Procurar ----------------------------------------------------------------------------------------------------->

<div class="modal fade" id="modalProcurar" tabindex="-1" role="dialog" aria-labelledby="myModalProcurar"
  aria-hidden="true" >
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/bg-showcase-1.jpg'); border-radius: 10px;">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4" style="border-radius: 10px;">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalProcurar"><a
              class="green-text font-weight-bold"><strong>Consultar</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <div class="md-form mb-5">
            <input type="text" id="nome_cliente" class="form-control white-text">
            <label data-error="wrong" data-success="right" for="nome_cliente">Nome</label>
          </div>
          <div class="md-form pb-3">
            <input type="text" pattern="\d{[0-9.]}\.\d{[0-9.]}\.\d{[0-9.]}-\d{[0-9.]}" id="cpf" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="cpf_cliente"maxlength="14" onkeypress="return isNumberKey(event)">CPF</label>
          </div>
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class=" btn btn-outline-success btn-block z-depth-1" style="border-radius: 10px;" data-toggle="modal" data-target="#modalLisCliente">Procurar</button>
            </div>
            <!--Grid column-->
          </div>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

<!--------------------------------------------------------------------------------------------------------------------- Modal Cadastrar ---------------------------------------------------------------------------------------------------->
<div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="myModalCadastrar"
  aria-hidden="true" action="index.php?page=sal-cliente">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/bg-showcase-1.jpg'); border-radius: 10px;">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4" style="border-radius: 10px;">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalCadastrar"><a
              class="green-text font-weight-bold"><strong>Cadastro</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <div class="md-form mb-5">
            <input type="text" id="nome_cliente" class="form-control white-text">
            <label data-error="wrong" data-success="right" for="nome_cliente">Nome</label>
          </div>
          <div class="md-form mb-5">
            <input type="text" id="numero" class="form-control white-text">
            <label data-error="wrong" data-success="right" for="numero">Telefone</label>
          </div>
          <div class="md-form mb-5">
            <input type="text" id="numero" class="form-control white-text">
            <label data-error="wrong" data-success="right" for="numero">Endereço</label>
          </div>
          <div class="md-form pb-3">
            <input type="text" pattern="\d{[0-9.]}\.\d{[0-9.]}\.\d{[0-9.]}-\d{[0-9.]}" id="cpf" class="form-control validate white-text">
            <label data-error="wrong" data-success="right" for="cpf_cliente"maxlength="14" onkeypress="return isNumberKey(event)">CPF</label>
          </div>
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class=" btn btn-outline-success btn-block z-depth-1" style="border-radius: 10px;" data-miss="#" data-toggle="modal" data-target="#modalLisCliente">Cadastrar</button>
            </div>
            <!--Grid column-->
          </div>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------------- Modal Cadastrar ---------------------------------------------------------------------------------------------------->
 
<script type="text/javascript">
  function listarCliente(){
    $.ajax({
      url: "cliente/listar-cliente.php",
      type: "POST",
      success: function(data){
        $(".modal").html(data);
        $("#modalLisCliente").modal("show");
      }
    });
  }
</script>