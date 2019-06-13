<!-- Modal serviços -->
<div class="modal fade" id="modalDesktop" tabindex="-1" role="dialog" aria-labelledby="modalDesktopLabel"
  aria-hidden="true" >
  <div class="modal-dialog form-dark modal-dialog-scrollable" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/migamer.jpeg'); border-radius: 10px;">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4" style="border-radius: 10px;">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="modalDesktopLabel"><a
              class="white-text font-weight-bold"><strong> Desktop</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <div class="row d-flex align-items-center mb-4">
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1 btn-sm" data-toggle="modal" onclick="btnComputador();" style="border-radius: 30px;">Computador</button>
            </div>
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1 btn-sm"  data-toggle="modal" onclick="btnNotebook();" style="border-radius: 30px;">Notebook</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button"class="btn btn-outline-danger waves-effect btn-sm" style="border-radius: 40px;" data-dismiss="modal">Close</button>
        <button class="btn btn-outline-success waves-effect z-depth-1 btn-sm" style="border-radius: 40px;" data-toggle="modal" onclick="ordemServico()" data-dismiss="modal">Novo Serviço</button>
      </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal serviços-->

<script>
  
  function btnComputador(){
    $.ajax({
      url: "servicos/desktop/computador.php",
      type: "POST",
      success: function(data){
        $("#modalDesktop").html(data);
        $("#modalComputador").modal("show");
      }
    });
  }

  function btnNotebook(){
    $.ajax({
      url: "servicos/desktop/notebook.php",
      type: "POST",
      success: function(data){
        $("#modalDesktop").html(data);
        $("#modalNotebooks").modal("show");
      }
    });
  }
  
  function ordemServico(){
    $.ajax({
      url: "servicos/ordem.php",
      type: "POST",
      
      success: function(data){
        $("#modalDesktop").html(data);
        $("#modalOrdem").modal("show");
      }
    });
  }

</script>