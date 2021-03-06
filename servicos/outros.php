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
              <button type="button" class="btn btn-outline-success btn-rounded waves-effect btn-block z-depth-1 btn-sm"  data-toggle="modal" data-target="#modaletc"style="border-radius: 30px;">Etc</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button"class="btn btn-outline-danger waves-effect btn-sm" style="border-radius: 40px;" data-dismiss="modal">Close</button>
        <button class="btn btn-outline-success waves-effect z-depth-1 btn-sm" style="border-radius: 40px;" data-toggle="modal" data-target="#modalOrdem" data-dismiss="modal" data-dismiss="modal">Novo Serviço</button>
      </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal mobiles-->
<div class="modal fade" id="modaletc" tabindex="-1" role="dialog" aria-labelledby="modaletcLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content" style="border-radius: 10px;">
      <!--Header-->
      <div class="modal-header" style="border-top-right-radius:  10px; border-top-left-radius: 10px;">
        <h4 class="modal-title" id="myModaletc">Etc</h4>
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
              <th></th>
              <th>Price</th>
              <th>Excluir</th>
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
        <button type="button"class="btn btn-outline-secondary waves-effect btn-sm" style="border-radius: 40px;" data-dismiss="modal" data-target="#modalOutros">voltar</button>
      </div>
    </div>
  </div>
</div>