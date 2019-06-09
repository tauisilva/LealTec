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
    <div class="modal-content" style="border-radius: 10px;">
      <!--Header-->
      <div class="modal-header" style="background-image: linear-gradient(to right, #505285 0%, #585e92 12%, #65689f 25%, #7474b0 37%, #7e7ebb 50%, #8389c7 62%, #9795d4 75%, #a2a1dc 87%, #b5aee4 100%); border-top-right-radius:  10px; border-top-left-radius: 10px;">
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
              <th>Endereço</th>
              <th colspan="2" style="text-align: center;">Ações</th>
            </tr>
          </thead>
          <tbody id="Resultado">
            <?php while($row = $res->fetch_Assoc()):?>
              <tr>
                <th scope="row"><?= $count++ ?></th>
                <td><?= trim($row["nome"]) ?></td>
                <td><?= trim($row["cpf"]) ?></td>
                <td><?= trim($row["numero"]) ?></td>
                <td><?= trim($row["endereco"]) ?></td>
                <td>
                  <a id="btnEditar" data-id=<?= $row["id"]?>>
                  <i class="far fa-edit"></i>
                  </a>
                </td>  
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

      <table id="Pesquisa">
        <tr>
          <td>
            <label for="strConsulta" style="font-size: 14pt; ">Pesquisar Cliente</label>&nbsp;
          </td>
          <td>
            <input type="text" id="strConsulta" size="100%" class="form-control" required>
          </td>
        </tr>
      </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
      <button type="button"class="btn btn-outline-secondary waves-effect" style="border-radius: 10px;" id="btnVoltar">voltar</button>
        <button type="button" id="btnConsultar" class="btn btn-outline-primary waves-effect" style="border-radius: 10px;">Consultar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: LisCliente -->

<script type="text/javascript">

  $("#modalLisCliente").on("hide.bs.modal", function(e){
    <?php $_SESSION["modal"] = "#cliente"; ?>
    location.reload();
  });

  $("#btnConsultar").click(function(){
    $.ajax({
      type: "POST",
      url: "<?= PROC ?>",
      dataType: "json",
      cache: false,
      data: {
        
        acao: "Consultar",
        consulta: $("#strConsulta").val()

      },
      success: function(val) {
        $("#Resultado").html("");
        
        var count = 1;

        for(x in val){
          $("#Resultado").append("<tr>"+
                                    "<th scope=\"row\">"+(count++)+"</th>"+
                                    "<td>"+$.trim(val[x]["nome"])+"</td>"+
                                    "<td>"+$.trim(val[x]["cpf"])+"</td>"+
                                    "<td>"+$.trim(val[x]["numero"])+"</td>"+
                                    "<td>"+$.trim(val[x]["endereco"])+"</td>"+
                                    "<td>"+
                                      "<a id=\"btnEditar\" data-id='"+val[x]["id"]+"'>"+
                                        "<i class=\"far fa-edit\"></i>"+
                                      "</a>"+
                                    "</td>"+
                                    "<td>"+
                                      "<a id=\"btnDeletar\" data-id='"+val[x]["id"]+"'>"+
                                        "<i class=\"fas fa-times\"></i>"+
                                      "</a>"+
                                    "</td>"+
                                  "</tr>");
        }
                                
      }
    });
  });

  $("body").delegate("a[id='btnDeletar']", "click", function(){
  //$("a[id='btnDeletar']").click(function(){

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
  $("body").delegate("a[id='btnEditar']", "click", function(){
  //$("a[id='btnEditar']").click(function(){
    $.ajax({

        url: "<?= PROC ?>",
        type: "POST",
        dataType: "json",

        data:{

          acao: "Editar",
          idCliente: $(this).attr("data-id")
        },
        success: function(val) {
          $("#Pesquisa").html("");
          $("#Resultado").html("");
          $("#Resultado").html("<tr>"+
                "<th scope=\"row\"></th>"+
                "<td>"+
                  "<input type=\"text\ id=\"nome_cliente\" class=\"form-control\" value='"+val["nome"]+"' required>"+
                "</td>"+
                "<td>"+
                  "<input type=\"text\" id=\"CPF\" class=\"form-control\" maxlength=\"14\" onkeypress=\"fMasc(this, mCPF)\" value='"+val["cpf"]+"' required>"+
                "</td>"+
                "<td>"+
                  "<input type=\"text\" id=\"numero\" class=\"form-control\" maxlength=\"14\" onkeypress=\"fMasc(this, mTel)\" value='"+val["numero"]+"' required>"+
                "</td>"+
                "<td>"+
                  "<input type=\"text\" id=\"endereco\" class=\"form-control\" value='"+val["endereco"]+"' required>"+
                "</td>"+
                "<td>"+
                  "<a id=\"btnSalvar\" colspan=\"2\" style=\"text-align: right;\"data-id='"+val["id"]+"'>"+
                    "<i class=\"fas fa-redo-alt\"></i>"+
                  "</a>"+
                "</td>"+
              "</tr>");
        }
    }).done(function(val){
      if(val["error"])
        alert(val["message"]);
    }).fail(function(x, status, val){
      alert(val);
    });
  });
*/
  $("body").delegate("#btnSalvar", "click", function(){
    $.ajax({

      url: "<?= PROC ?>",
      type: "POST",
      dataType: "json",

      data:{

        acao: "Atualizar",
        idCliente: $(this).attr(),
        nome: $("#nome_cliente").val(),
        cpf: $("#CPF").val(),
        endereco:$("#endereco").val(),
        numero: $("#numero").val()
      }
    }).done(function(){
      if(val["error"]){
        alert(val["message"]);
      }
      else{

      }
    }).fail(function(x, status, val){
      alert(val);
    });
  });

  $("#btnVoltar").click(function(){

    <?php
      $_SESSION["modal"] = "#cliente";
    ?>
    location.reload();
    
  });
  
</script>
