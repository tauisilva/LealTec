<?php

    session_start();
    require_once("../conexao.class.php");

    try {
        
        $conn = new Conexao();

        $strQuery = "";

        $res = $conn->Consultas($strQuery);

        $count = 1;

        define("PROC", "servicos/desktop/acoesDesk.php");

    } catch (Exception $e) {

        print "<script>alert(".$e->getMessage().");</script>";

    }

?>
<div class="modal fade" id="modalComputador" tabindex="-1" role="dialog" aria-labelledby="modalComputadorLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content" style="border-radius: 10px;">
      <!--Header-->
      <div class="modal-header" style="border-top-right-radius:  10px; border-top-left-radius: 10px;">
        <h4 class="modal-title" id="myModalComputador">Computador</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="container-fluid">
      <div class="form-row">
        <div class="md-form mt-0 col-md-10">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-md-2">
          <button type="button" class="btn btn-outline-primary waves-effect btn-sm" id="btnConsultar" style="border-radius: 40px;">Procurar</button>
        </div>
      </div>
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
        <button type="button"class="btn btn-outline-secondary waves-effect btn-sm" style="border-radius: 40px;" data-dismiss="modal" data-target="#modalServicos">voltar</button>
      </div>
    </div>
  </div>
</div>

<script>

    $("#modalComputador").on("hide.bs.modal", function(e){
        <?php $_SESSION["modal"] = "#modalDesktop"; ?>
        location.reload();
    });

</script>