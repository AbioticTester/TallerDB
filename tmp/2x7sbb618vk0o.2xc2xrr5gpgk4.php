<div class="offcanvas offcanvas-end" tabindex="-1" id="additem" aria-labelledby="offcanvasLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasLabel">Nuevo producto</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form action="inventario/add-item" method="POST">
     
      <div class="mb-3">
        <label for="SKU" class="form-label">SKU</label>
        <input type="text" class="form-control" id="sku" name="sku" placeholder="SKU">
      </div>

      <div class="mb-3">
        <select class="form-select" aria-label="categoria" id="categoria" name="categoria" required="">
          <option selected>Categoría</option>
          <option value="Platillo">Platillo / Comida</option>
          <option value="Bebida">Bebida</option>
          <option value="Botana">Botana</option>
          <option value="Otro">Otro</option>
        </select>
      </div>

      <div class="mb-3">
        <select class="form-select" aria-label="subCategoria" name="subCategoria" id="subCategoria">
          <option selected>Sub-categoría</option>
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
        <label for="SKU" class="form-label">Producto</label>
        <input type="text" class="form-control" id="tipoProducto" name="tipoProducto" placeholder="Marca">
      </div>

      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
      </div>
       <div class="mb-3">
        <label for="imagen" class="form-label">Nombre de la Imagen</label>
        <input type="text" class="form-control" id="imagen" name="imagen" placeholder="Nombre de la imagen con extención">
      </div>

     
      <div class="btn-group mb-3 col-12" role="group" aria-label="Add item">
        <a class="btn btn-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-window-close"></i> Cancelar</a>
        <button class="btn btn-success" type="submit"><i class="fas fa-plus-circle"></i> Agregar producto</button>
      </div>

    </form>
  </div>
</div>