<?php @define("AUTENTICACAO", "login/autenticacao.php");?>
<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="css/mdb.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

<!-- Modal Tecnico  --> 
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLogin"
  aria-hidden="true" >
  <div class="modal-dialog form-dark modal-side modal-bottom-right" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/admin.jpg'); border-radius: 10px;">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4" style="border-radius: 10px;">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLogin"><strong>Acessar</strong> <a class="green-text font-weight-bold"><strong> Sistema</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <form method="POST" action="<?= AUTENTICACAO ?>">
            <div class="md-form mb-5">
              <input type="email" name="email" id="email" class="form-control validate white-text">
              <label data-error="wrong" data-success="right" for="email">E-mail</label>
            </div>

            <div class="md-form pb-3">
              <input type="password" id="senha" name="senha" class="form-control validate white-text">
              <label data-error="wrong" data-success="right" for="senha">Senha</label>
            </div>

            <!--Grid row-->
            <div class="row d-flex align-items-center mb-4">

              <!--Grid column-->
              <div class="text-center mb-3 col-md-12" >
                <a ></a>
                <button type="submit" id="btnLogar" class=" btn btn-success btn-block z-depth-1" style="border-radius: 40px;">Logar</button>
              </div>
            </form>
            
            <!--div id="carregarSenha" style="display: none;">
              <img src="img/barrinha.gif" height="2px" width="100%" style="border-radius: 6px;">
            </div-->

          </div>
          <!--Grid row-->
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->

<!--script type="text/javascript">

  var email = $("input[id='email']").val();
  var senha = $("input[id='senha']").val();

  $("#btnLogar").click(function(){

    $.ajax({
      
      url: "<?= AUTENTICACAO ?>",
      type: "POST",
      dataType: "json",

      data:{
        email = email,
        senha = senha
        
      }
    }).done(function(val){
      $("#carregarSenha").hide();
      if(val["error"]){
        alert(val["message"]);
      }
      else{
        $("#carregarSenha").hide();
        location.href("funcionario/admin/index.php");
      }
      
    }).fail(function(x, status, val){
      alert(val);
    });
  });

</script-->

<script type="text/javascript" src="funcionario/admin/js/jquery-3.4.0.min.js"></script>
<script type="text/javascript" src="funcionario/admin/js/popper.min.js"></script>
<script type="text/javascript" src="funcionario/admin/js/bootstrap.js"></script>
<script type="text/javascript" src="funcionario/admin/js/mdb.js"></script>