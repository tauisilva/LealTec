<!-- Modal -->
<div class="modal fade" id="modalOrdem" tabindex="-1" role="dialog" aria-labelledby="myModalOrdem"
aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
  <!--Content-->
  <div class="modal-content form-elegant" style="border-radius: 10px;">
    <!--Header-->
    <div class="modal-header text-center">
      <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-1" id="myModalOrdem"><strong>Ordem de Serviço</strong></h3>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <!--Body-->
    <div class="modal-body mx-4">
      <!--Body-->
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="defaultCelular" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultCelular">Celular</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="defaultComputador" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultComputador">Computador</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="defaultNotebook" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultNotebook">Notebook</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="defaultTablet" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultTablet">Tablet</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" id="defaultOutros" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultOutros">Outros</label>
      </div>
      <div class="form-row">
        <div class="md-form col-md-6">
          <input type="text" id="Form-nome" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-nome">Nome do Cliente</label>
        </div>
        <div class="md-form col-md-6">
          <input type="email" id="Form-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email">Email</label>
        </div>
      </div>
      <div class="form-row">
        <div class="md-form col-md-6">
          <input type="text" id="Form-tel" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-tel">Telefone</label>
        </div>
        <div class="md-form col-md-6">
          <input type="text" id="Form-func" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-func">Funcionario</label>
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
        <input type="radio" class="custom-control-input" id="defaultemail" name="inlineDefaultRadiosExample">
        <label class="custom-control-label" for="defaultemail">Enviar por email?</label>
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