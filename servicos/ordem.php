<?php

  require_once("../conexao.class.php");

  try {
        
    $conn = new Conexao();

    $comboMarca = "SELECT * FROM Marca";

    $comboCelular = "SELECT C.imei AS id, M.nome FROM Celular C".
                    " LEFT OUTER JOIN Mobile M ON C.mobile = M.id_Mobil";

    $comboTablet = "SELECT T.mobile AS id, M.nome FROM Tablet T".
                   " LEFT OUTER JOIN Mobile M ON T.mobile = M.id_Mobil";

    $comboNote = "SELECT N.computador AS id, C.nome FROM Notebook N".
                 " LEFT OUTER JOIN Computador C ON N.computador = C.id_Comp";

    $comboComput = "SELECT D.computador AS id, C.nome FROM Desktop D".
                   " LEFT OUTER JOIN Computador C ON D.computador = C.id_Comp";

    $comboMarca = $conn->Consultas($comboMarca);
    $comboCelular = $conn->Consultas($comboCelular);
    $comboTablet = $conn->Consultas($comboTablet);
    $comboNote = $conn->Consultas($comboNote);
    $comboComput = $conn->Consultas($comboComput);

    $count = 1;

    define("PROC", "servicos/mobiles/acoesMobil.php");

  } catch (Exception $e) {

      print "<script>alert(".$e->getMessage().");</script>";

  }

?>
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
        <div class="text-center">
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
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input" id="defaultDispositivo" name="inlineDefaultRadiosExample">
          <label class="custom-control-label" for="defaultDispositivo">Cadastrar Dispositivo?</label>
        </div>

        <!--For select-->
        <div class="form-row">
          <div class="input-group mb-3 col-md-6" >
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupDispositivo" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">Dispositivo</label>
            </div>
            <select class="custom-select" id="inputGroupDispositivo" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;">
              <option selected disable>Choose...</option>
              <option value="1">One</option>
            </select>
          </div>
        </div>
        <!--For select-->

        <!--for all-->
        <div class="form-row">
          <div class="md-form col-md-6">
            <input type="text" id="Form-modelo" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-modelo">Modelo</label>
          </div>
          <!--ID for all dispotivos and IMEI for Mobiles(Smartphones)-->
          <div class="md-form col-md-6">
            <input type="email" id="Form-imei-id" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-imei-id">ID/IMEI</label>
          </div>
        </div>
        <!--for all-->

        <!--All Mobile-->
        <div class="form-row">
          <div class="md-form col-md-6">
            <input type="text" id="Form-tel" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-tel">Tela</label>
          </div>
          <div class="md-form col-md-6">
            <input type="text" id="Form-CarregadorMobile" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-CarregadorMobile">Tipo Carregador</label>
          </div>
        </div>
        <!--All Mobile-->

        <!--For All Computadores-->
        <div class="form-row">
          <div class="md-form col-md-6">
            <input type="text" id="Form-tela" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-tela">Tipo de Tela</label>
          </div>
          <div class="md-form col-md-6">
            <input type="text" id="Form-teclado" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-teclado">Teclado</label>
          </div>
        </div>
        <div class="form-row">
          <div class="md-form col-md-6">
            <input type="text" id="Form-cpu" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-cpu">Processador</label>
          </div>
          <div class="md-form col-md-6">
            <input type="text" id="Form-ram" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-ram">RAM</label>
          </div>
        </div>
        <div class="form-row">
          <div class="md-form col-md-6">
            <input type="text" id="Form-hd" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-hd">HD</label>
          </div>
          <div class="md-form col-md-6">
            <input type="text" id="Form-os" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-os">Sistema Operacional</label>
          </div>
        </div>
        <!--For All Computadores-->

        <!--For Notebook-->
        <div class="form-row">
          <div class="md-form col-md-6">
            <input type="text" id="Form-fontNotebbok" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-fontNotebbok">Fonte Notebook</label>
          </div>
          <div class="md-form col-md-6">
            <input type="text" id="Form-bateria" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-bateria">Bateria</label>
          </div>
        </div>
        <!--For NOtebook-->

        <!--For Desktop-->
        <div class="form-row">
          <div class="md-form col-md-6">
            <input type="text" id="Form-FontPc" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-FontPc">Fonte</label>
          </div>
        </div>
        <!--For Desktop-->

          <div class="input-group mb-3 col-md-6" >
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupMarca" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;">Marca</label>
            </div>
            <select class="custom-select" id="inputGroupMarca" style="border-top-right-radius: 20px; border-bottom-right-radius: 20px;" required>
              <option selected disable>Selecione...</option>
              <?php while($row = $resMarca->fetch_Assoc()): ?>
                <option value="<?= $row["id_marca"] ?>"><?= trim($row["marca"]) ?></option>
              <?php endwhile;?>
            </select>
          </div>

        <div class="md-form">
          <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
          <label for="materialContactFormMessage">Descrição</label>
        </div>
        <div class="md-form">
          <input type="text" id="Form-val" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-val">R$</label>
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

<script>

    $("#modalOrdem").on("hide.bs.modal", function(e){
        <?php $_SESSION["modal"] = "#modalServicos"; ?>
        location.reload();
    });

</script>