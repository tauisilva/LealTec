<?php

    session_start();
    require_once("../../conexao.class.php");

    try {
        
        $conn = new Conexao();

        $strQuery = "SELECT T.mobile as id, T.tamanho, M.nome, M.carregador, M.tela, MC.marca FROM Tablet T".
                    " LEFT OUTER JOIN Mobile M ON T.Mobile = M.id_mobil".
                    " LEFT OUTER JOIN Marca MC ON M.marca = MC.id_marca;";

        $res = $conn->Consultas($strQuery);

        $count = 1;

        define("PROC", "servicos/mobiles/acoesMobil.php");

    } catch (Exception $e) {

        print "<script>alert(".$e->getMessage().");</script>";

    }

?>
<div class="modal fade" id="modalTablets" tabindex="-1" role="dialog" aria-labelledby="modalTabletsLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content" style="border-radius: 10px;">
      <!--Header-->
      <div class="modal-header" style="border-top-right-radius:  10px; border-top-left-radius: 10px;">
        <h4 class="modal-title" id="myModalTablets">Tablets</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div id="Pesquisa" class="container-fluid">
      <div class="form-row">
        <div class="md-form mt-0 col-md-10">
          <input class="form-control" type="text" id="strConsulta" placeholder="Search" aria-label="Search">
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
              <th>Tamanho da Tela</th>
              <th colspan="2" style="text-align: center;">Ações</th>
            </tr>
          </thead>
          <tbody id="Resultado">
          <?php while($row = $res->fetch_Assoc()): ?>
              <tr>
                <th scope="row"><?= $count++ ?></th>
                <td><?= trim($row["nome"]) ?></td>
                <td><?= trim($row["marca"]) ?></td>
                <td><?= trim($row["carregador"]) ?></td>
                <td><?= trim($row["tela"]) ?></td>
                <td style="text-align: center;"><?= trim($row["tamanho"]) ?></td>
                <td>
                  <a id="btnEditar" data-id="<?= $row["id"]?>">
                    <i class="far fa-edit"></i>
                  </a>
                </td>
                <td>
                  <a id="btnDeletar" data-id="<?= $row["id"]?>">
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
        <button type="button" class="btn btn-outline-secondary waves-effect btn-sm" style="border-radius: 40px;" data-dismiss="modal" data-target="#modalServicos">voltar</button>
      </div>
    </div>
  </div>
</div>

<script>

  $("#modalTablets").on("hide.bs.modal", function(e){
      <?php $_SESSION["modal"] = "#modalServicos"; ?>
      location.reload();
  });

  $("#btnConsultar").click(function(){
    $.ajax({
      url: "<?= PROC ?>",
      type: "POST",
      dataType: "json",
      cache: false,
      data: {
        
        acao: "Consultar",
        consulta: $("#strConsulta").val(),
        tabela: "Tablet"

      },
      success: function(val) {
        $("#Resultado").html("");
        
        var count = 1;

        for(x in val){
          $("#Resultado").append("<tr>"+
                                    "<th scope=\"row\">"+(count++)+"</th>"+
                                    "<td>"+val[x]["nome"]+"</td>"+
                                    "<td>"+val[x]["marca"]+"</td>"+
                                    "<td>"+val[x]["carregador"]+"</td>"+
                                    "<td>"+val[x]["tela"]+"</td>"+
                                    "<td style=\"text-align: center;\">"+val[x]["tamanho"]+"</td>"+
                                    "<td>"+
                                      "<a id=\"btnEditar\" data-id='"+val[x]["id"]+"'>"+
                                        "<i class=\"far fa-edit\"></i>"+
                                      "</a>"+
                                    "</td>"+
                                    "<td>"+
                                      "<a id=\"btnDeletar\" data-id=data-id='"+val[x]["id"]+"'>"+
                                        "<i class=\"fas fa-times\"></i>"+
                                      "</a>"+
                                    "</td>"+
                                  "</tr>");
        }
                                
      }
      
    });
    
  });

  $("body").delegate("a[id='btnDeletar']", "click", function(){

    var ret = confirm("Deseja realmente excluir esse tablet?");

    if(ret){

      var btnDeletar = $(this);

      $.ajax({

        url: "<?= PROC ?>",
        type: "POST",

        data:{

          acao: "Deletar",
          idDeletar: $(this).attr("data-id"),
          tabela: "Tablet"
          
        }
      }).done(function(val){
        if(val["error"]){
          alert(val["message"]);
        }
        else{
          btnDeletar.parent().parent().remove();
        }
      }).fail(function(x, status, val){
        alert(val);
      });

    }

  });

  $("body").delegate("a[id='btnEditar']", "click", function(){

    $.ajax({

        url: "<?= PROC ?>",
        type: "POST",
        dataType: "json",

        data:{

          acao: "Editar",
          idCliente: $(this).attr("data-id"),
          table: "Tablet"
        },
        success: function(val) {
          $("#strConsulta").val("");
          $("#btnConsultar").css("display","none");
          $("#Pesquisa").css("display","none");
          $("#Resultado").html("");
          $("#Resultado").append("<tr>"+
                "<th scope=\"form-row\"></th>"+
                "<td>"+
                "<div class=\"md-form\">"+
                  "<input type=\"text\" id=\"nome\" class=\"form-control\" value='"+val['nome']+"' required>"+
                "</div>"+
                "</td>"+
                "<td>"+
                "<div class=\"md-form\">"+
                  "<input type=\"text\" id=\"nome\" class=\"form-control\" value='"+val['marca']+"' required>"+
                "</div>"+
                "</td>"+
                "<td>"+
                "<div class=\"md-form\">"+
                  "<input type=\"text\" id=\"marca\" class=\"form-control\" value='"+val['carregador']+"' required>"+
                "</div>"+
                "</td>"+
                "<td>"+
                "<div class=\"md-form\">"+
                  "<input type=\"text\" id=\"marca\" class=\"form-control\" value='"+val['tela']+"' required>"+
                "</div>"+
                "</td>"+
                "<td>"+
                "<div class=\"md-form\">"+
                  "<input type=\"text\" id=\"marca\" class=\"form-control\" value='"+val['tamanho']+"' required>"+
                "</div>"+
                "</td>"+
                "<td>"+
                "<div class=\"md-form\">"+
                  "<a id=\"btnSalvar\" colspan=\"2\" style=\"text-align: right;\"data-id='"+val['id']+"'>"+
                    "<i style=\"font-size:25px;\" class=\"fas fa-edit\"></i>"+
                  "</a>"+
                "</div>"+
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
/*
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
*/
</script>