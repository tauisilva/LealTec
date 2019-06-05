<!-- Modal mobiles -->
<div class="modal fade" id="modalOutros" tabindex="-1" role="dialog" aria-labelledby="modalOutrosLabel"
  aria-hidden="true" >
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('img/mispeakers.jpg'); border-radius: 10px;">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4" style="border-radius: 10px;">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="modalOutrosLabel"><a
              class="white-text font-weight-bold"><strong> Outros</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">
          <!--Body-->
          <div class="row d-flex align-items-center mb-4">
            <div class="text-center mb-3 col-md-12" >
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1"  data-toggle="modal" data-target="#modaletc"style="border-radius: 10px;">Etc</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button"class="btn btn-outline-danger waves-effect" style="border-radius: 10px;" data-dismiss="modal">Close</button>
        <button class="btn btn-outline-success waves-effect z-depth-1" style="border-radius: 10px;" data-toggle="modal" data-target="#modalOrdem" data-dismiss="modal">Novo Serviço</button>
      </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal mobiles-->
<?php include("ordem.php");?>
<div class="modal fade" id="modaletc" tabindex="-1" role="dialog" aria-labelledby="modaletcLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-fluid" role="document">
    <div class="modal-content" style="border-radius: 10px;">
      <!--Header-->
      <div class="modal-header" style="background-image: linear-gradient(to right, #505285 0%, #585e92 12%, #65689f 25%, #7474b0 37%, #7e7ebb 50%, #8389c7 62%, #9795d4 75%, #a2a1dc 87%, #b5aee4 100%); border-top-right-radius:  10px; border-top-left-radius: 10px;">
        <h4 class="modal-title white-text" id="myModaletc">etc</h4>
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
        <button type="button"class="btn btn-outline-secondary waves-effect" style="border-radius: 10px;" data-dismiss="modal" data-target="#modalOutros">voltar</button>
        <button class="btn btn-outline-primary waves-effect" style="border-radius: 10px;">Checkout</button>
      </div>
    </div>
  </div>
</div>