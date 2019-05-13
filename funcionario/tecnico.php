  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="img/favicon-32x32.png" />
  <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
<!-- Modal Tecnico  -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLogin" aria-hidden="true" >
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content form-elegant" style="border-radius: 20px;" >
        <!--Header-->
        <div class="modal-header text-center"style="background-image: linear-gradient(to right, #505285 0%, #585e92 12%, #65689f 25%, #7474b0 37%, #7e7ebb 50%, #8389c7 62%, #9795d4 75%, #a2a1dc 87%, #b5aee4 100%); border-top-right-radius:  20px; border-top-left-radius: 20px;">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLogin"><strong>Login</strong></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body mx-4">
          <!--Body-->
          <div class="md-form mb-5" style="border-radius: 20px;">
            <input type="email" id="Form-email1" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-email1">Email</label>
          </div>

          <div class="md-form pb-3">
            <input type="password" id="Form-pass1" class="form-control validate">
            <label data-error="wrong" data-success="right" for="Form-pass1">Senha</label>
            <p class="font-small blue-text d-flex justify-content-end">Esqueceu a   <a href="#" class="blue-text ml-1">
            senha?</a></p>
          </div>

          <div class="text-center mb-3">
            <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a white-text" style="border-radius: 20px">Login</button>
          </div>
          <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
          with:</p>
        </div>
        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#" class="blue-text ml-1">
          Sign Up</a></p>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>