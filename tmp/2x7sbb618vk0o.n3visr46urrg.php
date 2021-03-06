
<!-- Add rent -->
<form action="user/add-rent" method="POST">
  <div class="modal fade" id="rentcar" tabindex="-1" aria-labelledby="rentcarLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="rentcarLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
             <h3>Datos del cliente</h3>
             <hr>
             <div class="mb-3">
              <label for="rfcCliente" class="form-label">RFC</label>
              <input type="text" class="form-control" id="rfcCliente" name="rfcCliente" placeholder="RFC" required>
            </div>
            <div class="mb-3">
              <label for="nombreCliente" class="form-label">Nombre(s)</label>
              <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Nombre" required>
            </div>
            <div class="mb-3">
              <label for="paternoCliente" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control" id="paternoCliente" name="paternoCliente" placeholder="Apellido paterno" required>
            </div>
            <div class="mb-3">
              <label for="maternoCliente" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control" id="maternoCliente" name="maternoCliente" placeholder="Apellido materno" required>
            </div>
            <div class="mb-3">
              <label for="correoCliente" class="form-label">Correo</label>
              <input type="mail" class="form-control" id="correoCliente" name="correoCliente" placeholder="Correo" required>
            </div>
            <div class="mb-3">
              <label for="telefonoCliente" class="form-label">Teléfono de contácto</label>
              <input type="number" class="form-control" id="telefonoCliente" name="telefonoCliente" placeholder="Teléfono" required>
            </div>
          </div>
          <div class="col-md-6">

            <h3>Datos del vehiculo</h3>
            <hr>
            <div class="mb-3">
              <label for="matriculaAuto" class="form-label">Vehiculo</label>
              <select class="form-select" aria-label="Default select example" id="matriculaAuto" name="matriculaAuto" required>
                <option selected>Seleccione Vehiculo</option>
                <?php foreach (($automovil?:[]) as $item): ?>
                  <?php if ($item['disponibleAuto']==1): ?>
                    <option value="<?= ($item['matriculaAuto']) ?>"> <?= ($item['marcaAuto']) ?> <?= ($item['modeloAuto']) ?> | Puertas: <?= ($item['puertasAuto']) ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <h3>Datos de la renta</h3>
            <hr>
            <div class="mb-3">
              <label for="diasRenta" class="form-label">Días de renta</label>
              <input type="number" class="form-control" id="diasRenta" name="diasRenta" placeholder="Total de días a rentar" min="1" required>
            </div>
            <h3>Retorno del vehiculo</h3>
            <hr>
            <div class="mb-3">
              <label for="idOficina" class="form-label">Oficina donde devuelve</label>
              <select class="form-select" aria-label="Default select example" id="idOficina" name="idOficina" required>
                <option selected>Seleccione Oficina</option>
                <?php foreach (($oficinas?:[]) as $item): ?>
                  <option value="<?= ($item['idOficina']) ?>"> <?= ($item['ciudadOficina']) ?>, <?= ($item['calleOficina']) ?>-<?= ($item['noExteriorOficina']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-success" type="submit">Generar Renta</button>
      </div>
    </div>
  </div>
</div>
</form>

<?php foreach (($renta?:[]) as $item): ?>

  <!-- Remove -->
  <form action="user/return-car" method="POST">
    <div class="modal fade" id="returnCar<?= ($item['folioRenta']) ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="returnCar<?= ($item['folioRenta']) ?>Label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Retorno de vehiculo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              Confirme el regreso del vehiculo
            </p>
            <label for=""> Folio:</label>
            <input type="text" class="form-control-plaintext" readonly="" id="folioRenta<?= ($item['folioRenta']) ?>" name="folioRenta" value="<?= ($item['folioRenta']) ?>">
            Matrícula  
            <input type="text" class="form-control-plaintext" readonly="" id="folioRenta<?= ($item['matriculaAuto']) ?>" name="matriculaAuto" value="<?= ($item['matriculaAuto']) ?>">  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger"><i class="fas fa-undo"></i> Regresar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  
<?php endforeach; ?>

<?php foreach (($vendedor?:[]) as $item): ?>
  <!-- Modal -->
  <div class="modal fade" id="modalVendedor<?= ($item['rfcVendedor']) ?>" tabindex="-1" aria-labelledby="modalVendedor<?= ($item['rfcVendedor']) ?>Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalVendedor<?= ($item['rfcVendedor']) ?>Label">Vendedor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control-plaintext" value=" <?= ($item['nombreVendedor']) ?> <?= ($item['paternoVendedor']) ?> <?= ($item['maternoVendedor']) ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Correo:</label>
            <input type="text" class="form-control-plaintext" value="<?= ($item['correoVendedor']) ?>">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Telefono:</label>
            <input class="form-control-plaintext" value="<?= ($item['telefonoVendedor']) ?>"></input>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php foreach (($renta?:[]) as $item): ?>
  <!-- Modal -->
  <div class="modal fade" id="modalRenta<?= ($item['folioRenta']) ?>" tabindex="-1" aria-labelledby="modalRenta<?= ($item['folioRenta']) ?>Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRenta<?= ($item['folioRenta']) ?>Label">Vendedor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Vendedor:</label>
            <input type="text" class="form-control-plaintext" value=" <?= ($item['rfcVendedor']) ?>">          
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Matrícula del vehiculo:</label>
            <input type="text" class="form-control-plaintext" value="<?= ($item['matriculaAuto']) ?>">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Cliente:</label>
            <input class="form-control-plaintext" value="<?= ($item['rfcCliente']) ?>"></input>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php foreach (($cliente?:[]) as $item): ?>
  <!-- Modal -->
  <div class="modal fade" id="modalCliente<?= ($item['rfcCliente']) ?>" tabindex="-1" aria-labelledby="modalCliente<?= ($item['rfcCliente']) ?>Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCliente<?= ($item['rfcCliente']) ?>Label">Cliente</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control-plaintext" value=" <?= ($item['nombreCliente']) ?> <?= ($item['paternoCliente']) ?> <?= ($item['maternoCliente']) ?>">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Correo:</label>
            <input type="text" class="form-control-plaintext" value="<?= ($item['correoCliente']) ?>">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Telefono:</label>
            <input class="form-control-plaintext" value="<?= ($item['telefonoCliente']) ?>"></input>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>