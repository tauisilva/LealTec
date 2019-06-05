<!-- Modal mobiles -->
<div class="modal fade" id="modalOutros" tabindex="-1" role="dialog" aria-labelledby="modalOutrosLabel"
  aria-hidden="true" >
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/mispeakers.jpg'); border-radius: 10px;">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4" style="border-radius: 10px;">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="modalOutrosLabel"><a
              class="white-text font-weight-bold"><strong> Outros</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <div class="row d-flex align-items-center mb-4">
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1" data-toggle="modal" data-target="#modalSmartphones" style="border-radius: 10px;">Smartphone</button>
            </div>
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1"  data-toggle="modal" data-target="#modalTablets"style="border-radius: 10px;">Tablets</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button"class="btn btn-outline-danger waves-effect" style="border-radius: 10px;" data-dismiss="modal">Close</button>
        <button class="btn btn-outline-success waves-effect z-depth-1" style="border-radius: 10px;" data-toggle="modal" data-target="#modalOrdem" data-dismiss="modal">Novo Serviço</button>
      </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal mobiles-->
<?php include("ordem.php");?>