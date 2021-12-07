<div class="col-lg-3 col-xl-3 col-md-4 col-sm-6 col-xs-12">
			<form action="" method="POST">
				<div class="card">
					<div class="card-body">
						<h3>Agregar Usuarios</h3>
						<hr>
						<div class="form-floating mb-3">
							<select class="form-select" id="estatusEvento" name="estatusEvento" aria-label="Estatus del evento">
								<option selected>Selecciona el evento</option>
								<?php foreach (($eventos?:[]) as $item): ?>
									<option value="<?= ($item['idEvento']) ?>">
										<?= ($item['lugarEvento']) ?>, <?= ($item['ciudadEvento']) ?> <?= ($item['estadoEvento']) ?> | <?= ($item['fechaEvento'])."
" ?>
									</option>
								<?php endforeach; ?>
								
							</select>
							<label for="floatingSelect">Evento</label>
						</div>
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
							<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>
							<label for="direccion">Dirección</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" required>
							<label for="ciudad">Ciudad</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required>
							<label for="estado">Estado</label>
						</div>

						<div class="form-floating mb-3">
							<input type="text" class="form-control" id="cp" name="cp" placeholder="Código Postal" required>
							<label for="cp">Código postal</label>
						</div>

						<div class="form-floating mb-3">
							<input type="number" class="form-control" id="contactoEmergencia" name="contactoEmergencia" placeholder="Teléfono" required>
							<label for="contactoEmergencia">Contacto de emergencia</label>
						</div>

						<div class="accordion" id="accordionExample">

							<!-- Documentación-->
							<div class="accordion-item mb-3">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										Documentación
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

							<!-- Datos fiscales-->
							<div class="accordion-item mb-3">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Datos bancarios
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">

										<div class="form-floating mb-3">
											<input type="text" class="form-control" id="dependenciaBancaria" name="dependenciaBancaria" placeholder="Entidad financiera" >
											<label for="dependenciaBancaria">Entidad financiera</label>
										</div>

										<div class="form-floating mb-3">
											<input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" >
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
				</div>	
			</form>
		</div>