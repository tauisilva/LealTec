<?php

    session_start();
    require_once("../../conexao.class.php");

    try {
        
        $conn = new Conexao();

        $strQuery = "SELECT * FROM Desktop D".
                    " LEFT OUTER JOIN Computador C ON D.computador = C.id_Comp";

        $res = $conn->Consultas($strQuery);

        $count = 1;

        define("PROC", "servicos/mobiles/acoesMobil.php");

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
              <th>Nome</th>
              <th>Marca</th>
              <th>Teclado</th>
              <th>Processador</th>
              <th>Ram</th>
              <th>HD</th>
              <th>SO</th>
              <th>Fonte</th>
              <th colspan="2">Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = $res->fetch_Assoc()):?>
              <tr>
                <th scope="row"><?=$count++?></th>
                <td><?= trim($row["nome"]) ?></td>
                <td><?= trim($row["marca"]) ?></td>
                <td><?= trim($row["teclado"]) ?></td>
                <td><?= trim($row["processador"]) ?></td>
                <td><?= trim($row["ram"]) ?></td>
                <td><?= trim($row["hd"]) ?></td>
                <td><?= trim($row["so"]) ?></td>
                <td><?= trim($row["fonte"]) ?></td>
                <td>
                  <a id="btnEditar" data-id=<?= $row["id_Comp"]?>>
                    <i class="far fa-edit"></i>
                  </a>
                </td>
                <td>
                  <a id="btnDeletar" data-id=<?= $row["id_Comp"]?>>
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

    $("#modalComputador").on("hide.bs.modal", function(e){
        <?php $_SESSION["modal"] = "#modalDesktop"; ?>
        location.reload();
    });

</script>