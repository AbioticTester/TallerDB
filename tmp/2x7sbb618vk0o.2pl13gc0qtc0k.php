<?php foreach (($inventario?:[]) as $ikey=>$item): ?>
	<form action="inventario/remove-item" method="POST">
		<div class="offcanvas offcanvas-bottom " tabindex="-1" id="eliminar<?= ($item['codigoSku']) ?>" aria-labelledby="offcanvasTopLabel">
			<div class="offcanvas-header">
				<h5 id="offcanvasTopLabel">Eliminar artículo</h5>
				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<div class="container">
					<h5>
						Desea eliminar <?= ($item['tipoProducto']) ?> de los registros?
					</h5>
					<div class="row">
						
						<div class="col-2">
							SKU
						</div>
						<div class="col-2">
							<input class="form-control-plaintext" type="text" value="<?= ($item['codigoSku']) ?>" name="sku" id="sku" aria-label="readonly input example" readonly>
						</div>
					</div>

				</div>
				<div class="btn-group mb-3 col-12 mt-3" role="group" aria-label="Add item">
					<a class="btn btn-secondary" data-bs-dismiss="offcanvas" aria-label="Close"> Cancelar</a>
					<button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i> Eliminar </button>
				</div>
			</div>
		</div>
	</form>
	
<?php endforeach; ?>
