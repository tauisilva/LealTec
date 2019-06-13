<?php

    session_start();
    require_once("../../conexao.class.php");
    
    try {
        
        $conn = new Conexao();

        $strQuery = "SELECT C.imei as id, C.pelicula, M.nome, M.carregador, M.tela, MC.marca FROM celular C".
                    " LEFT OUTER JOIN Mobile M ON C.Mobile = M.id_mobil".
                    " LEFT OUTER JOIN Marca MC ON M.marca = MC.id_marca;";

        $res = $conn->Consultas($strQuery);

        $count = 1;

        define("PROC", "servicos/mobiles/acoesMobil.php");

    } catch (Exception $e) {

        print "<script>alert(".$e->getMessage().");</script>";

    }

?>

<div class="modal fade" id="modalSmartphones" tabindex="-1" role="dialog" aria-labelledby="modalSmartphonesLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content" style="border-radius: 10px;">
      <!--Header-->
      <div class="modal-header" style="border-top-right-radius:  10px; border-top-left-radius: 10px;">
        <h4 class="modal-title " id="myModalSmartphones">Smartphones</h4>
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
              <th>Nome</th>
              <th>Marca</th>
              <th>Carregador</th>
              <th>Tela</th>
              <th>Pelicula</th>
              <th colspan="2" style="text-align: center;">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = $res->fetch_Assoc()): ?>
              <tr>
                <th scope="row"><?= $count++ ?></th>
                <td><?= trim($row["nome"]) ?></td>
                <td><?= trim($row["marca"]) ?></td>
                <td><?= trim($row["carregador"]) ?></td>
                <td><?= trim($row["tela"]) ?></td>
                <td><?= trim($row["pelicula"]) ?></td>
                <td>
                  <a id="btnEditar" data-id=<?= $row["id"]?>>
                    <i class="far fa-edit"></i>
                  </a>
                </td>
                <td>
                  <a id="btnDeletar" data-id=<?= $row["id"]?>>
                    <i class="fas fa-times"></i>
                  </a>
                </td>
              </tr>
            <?php endwhile; ?>
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

    $("#modalSmartphones").on("hide.bs.modal", function(e){
        <?php $_SESSION["modal"] = "#modalServicos"; ?>
        location.reload();
    });

</script>