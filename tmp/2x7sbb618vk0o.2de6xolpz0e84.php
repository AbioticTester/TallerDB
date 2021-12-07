<?php foreach (($patrocinadorEvento?:[]) as $item): ?>
  <form action="dashboard/remove-events" method="POST">
    <!-- Modal -->
    <div class="modal fade" id="removeEvento<?= ($item['idEvento']) ?>" tabindex="-1" aria-labelledby="removeEvento<?= ($item['idEvento']) ?>Label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="removeEvento<?= ($item['idEvento']) ?>Label">Borrar Evento</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Desea eliminar el evento:
            <div class="form-floating mb-3 mt-3">
              <input type="text" class="form-control text-capitalize" id="idEvento" name="idEvento" placeholder="Lugar del evento" value="<?= ($item['idEvento']) ?>" readonly>
              <label for="floatingInput">Identificador del evento</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control text-capitalize" placeholder="Lugar del evento" value="<?= ($item['nombrePatrocinador']) ?> | <?= ($item['marcaComercial']) ?>"  readonly>
              <label for="floatingInput">Patrocinador</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control text-capitalize"  placeholder="Lugar del evento" value="<?= ($item['lugarEvento']) ?>" readonly>
              <label for="floatingInput">Lugar del evento</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control text-capitalize" placeholder="Ciudad del evento" value="<?= ($item['ciudadEvento']) ?>" readonly>
              <label for="floatingInput">Ciudad del evento</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control text-capitalize"placeholder="Estado" value="<?= ($item['estadoEvento']) ?>" readonly>
              <label for="floatingInput">Estado</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" placeholder="<?= ($item['fechaEvento']) ?> " value="<?= ($item['fechaEvento']) ?>" readonly> 
              <label for="floatingInput">Fecha del evento</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<?php endforeach; ?>