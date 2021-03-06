<!-- Add-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="addUser" aria-labelledby="addUserLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="addUserLabel">Nuevo Usuario</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form action="home/add-user" method="POST">
     <h3>Datos del Vendedor</h3>
     <hr>
     <div class="mb-3">
      <label for="rfcVendedor" class="form-label">RFC</label>
      <input type="text" class="form-control" id="rfcVendedor" name="rfcVendedor" required placeholder="RFC">
    </div>
    <div class="mb-3">
      <label for="nombreCliente" class="form-label">Nombre(s)</label>
      <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" required placeholder="Nombre">
    </div>
    <div class="mb-3">
      <label for="paternoVendedor" class="form-label">Apellido Paterno</label>
      <input type="text" class="form-control" id="paternoVendedor" name="paternoVendedor" required placeholder="Apellido paterno">
    </div>
    <div class="mb-3">
      <label for="maternoVendedor" class="form-label">Apellido Materno</label>
      <input type="text" class="form-control" id="maternoVendedor" name="maternoVendedor" required placeholder="Apellido materno">
    </div>
    <div class="mb-3">
      <label for="correoVendedor" class="form-label">Correo</label>
      <input type="mail" class="form-control" id="correoVendedor" name="correoVendedor" required placeholder="Correo">
    </div>
    <div class="mb-3">
      <label for="telefonoVendedor" class="form-label">Teléfono de contácto</label>
      <input type="number" class="form-control" id="telefonoVendedor" name="telefonoVendedor" required placeholder="Teléfono">
    </div>
    <h3>Datos de sesión</h3>
    <hr>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nombre de usuario</label>
      <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required placeholder="Usuario">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
      <input type="text" class="form-control" id="contrasena" name="contrasena" required placeholder="Contraseña">
    </div>
    <div class="mb-3">
      <label for="exampleDataList" class="form-label">Rol</label>
      <select required  class="form-select required " aria-label="Default select required  example" id="rol" name="rol">
        <option select required ed>Seleccione Rol</option>
        <option value="1">Administrador</option>
        <option value="0">Vendedor</option>
      </select required >
    </div>
    <div class="mb-3">
      <label for="idOficina" class="form-label">Oficina donde labora</label>
      <select required  class="form-select required " aria-label="Default select required  example" id="idOficina" name="idOficina">
        <option select required ed>Seleccione Oficina</option>
        <?php foreach (($oficinas?:[]) as $item): ?>
          <option value="<?= ($item['idOficina']) ?>"> <?= ($item['ciudadOficina']) ?>, <?= ($item['calleOficina']) ?>-<?= ($item['noExteriorOficina']) ?></option>
        <?php endforeach; ?>
      </select required >
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-danger me-md-2" type="button" data-bs-dismiss="offcanvas" aria-label="Close">Cancelar</button>
      <button class="btn btn-success" type="submit">Registrar</button>
    </div>
  </form>
</div>
</div>

<?php foreach (($Usuarios?:[]) as $user): ?>

  <!-- Update -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="updateUser<?= ($user['idUsuario']) ?>" aria-labelledby="addUserLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="addUserLabel">Actualizar Usuario</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <form action="home/update-user" method="POST">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">id</label>
          <input type="text" class="form-control" readonly="" id="idUsuario<?= ($user['idUsuario']) ?>" name="idUsuario" value="<?= ($user['idUsuario']) ?>">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nombre de usuario</label>
          <input type="text" class="form-control" id="nombreUsuario<?= ($user['idUsuario']) ?>" name="nombreUsuario" required placeholder="Usuario" value="<?= ($user['nombreUsuario']) ?>">
        </div>
        <div class="mb-3">
          <label for="exampleDataList" class="form-label">Rol</label>
          <select required  class="form-select required " aria-label="Default select required  example" id="rol<?= ($user['idUsuario']) ?>" name="rol">
            <?php if ($user['rolUsuario']==1): ?>
              
                <option select required ed value="<?= ($user['rolUsuario']) ?>">
                  Administrador
                </option>
                <option value="0">Vendedor</option>
              
              <?php else: ?>
                <option select required ed value="<?= ($user['rolUsuario']) ?>">
                  Vendedor
                </option>
                <option value="1">Administrador</option>
              
            <?php endif; ?>
          </select required >
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-danger me-md-2" type="button" data-bs-dismiss="offcanvas" aria-label="Close">Cancelar</button>
          <button class="btn btn-primary" type="submit">Actualizar</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Remove -->
  <form action="home/remove-user" method="POST">
    <div class="modal fade" id="removeUser<?= ($user['idUsuario']) ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="removeUser<?= ($user['idUsuario']) ?>Label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Eliminar usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              Seguro que desea eliminar al usuario <b><?= ($user['nombreUsuario']) ?></b>, esta acción no se puede cancelar una vez iniciada.
            </p>
            <label for=""> id:</label>
            <input type="text" class="form-control-plaintext" readonly="" id="idUsuario<?= ($user['idUsuario']) ?>" name="idUsuario" value="<?= ($user['idUsuario']) ?>"> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger"><i class="fas fa-user-minus"></i> Eliminar usuario</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  
<?php endforeach; ?>