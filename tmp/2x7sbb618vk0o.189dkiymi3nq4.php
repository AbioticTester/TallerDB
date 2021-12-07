<div class="container mt-3	">
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Seguro vehicular</h5>

					<form action="admin/add-seguro" method="POST">
						<div class="mb-3">
							<label for="tipoSeguro" class="form-label">Tipo de aseguranza</label>
							<input type="text" class="form-control" id="tipoSeguro" name="tipoSeguro" placeholder="Ingrese el tipo de aseguranza">
						</div>
						<div class="mb-3">
							<label for="aseguradoraSeguro" class="form-label">Nombre de  la aseguradora</label>
							<input type="text" class="form-control" id="aseguradoraSeguro" name="aseguradoraSeguro" placeholder="Ingrese el nombre de la aseguradora">
						</div>
						<div class="mb-3">
							<label for="tarifaSeguro" class="form-label">Tarifa de la aseguranza</label>
							<input type="text" class="form-control" id="tarifaSeguro" name="tarifaSeguro" placeholder="Ingrese la tarifa de la aseguranza">
						</div>
						<div class="d-grid gap-2 col-6 mx-auto">
							<button class="btn btn-primary" type="submit">Registrar Seguro</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<table id="Seguros" class="display" style="width:100%">
						<thead>
							<tr>
								<th>id</th>
								<th>Tipo de seguro</th>
								<th>Aseguradora</th>
								<th>Tarifa</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (($seguro?:[]) as $item): ?>
								<tr>
									<td><?= ($item['idSeguro']) ?> </td>
									<td><?= ($item['tipoSeguro']) ?> </td>
									<td><?= ($item['aseguradoraSeguro']) ?> </td>
									<td><?= ($item['tarifaSeguro']) ?> </td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th>id</th>
								<th>Tipo de seguro</th>
								<th>Aseguradora</th>
								<th>Tarifa</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>