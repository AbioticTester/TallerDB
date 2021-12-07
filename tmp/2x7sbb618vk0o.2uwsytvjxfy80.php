<!-- Nueva orden -->
<div class="modal fade" id="nuevaordenModal" tabindex="-1" aria-labelledby="nuevaordenModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">

        <!-- Buscador -->
        <div id="myBtnContainer"  class="btn-group" role="group">
          <button class="btn active" type="button" onclick="filterSelection('all')"> Ver todos</button>
          <?php foreach (($categorias?:[]) as $ikeycat=>$cat): ?>
            <button class="btn" type="button" onclick="filterSelection('<?= ($cat['subCategoria']) ?>')"> <?= ($cat['subCategoria']) ?></button>
          <?php endforeach; ?>
        </div>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="row" id="itemsMenu">
          <div class="col-12">
            <!-- Carrito -->
            <div class="collapse" id="carritoShow">
              <div class="card card-body table-responsive">
               <h3>Articulos seleccionados</h3>
               <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Cant</th>
                    <th scope="col">Articulo</th>
                    <th scope="col">Precio</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Corona Extra 355 ml</td>
                    <td>$15.00</td>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-12">
            <!-- Tarjetas de articulos -->
            <div class="mt-3 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-4 text-center">
              <?php foreach (($categorias?:[]) as $ikeycat=>$cat): ?>
                <div class="filterDiv <?= ($cat['subCategoria']) ?>">
                 <h3><?= ($cat['subCategoria']) ?></h3>
                 <hr>
               </div>
               <?php foreach (($inventario?:[]) as $ikey=>$item): ?>
                <?php if ($item['subCategoria']==$cat['subCategoria']): ?>
                  <div class="filterDiv <?= ($cat['subCategoria']) ?>">
                   <div class="col ">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <?php if ($item['imagen']==null): ?>
                            
                              <img src="<?= ($BASE) ?>/assets/img/Menu/no disponible.png" alt="..." class="card-img-top">
                            
                            <?php else: ?>
                              <img src="<?= ($BASE) ?>/assets/img/Catálogo_de_Bebidas/<?= ($item['imagen']) ?>" alt="..." class="card-img-top">
                            
                          <?php endif; ?>
                        </div>
                        <div class="col-md-8">
                          <div class="card-body text-center">
                            <h5 class="card-title"><?= ($item['tipoProducto']) ?></h5>
                            <p class="card-text"><?= ($item['descripcion']) ?></p>
                            <div class="input-group mb-3">
                              <input type="number" class="form-control" placeholder="ingrese cantidad" value="0" min="0" max="<?= ($item['cantidadProducto']) ?>">
                              <button class="btn btn-success" type="button" id="button-addon2">
                                <i class="fas fa-cart-plus"></i>
                              </button>
                            </div>

                            <p class="card-text"><?= ($item['cantidadProducto']) ?> máximo.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endforeach; ?>

        </div>
        <!-- Tarjetas de articulos -->
      </div>


    </div>

  </div>
  <div class="modal-footer text-center">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-success"  data-bs-toggle="offcanvas" href="#ordengenerada" role="button" aria-controls="ordengenerada" >
      <i class="fas fa-cash-register"></i> Verificar compra
    </button>
  </div>
</div>
</div>
</div>


<!-- Orden generada-->

<div class="offcanvas offcanvas-end" tabindex="-1" id="ordengenerada" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Confirmación de compra</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body ">
    <div class="container table-responsive">
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="Identificador">
        <label for="floatingInput">Identificador de mesa</label>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Cant</th>
            <th scope="col">Articulo</th>
            <th scope="col">Precio</th>
            <th scope="col"><b>Total</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Corona Extra 355 ml</td>
            <td>$15.00</td>
            <td><b>$15.00</b></td>
          </tr>
          <tr>
            <th colspan="2"></th>
            <td scope="row">IVA 8%</td>
            <td><b>$1.20</b></td>
          </tr>
          <tr>
            <th colspan="2"></th>
            <td >Total</td>
            <td><b>$16.20</b></td>
          </tr>
          <tr>
            <th colspan="2"></th>
            <td >Total Dollar</td>
            <td><b>$0.8</b></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="container">
      <h5>Pagar</h5>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">$</span>
        <input type="text" class="form-control" placeholder="Monto recibido por el cliente" >
      </div>
    </div>  
    <div class="modal-footer text-center">

      <button class="btn btn-danger">Cancelar pedido</button>
      <button class="btn btn-success">Realizar pedido</button>
    </div>
  </div>
</div>




<!--Ordenes pendientes-->

<div class="offcanvas  offcanvas-end" tabindex="-1" id="pendientesModal" aria-labelledby="pendientesModalLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="pendientesModalLabel">Ordenes pendientes</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

    <div class="row row-cols-1">
      <div class="col">
        <a href="<?= ($BASE) ?>/mesero/orden/mesa5" class="" style="text-decoration: none;">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Mesa 3  <span class="badge bg-warning rounded-pill">Pendiente</span></h5>
              <h6 class="card-subtitle mb-2 text-muted">Folio</h6>
              <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Corona Extra 355 ml  <span class="badge bg-primary rounded-pill">1</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Corona Extra 355 ml  <span class="badge bg-primary rounded-pill">7</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Corona Extra 355 ml  <span class="badge bg-primary rounded-pill">12</span>
                </li>
              </ol>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Mesa 5 <span class="badge  rounded-pill bg-success">Finalizado</span></h5>
            <h6 class="card-subtitle mb-2 text-muted">Folio</h6>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Corona Extra 355 ml  <span class="badge bg-primary rounded-pill">1</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Corona Extra 355 ml  <span class="badge bg-primary rounded-pill">7</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Corona Extra 355 ml  <span class="badge bg-primary rounded-pill">12</span>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    
  </div>
</div>

<!-- Ganancias-->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="gananciasModas" aria-labelledby="gananciasModasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="gananciasModasLabel">Ventas</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="row">
      <div class="col-3">
        <h3>
          Ventas realizadas  
        </h3>
      </div>
      <div class="col-3 text-right">
        <h1 class="text-primary">
          3
        </h1>
      </div>
      <div class="col-3">
        <h3>
          Monto vendido
        </h3>
      </div>
      <div class="col-3 text-right">
        <h1 class="text-success">
          15.00
        </h1>
      </div>
    </div>



  </div>
</div>