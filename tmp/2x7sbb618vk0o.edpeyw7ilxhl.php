<div class="container">
	<div class="row ">
		<div class="col-md-12 mt-3">
			<div class="btn-group justify-content-end" role="group" aria-label="Basic example">
				<button type="button" class="btn btn-success" data-bs-toggle="offcanvas" href="#additem" role="button" aria-controls="additem">
					<i class="fas fa-plus-circle"></i> Agregar producto
				</button>
			</div>
		</div>
		<div class="col-12 table-responsive mt-4">

			<table id="inventarioTable" class="display" style="width:100%">
				<thead>
					<tr>
						<th>SKU</th>
						<th>Categoría</th>
						<th>Sub-categoría</th>
						<th>Marca</th>
						<th>Descripción</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
              		<?php foreach (($inventario?:[]) as $ikey=>$item): ?>

						<tr>
							<td><?= ($item['codigoSku']) ?></td>
							<td><?= ($item['categoria']) ?></td>
							<td><?= ($item['subCategoria']) ?></td>
							<td><?= ($item['tipoProducto']) ?></td>
							<td><?= ($item['descripcion']) ?></td>
							<td>
								<div class="btn-group" role="group" aria-label="Basic example">
									<button type="button" class="btn btn-danger" data-bs-toggle="offcanvas" data-bs-target="#eliminar<?= ($item['codigoSku']) ?>" aria-controls="eliminar<?= ($item['codigoSku']) ?>"> 
										<i class="fas fa-trash-alt"></i>
									</button>
									<button type="button" class="btn btn-info" data-bs-toggle="offcanvas" data-bs-target="#update<?= ($item['codigoSku']) ?>" aria-controls="update <?= ($item['codigoSku']) ?>">
										<i class="fas fa-edit"></i>
									</button>
								</div>
							</td>						
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th>SKU</th>
						<th>Categoría</th>
						<th>Sub-categoría</th>
						<th>Marca</th>
						<th>Descripción</th>
						<th>Acciones</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>