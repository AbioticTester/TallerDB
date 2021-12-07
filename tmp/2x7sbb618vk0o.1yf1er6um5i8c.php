<div class="container mt-3	">
	<div class="row">
		<div class="col-md-12 mb-3">
			<button class="btn btn-success"  type="button" data-bs-toggle="offcanvas" data-bs-target="#addUser" aria-controls="offcanvasExample">
				<i class="fas fa-user-plus"></i>
			</button>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<table id="Usuarios" class="display" style="width:100%">
						<thead>
							<tr>
								<th>id</th>
								<th>Nombre de Usuario </th>
								<th>Rol</th>
								<th>Acciones</th>
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
									<td> 

										<div class="btn-group" role="group" aria-label="Basic example">
											<?php if ($user['idUsuario']==1): ?>
												<?php else: ?>
													<button  class="btn btn-primary"  type="button" data-bs-toggle="offcanvas" data-bs-target="#updateUser<?= ($user['idUsuario']) ?>" aria-controls="updateUserExample" ><i class="fas fa-user-edit"></i></button>
											<button class="btn btn-danger"   type="button"  data-bs-toggle="modal" data-bs-target="#removeUser<?= ($user['idUsuario']) ?>"><i class="fas fa-user-minus"></i></button>
												
											<?php endif; ?>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th>id</th>
								<th>Nombre de Usuario </th>
								<th>Rol</th>
								<th>Acciones</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>