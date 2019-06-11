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
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content" style="border-radius: 10px;">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLisCliente">Lista de Clientes</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="container-fluid">
        <table id="Pesquisa">
        <tr>
          <td>
            <label for="strConsulta"></label>&nbsp;
          </td>
          <td>
          <div class="md-form mt-0 ">
            <input type="text" id="strConsulta" size="100%" class="form-control" placeholder="Procurar Cliente" aria-label="Procurar Cliente">
          </div>
          </td>
        </tr>
      </table>
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
      </div>
      <!--Footer-->
      <div class="modal-footer">
      <button type="button"class="btn btn-outline-secondary waves-effect btn-sm" style="border-radius: 40px;" id="btnVoltar">voltar</button>
        <button type="button" id="btnConsultar" class="btn btn-outline-primary btn-sm waves-effect" style="border-radius: 40px;">Consultar</button>
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
          $("#strConsulta").val("");
          $("#btnConsultar").css("display","none");
          $("#Pesquisa").css("display","none");
          $("#Resultado").html("");
          $("#Resultado").append("<tr>"+
                "<th scope=\"row\"></th>"+
                "<td>"+
                  "<input type=\"text\" id=\"nome_cliente\" class=\"form-control\" value='"+val['nome']+"' required>"+
                "</td>"+
                "<td>"+
                  "<input type=\"text\" id=\"CPF\" class=\"form-control\" maxlength=\"14\" onkeypress=\"fMasc(this, mCPF)\" value='"+val['cpf']+"' required>"+
                "</td>"+
                "<td>"+
                  "<input type=\"text\" id=\"numero\" class=\"form-control\" maxlength=\"14\" onkeypress=\"fMasc(this, mTel)\" value='"+val["numero"]+"' required>"+
                "</td>"+
                "<td>"+
                  "<input type=\"text\" id=\"endereco\" class=\"form-control\" value='"+val['endereco']+"' required>"+
                "</td>"+
                "<td>"+
                  "<a id=\"btnSalvar\" colspan=\"2\" style=\"text-align: right;\"data-id='"+val['id']+"'>"+
                    "<i style=\"color: blue;font-size:30px\" class=\"fas fa-redo-alt\"></i>"+
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

  $("body").delegate("#btnSalvar", "click", function(){
    $.ajax({
      url: "<?= PROC ?>",
      type: "POST",
      dataType: "json",

      data:{

        acao: "Atualizar",
        idCliente: $(this).attr("data-id"),
        nome: $("#nome_cliente").val(),
        cpf: $("#CPF").val(),
        endereco:$("#endereco").val(),
        numero: $("#numero").val()
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

        $("#btnConsultar").css("display","");
        $("#Pesquisa").css("display","");
                                
      }
    }).done(function(val){
      if(val["error"]){
        alert(val["message"]);
      }
      else{
        alert("Dados atualizados");
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
