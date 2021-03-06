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
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1" dismiss="cliente" data-toggle="modal" style="border-radius: 30px;" onclick="listarCliente()">Procurar</button>
            </div>
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1"  data-toggle="modal" style="border-radius: 30px;" onclick="cadastrarCliente()">Cadastrar</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
 
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

  function cadastrarCliente(){
    $.ajax({
      url: "cliente/cadastrar-cliente.php",
      type: "POST",
      success: function(data){
        $(".modal").html(data);
        $("#modalCadastrar").modal("show");
      }
    });
  }

</script>
