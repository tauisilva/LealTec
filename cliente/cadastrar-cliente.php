<?php
	session_start();
	require_once("../conexao.class.php");

	define("PROC", "cliente/acoesCliente.php");

?>
<div class="modal fade" id="modalCadastrar" tabindex="-1" role="dialog" aria-labelledby="myModalCadastrar"
  aria-hidden="true" action="index.php?page=sal-cliente">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/cadcliente.jpg'); border-radius: 10px;">
      <div class="text-white rgba-stylish-strong px-3 z-depth-1" style="border-radius: 10px;">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalCadastrar"><a
              class="green-text font-weight-bold"><strong>Cadastro</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <div class="md-form mb-5">
            <input type="text" id="nome_cliente" class="form-control white-text">
            <label data-error="wrong" data-success="right" for="nome_cliente">Nome</label>
          </div>
          <div class="md-form mb-5">
            <input type="text" id="numero" class="form-control white-text" onkeypress="fMasc(this, mTel);" maxlength="14">
            <label data-error="wrong" data-success="right" for="numero">Telefone</label>
          </div>
          <div class="md-form mb-5">
            <input type="text" id="endereco" class="form-control white-text">
            <label data-error="wrong" data-success="right" for="endereco">Endereço</label>
          </div>
          <div class="md-form pb-3">
            <input type="text" id="cpf" class="form-control validate white-text" maxlength="14" onkeypress="fMasc(this, mCPF);">
            <label data-error="wrong" data-success="right" for="cpf"maxlength="14">CPF</label>
          </div>
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">
            <!--Grid column-->
            <div class="text-center mb-3 col-md-12" >
              <button type="button" id="btnCadastrar" class="btn btn-outline-success btn-block z-depth-1" style="border-radius: 40px;" data-toggle="modal">Cadastrar</button>
            </div>
            <!--Grid column-->
          </div>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

<script type="text/javascript">

	$("#modalCadastrar").on("hide.bs.modal", function(e){
		<?php $_SESSION["modal"] = "#cliente"; ?>
		location.reload();
	});

	$("#btnCadastrar").click(function(){

		var nomeCliente = $("#nome_cliente").val();

		$.ajax({

		url: "<?= PROC ?>",
		type: "POST",

		data:{

			acao: "Inserir",
			nome: nomeCliente,
			telefone: $("#numero").val(),
			endereco: $("#endereco").val(),
			cpf: $("#cpf").val()
		}
		}).done(function(val){
			if(val["error"]){
				alert(val["message"] + nomeCliente + ". Contate os desevolvedores do sistema!");
			}
			else{
				alert("Cliente "+nomeCliente+", cadastrado com sucesso!");
				$("#nome_cliente").val(null);
				$("#numero").val(null);
				$("#endereco").val(null);
				$("#cpf").val(null);
			}
		}).fail(function(x, status, val){
			alert(val);
		});
	});
	
</script>