<div class="container mt-3	">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<table id="Usuarios" class="display" style="width:100%">
						<thead>
							<tr>
								<th>id</th>
								<th>Nombre de Usuario </th>
								<th>Rol</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (($Usuarios?:[]) as $user): ?>
								<tr>
									<td><?= ($user['idUsuario']) ?> </td>
									<td><?= ($user['nombreUsuario']) ?> </td>
									<td>
										<?php if ($user['rolUsuario']==0): ?>
											
												Usuario
											
											<?php else: ?>
												Administrador
											
										<?php endif; ?>

									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th>id</th>
								<th>Nombre de Usuario </th>
								<th>Rol</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>