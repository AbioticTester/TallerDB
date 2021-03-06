<div class="container mt-3	">
	<div class="row">
		<div class="col-md-12 mb-3">
			<button class="btn btn-success"  type="button" data-bs-toggle="modal" data-bs-target="#rentcar" aria-controls="rentcarModal">
				<i class="fas fa-car"></i><sup><i class="fas fa-plus-circle"></i></sup>			
			</button>
		</div>
		<div class="col-md-12">
			<div class="card">

				<div class="card-body">

					<table id="Usuarios" class="display" style="width:100%">
						<thead>
							<tr>
								<th>Vendedor</th>
								<th>Folio</th>
								<th>RFC del cliente </th>
								<th>Vehiculo</th>
								<th>Oficina de devolución</th>
								<th>Fecha de renta</th>
								<th>Días de renta</th>
								<th>Importe pagado</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (($renta?:[]) as $item): ?>
								<tr>
									<td><a href="#modalVendedor<?= ($item['rfcVendedor']) ?>" data-bs-toggle="modal" data-bs-target="#modalVendedor<?= ($item['rfcVendedor']) ?>"><?= ($item['rfcVendedor']) ?></a></td>
									<td><a href="#modalRenta<?= ($item['folioRenta']) ?>" data-bs-toggle="modal" data-bs-target="#modalRenta<?= ($item['folioRenta']) ?>"><?= ($item['folioRenta']) ?></a></td>
									<td><a href="#modalCliente<?= ($item['rfcCliente']) ?>" data-bs-toggle="modal" data-bs-target="#modalCliente<?= ($item['rfcCliente']) ?>"><?= ($item['rfcCliente']) ?></a></td>
									<td><?= ($item['matriculaAuto']) ?></td>
									<td><?= ($item['idOficina']) ?></td>
									<td><?= ($item['fechaRenta']) ?></td>
									<td><?= ($item['diasRenta']) ?></td>
									<td>$<?= ($item['importeRenta']) ?></td>
									<td> 
										<?php if ($item['statusRenta']=='RENTADO'): ?>
											
												<button class="btn btn-danger" type="button"  data-bs-toggle="modal" data-bs-target="#returnCar<?= ($item['folioRenta']) ?>"> <i class="fas fa-undo"></i> Regresar</button>
											
											<?php else: ?>
												Finalizado
											
										<?php endif; ?>
										
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th>Vendedor</th>

								<th>Folio</th>
								<th>RFC del cliente </th>
								<th>Vehiculo</th>
								<th>Oficina de devolución</th>
								<th>Fecha de renta</th>
								<th>Días de renta</th>
								<th>Importa pagado</th>
								<th>Acciones</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>