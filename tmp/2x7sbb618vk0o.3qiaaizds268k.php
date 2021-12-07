<div class="container mt-3	">
	<div class="row">
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Registro de nueva oficina</h5>
					<form action="admin/add-oficina" method="POST">
						<div class="mb-3">
							<label for="ciudadOficina" class="form-label">Ciudad </label>
							<input type="text" class="form-control" id="ciudadOficina" name="ciudadOficina" placeholder="Ingrese la ciudad donde se ubica la oficina">
						</div>
						<div class="mb-3">
							<label for="calleOficina" class="form-label">Calle</label>
							<input type="text" class="form-control" id="calleOficina" name="calleOficina" placeholder="Ingrese la calle donde se ubica la oficina">
						</div>
						<div class="mb-3">
							<label for="noExteriorOficina" class="form-label">Número exterior</label>
							<input type="text" class="form-control" id="noExteriorOficina" name="noExteriorOficina" placeholder="Ingrese el número exterior de la oficina">
						</div>
						<div class="mb-3">
							<label for="cpOficina" class="form-label">Código Postal</label>
							<input type="text" class="form-control" id="cpOficina" name="cpOficina" placeholder="Ingrese el C.P.">
						</div>
						<div class="mb-3">
							<label for="telOficina" class="form-label">Teléfono</label>
							<input type="text" class="form-control" id="telOficina" name="telOficina" placeholder="Ingrese el teléfono de la oficina">
						</div>
						<div class="d-grid gap-2 col-6 mx-auto">
							<button class="btn btn-primary" type="submit">Registrar oficina</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<table id="Oficinas" class="display" style="width:100%">
						<thead>
							<tr>
								<th>id</th>
								<th>Ciudad</th>
								<th>Calle</th>
								<th># Exterior</th>
								<th>C.P.</th>
								<th>Telefono</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (($oficinas?:[]) as $oficina): ?>
								<tr>
									<td><?= ($oficina['idOficina']) ?> </td>
									<td><?= ($oficina['ciudadOficina']) ?> </td>
									<td><?= ($oficina['calleOficina']) ?> </td>
									<td><?= ($oficina['noExteriorOficina']) ?> </td>
									<td><?= ($oficina['cpOficina']) ?> </td>
									<td><a href="tel:<?= ($oficina['telOficina']) ?>"><?= ($oficina['telOficina']) ?> </a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th>id</th>
								<th>Ciudad</th>
								<th>Calle</th>
								<th># Exterior</th>
								<th>C.P.</th>
								<th>Telefono</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>