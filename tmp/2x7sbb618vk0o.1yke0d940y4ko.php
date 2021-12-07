<?php foreach (($patrocinadorEvento?:[]) as $item): ?>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="editEvento<?= ($item['idEvento']) ?>" aria-labelledby="addEventoLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="addEventoLabel">Editar evento: <?= ($item['lugarEvento']) ?></h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <form action="dashboard/update-events" method="POST">
         <div class="form-floating mb-3">
          <input type="text" class="form-control text-capitalize" id="idEvento" name="idEvento" placeholder="Lugar del evento" value="<?= ($item['idEvento']) ?>" required readonly>
          <label for="floatingInput">Identificador del evento</label>
        </div>
        <div class="form-floating mb-3">
          <select class="form-select" id="patrocinadorEvento" name="patrocinadorEvento" aria-label="patrocinador" required>
            <option value="<?= ($item['idPatrocinador']) ?>" selected > <?= ($item['nombrePatrocinador']) ?> | <?= ($item['marcaComercial']) ?> </option>
            <?php foreach (($patrocinador?:[]) as $patrocinio): ?>
              <?php if ($item['idPatrocinador']!=$patrocinio['idPatrocinador']): ?>
                <option value="<?= ($patrocinio['idPatrocinador']) ?>" >
                  <?= ($patrocinio['nombrePatrocinador']) ?> | <?= ($patrocinio['marcaComercial']) ?> 
                </option>
              <?php endif; ?>
            <?php endforeach; ?>

          </select>
          <label for="floatingSelect">Patrocinador</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control text-capitalize" id="lugarEvento" name="lugarEvento" placeholder="Lugar del evento" value="<?= ($item['lugarEvento']) ?>" required>
          <label for="floatingInput">Lugar del evento</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control text-capitalize" id="ciudadEvento" name="ciudadEvento" placeholder="Ciudad del evento" value="<?= ($item['ciudadEvento']) ?>" required>
          <label for="floatingInput">Ciudad del evento</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control text-capitalize" id="estadoEvento" name="estadoEvento" placeholder="Estado" value="<?= ($item['estadoEvento']) ?>">
          <label for="floatingInput">Estado</label>
        </div>
        <div class="form-floating mb-3">
          <select class="form-select" id="estatusEvento" name="estatusEvento" aria-label="Estatus del evento">
            <option selected value="<?= ($item['estatusEvento']) ?>"><?= ($item['estatusEvento']) ?></option>
            <option value="ACTIVO">Activo</option>
            <option value="PENDIENTE">Pendiente</option>
            <option value="EN PREPARACION">En preparación</option>
            <option value="INACTIVO">Inactivo</option>
          </select>
          <label for="floatingSelect">Estatus del evento</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="fechaEvento" name="fechaEvento" placeholder="<?= ($item['fechaEvento']) ?> " value="<?= ($item['fechaEvento']) ?>">
          <label for="floatingInput">Fecha del evento</label>
        </div>
        <div class="form-floating mb-3">
          <select class="form-select" id="encargadoEvento" name="encargadoEvento" aria-label="encargadoEvento" required>
            <option selected value="<?= ($item['encargadoEvento']) ?>"><?= ($item['encargadoEvento']) ?></option>
            <?php foreach (($encargadoEvento?:[]) as $empleado): ?>
              <?php if ($item['encargadoEvento']!=$empleado['usuario']): ?>
                <option value="<?= ($empleado['usuario']) ?>" >
                  <?= ($empleado['usuario']) ?> 
                </option>
              <?php endif; ?>
            <?php endforeach; ?>

          </select>
          <label for="floatingSelect">Encargado del evento</label>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-primary" type="submit"><i class="fas fa-edit"></i> Modificar</button>
        </div>
      </form>
    </div>
  </div>
<?php endforeach; ?>