<!-- Modal mobiles -->
<div class="modal fade" id="modalServicos" tabindex="-1" role="dialog" aria-labelledby="modalServicosLabel"
  aria-hidden="true" >
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/mimix3.jpg'); border-radius: 10px;">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4" style="border-radius: 10px;">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="modalServicosLabel"><a
              class="white-text font-weight-bold"><strong> Mobile</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <div class="row d-flex align-items-center mb-4">
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1 btn-sm" data-toggle="modal" onclick="btnSmartPhone();" style="border-radius: 30px;">Smartphone</button>
            </div>
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1 btn-sm" data-toggle="modal" onclick="btnTablet();" style="border-radius: 30px;">Tablets</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button"class="btn btn-outline-danger waves-effect btn-sm" style="border-radius: 40px;" data-dismiss="modal">Close</button>
        <button class="btn btn-outline-success waves-effect z-depth-1 btn-sm" style="border-radius: 40px;"  data-dismiss="modal" data-toggle="modal" onclick="ordemServico();">Novo Serviço</button>
      </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal mobiles-->

<script type="text/javascript">

  function btnSmartPhone(){
    $.ajax({
      url: "servicos/mobiles/celular.php",
      type: "POST",
      success: function(data){
        $("#modalServicos").html(data);
        $("#modalSmartphones").modal("show");
      }
    });
  }

  function btnTablet(){
    $.ajax({
      url: "servicos/mobiles/tablet.php",
      type: "POST",
      success: function(data){
        $("#modalServicos").html(data);
        $("#modalTablets").modal("show");
      }
    });
  }

  function ordemServico(){
    $.ajax({
      url: "servicos/ordem.php",
      type: "POST",
      success: function(data){
        $("#modalServicos").html(data);
        $("#modalOrdem").modal("show");
      }
    });
  }

</script>