<div class="offcanvas offcanvas-end" tabindex="-1" id="addUser" aria-labelledby="addUserLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="addUserLabel">Nuevo Empleado</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
   <form action="dashboard/add-user" method="POST" class="needs-validation" novalidate>
    <!-- Datos del empleado-->
    <h5>Datos del empleado</h5>
    <hr>
    <section>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombre(s)" required>
        <label for="nombres">Nombre (s)</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" placeholder="Apellido paterno" required>
        <label for="apellidoPaterno">Apellido paterno</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" placeholder="Apellido materno">
        <label for="apellidoMaterno">Apellido materno</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="curp" name="curp" placeholder="CURP" required>
        <label for="curp">CURP</label>
      </div>

      <div class="form-floating mb-3">
        <select class="form-select" id="sexo" name="sexo" aria-label="sexo" required>
          <option selected>Seleccione opción</option>
          <option value="Femenino">Femenino</option>
          <option value="Masculino">Masculino</option>
        </select>
        <label for="estadoCivil">Sexo</label>
      </div>

      <div class="form-floating mb-3">
        <select class="form-select" id="estadoCivil" name="estadoCivil" aria-label="estadoCivil" required>
          <option selected>Seleccione opción</option>
          <option value="Soltero/a">Soltero/a</option>
          <option value="Casado/a">Casado/a</option>
          <option value="Divorsiado/a">Divorsiado/a</option>
          <option value="Viudo/a">Viudo/a</option>
        </select>
        <label for="estadoCivil">Estado civil</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="nss" name="nss" placeholder="NSS" required>
        <label for="nss">Número de seguridad social</label>
      </div>

      <div class="form-floating mb-3">
        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de nacimiento" max="2021/10/22">
        <label for="fechaNacimiento">Fecha de nacimiento</label>
      </div>

      <div class="form-floating mb-3" required>
        <input type="text" class="form-control" id="lugarNacimiento" name="lugarNacimiento" placeholder="Lugar de nacimiento" >
        <label for="lugarNacimiento">Lugar de nacimiento</label>
      </div>  
    </section>

    <h5>Datos de contacto</h5>
    <hr>
    <!-- Datos de contacto-->
    <section class="mt-3">
      <div class="form-floating mb-3">
        <input type="number" min="1000000000" max="9999999999" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
        <label for="telefono">Teléfono</label>
      </div>

      <div class="form-floating mb-3">
        <input type="number" min="1000000000" max="9999999999" class="form-control" id="celular" name="celular" placeholder="Teléfono" required>
        <label for="celular">Celular</label>
      </div>

      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
        <label for="correo">Correo</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>
        <label for="direccion">Dirección</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" required>
        <label for="ciudad">Ciudad</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required>
        <label for="estado">Estado</label>
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="cp" name="cp" placeholder="Código Postal" required>
        <label for="cp">Código postal</label>
      </div>

      <div class="form-floating mb-3">
        <input type="number" class="form-control" id="contactoEmergencia" name="contactoEmergencia" placeholder="Teléfono" required>
        <label for="contactoEmergencia">Contacto de emergencia</label>
      </div>
    </section>

     <!--
      Opcionales
    -->
    <div class="accordion" id="accordionExample">

      <!-- Documentación-->
      <div class="accordion-item mb-3">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Documentación
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="input-group mb-3">
              <label class="input-group-text" for="fotoEmpleado">Foto empleado</label>
              <input type="file" class="form-control" id="fotoEmpleado" name="fotoEmpleado">
            </div>

            <div class="input-group mb-3">
              <label class="input-group-text" for="credencialFrontal">Credencial frontal</label>
              <input type="file" class="form-control" id="credencialFrontal" name="credencialFrontal">
            </div>

            <div class="input-group mb-3">
              <label class="input-group-text" for="credencialTrasera">Credencial trasera</label>
              <input type="file" class="form-control" id="credencialTrasera" name="credencialTrasera">
            </div>

            <div class="input-group mb-3">
              <label class="input-group-text" for="comprobanteDomicilio">Foto Comprobante de domicilio</label>
              <input type="file" class="form-control" id="comprobanteDomicilio" name="comprobanteDomicilio">
            </div>

          </div>
        </div>
      </div>

      <!-- Datos fiscales-->
      <div class="accordion-item mb-3">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Datos bancarios
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="dependenciaBancaria" name="dependenciaBancaria" placeholder="Entidad financiera" >
              <label for="dependenciaBancaria">Entidad financiera</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" >
              <label for="rfc">RFC</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="cuentaClabe" name="cuentaClabe" placeholder="Clabe interbancaria" >
              <label for="cuentaClabe">Clabe interbancaria</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="numeroTarjeta" name="numeroTarjeta" placeholder="Número de tarjeta" >
              <label for="numeroTarjeta">Número de tarjeta</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <div class="d-grid gap-2">
          <button class="btn btn-danger btn-block" type="button" data-bs-dismiss="offcanvas" aria-label="Close">Cancelar</button>
        </div>
      </div>
      <div class="col-6">
        <div class="d-grid gap-2">
          <button class="btn btn-success btn-block" type="submit"><i class="fas fa-user-plus"></i> Agregar</button>
        </div>
      </div>
    </div>

  </form>
</div>
</div>
</div>