<!-- Página de eventos -->
<form id="eventosform" action="" method="POST">
  <div class="modal fade" id="EventosPage" tabindex="-1" aria-labelledby="EventosPageLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="EventosPageLabel">Seleccionar evento</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <select class="form-select" aria-label="Default select example" name="evento" id="evento">
            <option selected>Seleccione el evento para ver su inventario</option>
            <option value="2021EVTO001">2021EVTO001</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="inventario">
            <button type="submit" class="btn btn-primary">Abrir inventario</button></a>
          </div>
        </div>
      </div>
    </div>
  </form>