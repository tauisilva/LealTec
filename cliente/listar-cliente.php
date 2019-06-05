<?php
  session_start();
  require_once("../conexao.class.php");

  try {
      
    $conn = new Conexao();

    $strQuery = "SELECT C.id_cliente AS id, P.cpf, P.nome, T.numero, C.endereco FROM cliente C LEFT OUTER JOIN Pessoa P ON C.pessoa = P.id_pessoa LEFT OUTER JOIN Telefone T ON P.numero = T.id_tel;";
    
    $res = $conn->Consultas($strQuery);
    
    $count = 1;

    define("PROC", "cliente/acoesCliente.php");

  } catch (Exception $e) {
    
    print "<script>alert(".$e->getMessage().");</script>";
    
  }

?>

<!-- Modal: LisCliente -->
<div class="modal fade" id="modalLisCliente" style="display: none;" tabindex="-1" role="dialog" aria-labelledby="modalLisClienteLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-fluid" role="document">
    <div class="modal-content" style="border-radius: 20px;">
      <!--Header-->
      <div class="modal-header" style="background-image: linear-gradient(to right, #505285 0%, #585e92 12%, #65689f 25%, #7474b0 37%, #7e7ebb 50%, #8389c7 62%, #9795d4 75%, #a2a1dc 87%, #b5aee4 100%); border-top-right-radius:  20px; border-top-left-radius: 20px;">
        <h4 class="modal-title white-text" id="myModalLisCliente">Lista de Clientes</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>CPF</th>
              <th>Numero</th>
              <td>Endereço</td>
              <td>Ação</td>
            </tr>
          </thead>
          <tbody>
            <?php while($row = $res->fetch_Assoc()):?>
              <tr>
                <th scope="row"><?= $count++ ?></th>
                <td><?= trim($row["nome"]) ?></td>
                <td><?= trim($row["cpf"]) ?></td>
                <td><?= trim($row["numero"]) ?></td>
                <td><?= trim($row["endereco"]) ?></td>  
                <td>
                  <a id="btnDeletar" data-id=<?= $row["id"] ?>>
                    <i class="fas fa-times"></i>
                  </a>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>

      <br>

      <table>
        <tr>
          <td>
            <label for="Pesquisar">Pesquisar</label>
          </td>
        </tr>
      </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
      <button type="button"class="btn btn-outline-secondary waves-effect" style="border-radius: 20px;" id="btnVoltar">voltar</button>
        <button class="btn btn-outline-primary waves-effect" style="border-radius: 20px;">Checkout</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: LisCliente -->

<script type="text/javascript">

  $("a[id='btnDeletar']").click(function(){

    var ret = confirm("Deseja realmente excluir esse cliente?");

    if(ret){

      var btnDeletar = $(this);

      $.ajax({

        url: "<?= PROC ?>",
        type: "POST",
        dataType: "json",
        data:{

          acao: "Deletar",
          idDeletar: $(this).attr("data-id")
        }
      }).done(function(val){
        if(val["error"]){
          alert(val["message"]);
        }else{
          btnDeletar.parent().parent().remove();
          alert("Exclusão do cliente "+val["usuario"]+" realizada com sucesso");
        }
      }).fail(function(x, status, val){
        alert(val);
      });

    }
    
  });
/*
  $("a[id='btnConsultar']").click(function(){

    $.ajax({

    });
  });
*/
  $("#btnVoltar").click(function(){

    <?php
      $_SESSION["modal"] = "#cliente";
    ?>
    location.reload();
    
  });
  
</script>