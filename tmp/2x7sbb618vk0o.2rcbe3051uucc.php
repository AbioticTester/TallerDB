<div class=" mt-3" style="margin:2rem">

	<div class="row">
		<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-xs-12">
			<form class="needs-validation" novalidate action="dashboard/add-patrocinador" method="POST">
				<div class="card mb-3">
					<div class="card-body">
						<h3><b>1</b> Agregar Patrocinador</h3>
						<hr>
						<div class="form-floating mb-3">
							<input type="text" class="form-control text-capitalize" id="nombrePatrocinador" name="nombrePatrocinador" placeholder="Nombre del Patrocinador" required>
							<label for="floatingInput">Nombre del Patrocinador</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control text-capitalize" id="razonSocial" name="razonSocial" placeholder="Razón Social" required>
							<label for="floatingInput">Razón Social</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control text-capitalize" id="marcaComercial" name="marcaComercial" placeholder="Marca Comercial" required>
							<label for="floatingInput">Marca Comercial</label>
						</div>
						<div class="d-grid gap-2 col-6 mx-auto">
							<button class="btn btn-success" type="submit">Agregar</button>
						</div>
					</div>
				</div>	
			</form>
			<form class="needs-validation" novalidate action="dashboard/add-usuariotrabajo" method="POST">
				<div class="card mb-3">
					<div class="card-body">
						<h3 class="card-title"><b>4</b> Asignar empleados a eventos</h3>
						<hr>
						<div class="form-floating mb-3">
							<select class="form-select" id="eventoempleado" name="eventoempleado" aria-label="eventoempleado" required>
								<option selected>Seleccione opción</option>
								<?php foreach (($eventos?:[]) as $item): ?>
									<option value="<?= ($item['idEvento']) ?>"><?= ($item['lugarEvento']) ?> | <?= ($item['ciudadEvento']) ?>, <?= ($item['estadoEvento']) ?> - <?= ($item['fechaEvento']) ?> </option>
								<?php endforeach; ?>
							</select>
							<label for="eventoempleado">Evento</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" id="empleadoAsignacion" name="empleadoAsignacion" aria-label="empleadoAsignacion" required>
								<option selected>Seleccione opción</option>
								<?php foreach (($encargadoEvento?:[]) as $item): ?>
									<option value="<?= ($item['usuario']) ?>" >
										<?= ($item['usuario']) ?> 
									</option>
								<?php endforeach; ?>
							</select>
							<label for="empleadoAsignacion">Empleado</label>
						</div>

						<div class="form-floating mb-3">
							<select class="form-select" id="rol" name="rol" aria-label="rol" required>
								<option selected>Seleccione opción</option>
								<?php foreach (($roles?:[]) as $item): ?>
									<?php if ($item['idRol'] !='DRLLOR'): ?>
										
											<option value="<?= ($item['idRol']) ?>" >
												<?= ($item['rol']) ?> 
											</option>
										
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
							<label for="rol">Rol del Empleado</label>
						</div>

						<div class="form-floating mb-3">
							<select class="form-select" id="sectorTrabajo" name="sectorTrabajo" aria-label="sectorTrabajo" required>
								<option selected>Seleccione opción</option>
								<?php foreach (($sectorestrabajo?:[]) as $item): ?>
									<option value="<?= ($item['idSector']) ?>" >
										<?= ($item['sector']) ?> 
									</option>
								<?php endforeach; ?>
							</select>
							<label for="sectorTrabajo">Sector del Empleado</label>
						</div>

						<div class="d-grid gap-2 col-6 mx-auto">
							<button class="btn btn-success" type="submit">Agregar</button>
						</div>

					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 col-xs-12">
			<form class="needs-validation" novalidate action="dashboard/add-user" method="POST">
				<div class="card mb-3">
					<div class="card-body row ">
						<div class="col-sm-12 col-ls-12 col-md-6 col-lg-6 col-xl-6">
							<h3><b>2</b> Agregar Usuarios</h3>
							<hr>
							<div class="form-floating mb-3">
								<input type="text" class="form-control text-capitalize" id="nombres" name="nombres" placeholder="Nombre(s)" required>
								<label for="nombres">Nombre (s)</label>
							</div>

							<div class="form-floating mb-3">
								<input type="text" class="form-control text-capitalize" id="apellidoPaterno" name="apellidoPaterno" placeholder="Apellido paterno" required>
								<label for="apellidoPaterno">Apellido paterno</label>
							</div>

							<div class="form-floating mb-3">
								<input type="text" class="form-control text-capitalize" id="apellidoMaterno" name="apellidoMaterno" placeholder="Apellido materno">
								<label for="apellidoMaterno">Apellido materno</label>
							</div>

							<div class="form-floating mb-3">
								<input type="text" class="form-control text-capitalize" id="curp" name="curp" placeholder="CURP" required>
								<label for="curp">CURP</label>
							</div>

							<div class="form-floating mb-3">
								<select class="form-select" id="sexo" name="sexo" aria-label="sexo" required>
									<option selected>Seleccione opción</option>
									<option value="Femenino">Femenino</option>
									<option value="Masculino">Masculino</option>
								</select>
								<label for="estadoCivil">Sexo</label>
							</div>

							<div class="form-floating mb-3">
								<select class="form-select" id="estadoCivil" name="estadoCivil" aria-label="estadoCivil" required>
									<option selected>Seleccione opción</option>
									<option value="Soltero/a">Soltero/a</option>
									<option value="Casado/a">Casado/a</option>
									<option value="Divorsiado/a">Divorsiado/a</option>
									<option value="Viudo/a">Viudo/a</option>
								</select>
								<label for="estadoCivil">Estado civil</label>
							</div>

							<div class="form-floating mb-3">
								<input type="text" class="form-control text-capitalize" id="nss" name="nss" placeholder="NSS" required>
								<label for="nss">Número de seguridad social</label>
							</div>

							<div class="form-floating mb-3">
								<input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de nacimiento" max="2021/10/22">
								<label for="fechaNacimiento">Fecha de nacimiento</label>
							</div>

							<div class="form-floating mb-3" required>
								<input type="text" class="form-control text-capitalize" id="lugarNacimiento" name="lugarNacimiento" placeholder="Lugar de nacimiento" >
								<label for="lugarNacimiento">Lugar de nacimiento</label>
							</div> 
						</div>
						<div class="col-sm-12 col-ls-12 col-md-6 col-lg-6 col-xl-6">
							<h5>Datos de contacto</h5>
							<hr>
							<div class="form-floating mb-3">
								<input type="number" min="1000000000" max="9999999999" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
								<label for="telefono">Teléfono</label>
							</div>

							<div class="form-floating mb-3">
								<input type="number" min="1000000000" max="9999999999" class="form-control" id="celular" name="celular" placeholder="Teléfono" required>
								<label for="celular">Celular</label>
							</div>

							<div class="form-floating mb-3">
								<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
								<label for="correo">Correo</label>
							</div>

							<div class="form-floating mb-3">
								<input type="text" class="form-control text-capitalize" id="direccion" name="direccion" placeholder="Dirección" required>
								<label for="direccion">Dirección</label>
							</div>

							<div class="form-floating mb-3">
								<input type="text" class="form-control text-capitalize" id="ciudad" name="ciudad" placeholder="Ciudad" required>
								<label for="ciudad">Ciudad</label>
							</div>

							<div class="form-floating mb-3">
								<input type="text" class="form-control text-capitalize" id="estado" name="estado" placeholder="Estado" required>
								<label for="estado">Estado</label>
							</div>

							<div class="form-floating mb-3">
								<input type="text" class="form-control text-capitalize" id="cp" name="cp" placeholder="Código Postal" required>
								<label for="cp">Código postal</label>
							</div>

							<div class="form-floating mb-3">
								<input type="number" class="form-control" id="contactoEmergencia" name="contactoEmergencia" placeholder="Teléfono" required>
								<label for="contactoEmergencia">Contacto de emergencia</label>
							</div>
						</div>
						<div class="col-12">
							<div class="accordion" id="accordionExample">

								<!-- Documentación--
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
											Documentación (opcional)
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<div class="input-group mb-3">
												<label class="input-group-text" for="fotoEmpleado">Foto empleado</label>
												<input type="file" class="form-control" id="fotoEmpleado" name="fotoEmpleado">
											</div>

											<div class="input-group mb-3">
												<label class="input-group-text" for="credencialFrontal">Credencial frontal</label>
												<input type="file" class="form-control" id="credencialFrontal" name="credencialFrontal">
											</div>

											<div class="input-group mb-3">
												<label class="input-group-text" for="credencialTrasera">Credencial trasera</label>
												<input type="file" class="form-control" id="credencialTrasera" name="credencialTrasera">
											</div>

											<div class="input-group mb-3">
												<label class="input-group-text" for="comprobanteDomicilio">Foto Comprobante de domicilio</label>
												<input type="file" class="form-control" id="comprobanteDomicilio" name="comprobanteDomicilio">
											</div>

										</div>
									</div>
								</div>

								!-- Datos fiscales-->
								<div class="accordion-item mb-3">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Datos bancarios (opcional)
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">

											<div class="form-floating mb-3">
												<input type="text" class="form-control text-capitalize" id="dependenciaBancaria" name="dependenciaBancaria" placeholder="Entidad financiera" >
												<label for="dependenciaBancaria">Entidad financiera</label>
											</div>

											<div class="form-floating mb-3">
												<input type="text" class="form-control text-capitalize" id="rfc" name="rfc" placeholder="RFC" >
												<label for="rfc">RFC</label>
											</div>

											<div class="form-floating mb-3">
												<input type="number" class="form-control" id="cuentaClabe" name="cuentaClabe" placeholder="Clabe interbancaria" >
												<label for="cuentaClabe">Clabe interbancaria</label>
											</div>

											<div class="form-floating mb-3">
												<input type="number" class="form-control" id="numeroTarjeta" name="numeroTarjeta" placeholder="Número de tarjeta" >
												<label for="numeroTarjeta">Número de tarjeta</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="d-grid gap-2">
							<button class="btn btn-success btn-block" type="submit"><i class="fas fa-user-plus"></i> Agregar</button>
						</div>
					</div>
				</div>	
			</form>
		</div>

		<div class="col-lg-3 col-xl-3 col-md-6 col-sm-6 col-xs-12">
			<form class="needs-validation" novalidate action="dashboard/add-events" method="POST">
				<div class="card mb-3">
					<div class="card-body">
						<h3><b>3</b> Agregar Evento</h3>
						<hr>
						<div class="form-floating mb-3">
							<select class="form-select" id="patrocinadorEvento" name="patrocinadorEvento" aria-label="patrocinador" required>
								<option selected>Selecciona al Patrocinador</option>
								<?php foreach (($patrocinador?:[]) as $item): ?>
									<option value="<?= ($item['idPatrocinador']) ?>" >
										<?= ($item['nombrePatrocinador']) ?> | <?= ($item['marcaComercial']) ?> 
									</option>
								<?php endforeach; ?>
								
							</select>
							<label for="floatingSelect">Patrocinador</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control text-capitalize" id="lugarEvento" name="lugarEvento" placeholder="Lugar del evento" required>
							<label for="floatingInput">Lugar del evento</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control text-capitalize" id="ciudadEvento" name="ciudadEvento" placeholder="Ciudad del evento" required>
							<label for="floatingInput">Ciudad del evento</label>
						</div>
						<div class="form-floating mb-3">
							<input type="text" class="form-control text-capitalize" id="estadoEvento" name="estadoEvento" placeholder="Estado">
							<label for="floatingInput">Estado</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" id="estatusEvento" name="estatusEvento" aria-label="Estatus del evento">
								<option selected>Selecciona el estatus del evento</option>
								<option value="ACTIVO">Activo</option>
								<option value="PENDIENTE">Pendiente</option>
								<option value="INACTIVO">Inactivo</option>
							</select>
							<label for="floatingSelect">Estatus del evento</label>
						</div>
						<div class="form-floating mb-3">
							<input type="date" class="form-control" id="fechaEvento" name="fechaEvento" placeholder="2021-10-28">
							<label for="floatingInput">Fecha del evento</label>
						</div>
						<div class="form-floating mb-3">
							<select class="form-select" id="encargadoEvento" name="encargadoEvento" aria-label="encargadoEvento" required>
								<option selected>Selecciona al Encargado</option>
								<?php foreach (($encargadoEvento?:[]) as $item): ?>
									<option value="<?= ($item['usuario']) ?>" >
										<?= ($item['usuario']) ?> 
									</option>
								<?php endforeach; ?>
								
							</select>
							<label for="floatingSelect">Encargado del evento</label>
						</div>
						<div class="d-grid gap-2 col-6 mx-auto">
							<button class="btn btn-success" type="submit">Agregar</button>
						</div>
					</div>
				</div>	
			</form>
		</div>

		
		<!--<div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-12">
			
		</div>-->


		<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 col-xs-12 ">
			<div class="card mb-3">

				<div class="card-body table-responsive">
					<h3 class="card-title">Eventos</h3>
					<hr>
					<table id="patrocinador" class="display" style="width:100%">
						<thead>
							<tr>
								<th>Patrocinador</th>
								<th>Fecha de evento</th>
								<th>Lugar del evento</th>
								<th>Encargado del evento</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (($patrocinadorEvento?:[]) as $item): ?>
								<tr>
									<td><?= ($item['nombrePatrocinador']) ?></td>
									<td><?= ($item['fechaEvento']) ?></td>
									<td><?= ($item['lugarEvento']) ?>, <?= ($item['ciudadEvento']) ?>, <?= ($item['estadoEvento']) ?>. </td>
									<td><?= ($item['encargadoEvento']) ?></td>
									<td>
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-primary"  data-bs-toggle="offcanvas" href="#editEvento<?= ($item['idEvento']) ?>" role="button" aria-controls="editEvento<?= ($item['idEvento']) ?>"><i class="fas fa-edit"></i></button>
											<button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#removeEvento<?= ($item['idEvento']) ?>"><i class="fas fa-trash-alt"></i></button>
											
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th>Patrocinador</th>
								<th>Fecha de evento</th>
								<th>Lugar del evento</th>
								<th>Encargado del evento</th>
								<th>Acción</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 col-xs-12 ">
			<div class="card mb-3">

				<div class="card-body table-responsive">
					<h3 class="card-title">Empleados</h3>
					<hr>
					<table id="empleados" class="display" style="width:100%">
						<thead>
							<tr>
								<th>Evento</th>
								<th>Usuario</th>
								<th>Rol</th>
								<th>Sector</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (($empleadosEventos?:[]) as $item): ?>
								<tr>
									<td><?= ($item['idEvento']) ?></td>
									<td><?= ($item['usuario']) ?></td>
									<td><?= ($item['rol']) ?></td>
									<td><?= ($item['sectroTrabajo']) ?></td>
									<td>
										<!--<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser<?= ($item['usuario']) ?>"><i class="fas fa-edit"></i></button>
											<button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
										</div>
									-->
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<th>Evento</th>
								<th>Usuario</th>
								<th>Rol</th>
								<th>Sector</th>
								<th>Acción</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>