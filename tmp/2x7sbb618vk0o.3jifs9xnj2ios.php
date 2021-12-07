<div class="container mt-3">
	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<div class="card-body">
					<?php if ($seguroccount>0): ?>
						
							<h5 class="card-title">Registro de nueva unidad</h5>
							<form action="admin/add-vehiculo" method="POST">
								<div class="mb-3">
									<label for="matriculaAuto" class="form-label">Matrícula </label>
									<input type="text" class="form-control" id="matriculaAuto" name="matriculaAuto" placeholder="Ingrese la matrícula">
								</div>
								<div class="mb-3">
									<label for="tipoAuto" class="form-label">Tipo de vehiculo</label>
									<input type="text" class="form-control" id="tipoAuto" name="tipoAuto" placeholder="Ingrese el tipo de vehiculo">
								</div>
								<div class="mb-3">
									<label for="marcaAuto" class="form-label">Marca</label>
									<input type="text" class="form-control" id="marcaAuto" name="marcaAuto" placeholder="Ingrese la marca">
								</div>
								<div class="mb-3">
									<label for="modeloAuto" class="form-label">Modelo</label>
									<input type="text" class="form-control" id="modeloAuto" name="modeloAuto" placeholder="Ingrese el modelo">
								</div>
								<div class="mb-3">
									<label for="puertasAuto" class="form-label">Total de puertas</label>
									<input type="number" class="form-control" id="puertasAuto" name="puertasAuto" placeholder="Ingrese el total de puertas">
								</div>
								<h5 class="card-title">Seguro vehicular</h5>
								<select class="form-select mb-3" aria-label="Default select example" id="idSeguro" name="idSeguro">
									<option selected>Seleccione una opción</option>
									<?php foreach (($seguro?:[]) as $item): ?>
										<option value="<?= ($item['idSeguro']) ?>"><?= ($item['aseguradoraSeguro']) ?> <?= ($item['tipoSeguro']) ?> $<?= ($item['tarifaSeguro']) ?></option>
									<?php endforeach; ?>
								</select>

								<div class="d-grid gap-2 col-6 mx-auto">
									<button class="btn btn-primary" type="submit">Registrar vehiculo</button>
								</div>
							</form>
						
						<?php else: ?>
							<h5 class="card-title">No existen aseguranzas registradas, es necesario registrar una para poder cargar vehiculos.</h5>

						
					<?php endif; ?>
					
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="card">
				<div class="card-body table-responsive">
					<table id="Vehiculos" class="display" style="width:100%">
						<thead>
							<tr>
								<th>Matrícula</th>
								<th>Tipo de vehiculo</th>
								<th>Marca</th>
								<th>Modelo</th>
								<th>Cantidad de puertas</th>
								<th>Disponibilidad</th>
								<th>Aseguradora</th>
								<th>Tarífa</th>
								<th>Tipo de seguro</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (($automovil?:[]) as $item): ?>
								<tr>
									<td><?= ($item['matriculaAuto']) ?> </td>
									<td><?= ($item['tipoAuto']) ?> </td>
									<td><?= ($item['marcaAuto']) ?> </td>
									<td><?= ($item['modeloAuto']) ?> </td>
									<td><?= ($item['puertasAuto']) ?> </td>
									<td> 
										<?php if ($item['disponibleAuto']==0): ?>
											
												<span class="badge bg-danger">No disponible</span>
											
											<?php else: ?>
												<span class="badge bg-success">Disponible</span>

											
										<?php endif; ?>
									</td>
									<td><?= ($item['aseguradoraSeguro']) ?> </td>
									<td>$<?= ($item['tarifaSeguro']) ?> </td>
									<td><?= ($item['tipoSeguro']) ?> </td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th>Matrícula</th>
								<th>Tipo de vehiculo</th>
								<th>Marca</th>
								<th>Modelo</th>
								<th>Cantidad de puertas</th>
								<th>Disponibilidad</th>
								<th>Aseguradora</th>
								<th>Tarífa</th>
								<th>Tipo de seguro</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>