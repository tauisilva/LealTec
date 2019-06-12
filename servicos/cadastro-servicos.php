<!-- Modal -->
<div class="modal fade" id="modalCadServicos" tabindex="-1" role="dialog" aria-labelledby="myModalCadServicos"
aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
  <!--Content-->
  <div class="modal-content form-elegant" style="border-radius: 10px;">
    <!--Header-->
    <div class="modal-header text-center">
      <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-1" id="myModalCadServicos"><strong>Cadastro de Serviços</strong></h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <!--Body-->
    <div class="modal-body mx-4">
      <!--Body-->
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="defaultCelular1" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultCelular1">Celular</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="defaultComputador1" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultComputador1">Computador</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="defaultNotebook1" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultNotebook1">Notebook</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="defaultTablet1" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultTablet1">Tablet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="defaultOutros1" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultOutros1">Outros</label>
      </div>
      <div class="form-row">
        <div class="md-form col-md-6">
          <input type="text" id="Form-modelo" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-modelo">Modelo</label>
        </div>
        <div class="md-form col-md-6">
          <input type="email" id="Form-imei-id" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-imei-id">ID/IMEI</label>
        </div>
      </div>
      <div class="form-row">
      	<div class="input-group mb-3 col-md-12" >
		  <div class="input-group-prepend">
		    <label class="input-group-text" for="inputGroupSelect01" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">Marca</label>
		  </div>
		  <select class="custom-select" id="inputGroupSelect01" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
		    <option selected>Choose...</option>
		    <option value="1">One</option>
		    <option value="2">Two</option>
		    <option value="3">Three</option>
		  </select>
		</div>
      </div>
      <div class="form-row">
        <div class="md-form col-md-6">
          <input type="text" id="Form-tel" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-tel">Tela</label>
        </div>
        <div class="md-form col-md-6">
          <input type="text" id="Form-func" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-func">Memoria</label>
        </div>
      </div>
      <div class="form-row">
        <div class="md-form col-md-6">
          <input type="text" id="Form-val" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-val">R$</label>
        </div>
        <div class="md-form col-md-6">
          <input type="text" id="Form-disp" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-disp">Dispositivo</label>
        </div>
      </div>
      <div class="md-form">
        <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
        <label for="materialContactFormMessage">Descrição</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="defaultemail1" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultemail1">Enviar por email?</label>
      </div>
    </div>
    
    <!--Footer-->
    <div class="modal-footer mx-4 pt-2 mb-1">            
      <button type="button" class="btn btn-outline-success waves-effect btn-sm" data-dismiss="modal" style="border-radius: 40px;">Sair</button>
      <button type="button" class="btn btn-outline-danger waves-effect btn-sm" style="border-radius: 40px;">Salvar Ordem</button>
    </div>

  </div>
  <!--/.Content-->
</div>
</div>