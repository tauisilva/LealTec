<!-- Modal: LisCliente -->
<div class="modal fade" id="modalLisCliente" tabindex="-1" role="dialog" aria-labelledby="modalLisClienteLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-fluid" role="document">
    <div class="modal-content" style="border-radius: 20px;">
      <!--Header-->
      <div class="modal-header" style="background-image: linear-gradient(to right, #505285 0%, #585e92 12%, #65689f 25%, #7474b0 37%, #7e7ebb 50%, #8389c7 62%, #9795d4 75%, #a2a1dc 87%, #b5aee4 100%); border-top-right-radius:  20px; border-top-left-radius: 20px;">
        <h4 class="modal-title white-text" id="myModalLisCliente">LisCliente</h4>
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
        <button type="button"class="btn btn-outline-secondary waves-effect" style="border-radius: 20px;" data-dismiss="modal" data-target="#modalServicos">voltar</button>
        <button class="btn btn-outline-primary waves-effect" style="border-radius: 20px;">Checkout</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: LisCliente -->