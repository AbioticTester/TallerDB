<?php foreach (($inventario?:[]) as $ikey=>$item): ?>
 <div class="offcanvas offcanvas-end" tabindex="-1" id="update<?= ($item['codigoSku']) ?>" aria-labelledby="offcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasLabel">Modificar <b><?= ($item['codigoSku']) ?> </b><?= ($item['tipoProducto']) ?></h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form action="inventario/update-item" method="POST">
      <div class="mb-3">
        <label for="SKU" class="form-label">SKU</label>
        <input type="text" class="form-control-plaintext" id="sku" name="sku" placeholder="<?= ($item['codigoSku']) ?>" value="<?= ($item['codigoSku']) ?>" readonly="">
      </div>

      <div class="mb-3">
        <select class="form-select" aria-label="Categoria" id="categoria" name="categoria" required="">
          <option selected value="<?= ($item['categoria']) ?>"><?= ($item['categoria']) ?></option>
          <option value="Platillo">Platillo / Comida</option>
          <option value="Bebida">Bebida</option>
          <option value="Botana">Botana</option>
          <option value="Otro">Otro</option>
        </select>
      </div>

      <div class="mb-3">
        <select class="form-select" aria-label="SubCategoria" name="subCategoria" id="subCategoria">
          <option selected value="<?= ($item['subCategoria']) ?>"><?= ($item['subCategoria']) ?></option>
          <option value="Vino">Vino</option>
          <option value="Cerveza">Cerveza</option>
          <option value="Licor">Licor</option>
          <option value="Bebida preparada">Bebida preparada</option>
          <option value="Bebida sin alcohol">Bebida sin alcohol</option>
          <option value="Otro">Otro</option>
          <option value="">No aplica</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="SKU" class="form-label">Marca</label>
        <input type="text" class="form-control" id="tipoProducto" name="tipoProducto" value="<?= ($item['tipoProducto']) ?>"  placeholder="Marca">
      </div>

      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="<?= ($item['descripcion']) ?>">
      </div>

      <div class="mb-3">
        <label for="cantidadProducto" class="form-label">STOCK</label>
        <input type="number" class="form-control" id="cantidadProducto" name="cantidadProducto" placeholder="Cantidad" value="<?= ($item['cantidadProducto']) ?>" min="0">
      </div>

      <div class="btn-group mb-3 col-12" role="group" aria-label="Add item">
        <a class="btn btn-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-window-close"></i> Cancelar</a>
        <button class="btn btn-success" type="submit"><i class="fas fa-clipboard-check"></i> Actualizar producto</button>
      </div>

    </form>
  </div>
</div>
<?php endforeach; ?>

