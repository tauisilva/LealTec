<!-- Modal -->
<div class="modal fade" id="modalOrdem" tabindex="-1" role="dialog" aria-labelledby="myModalOrdem"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <!--Content-->
    <div class="modal-content form-elegant" style="border-radius: 10px;">
      <!--Header-->
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalOrdem"><strong>Ordem de Serviço</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="form-row">
        <div class="md-form col-md-6">
          <input type="email" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Nome do Cliente</label>
        </div>
        <div class="md-form col-md-6">
          <input type="email" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Email</label>
        </div>
        </div>
        <div class="form-row">
        <div class="md-form col-md-6">
          <input type="email" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Telefone</label>
        </div>
        <div class="md-form col-md-6">
          <input type="email" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Funcionario</label>
        </div>
        </div>
        <div class="form-row">
        <div class="md-form col-md-6">
          <input type="email" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Valor</label>
        </div>
        <div class="md-form col-md-6">
          <input type="email" id="Form-email1" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Form-email1">Dispositivo</label>
        </div>
        </div>
        <div class="md-form">
            <select class="mdb-select md-form">
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>  
          <div class="md-form">
            <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
            <label for="materialContactFormMessage">Descrição</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialUnchecked">
            <label class="form-check-label" for="materialUnchecked">Enviar Ordem Por email</label>
          </div>
        </div>
      <!--Footer-->
      <div class="modal-footer mx-5 pt-3 mb-1">
        <button type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal" style="border-radius: 10px;">Sair</button>
        <button type="button" class="btn btn-outline-danger waves-effect" style="border-radius: 10px;">Salvar Ordem</button>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>