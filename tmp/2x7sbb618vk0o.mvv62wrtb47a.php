
	<div class="container mt-5">
		<h1>Empresa</h1>
		<div class="card mt-5">
			<div class="card-body ">
				<div class="form-floating mb-3">
					<select class="form-select" id="evento" name="evento" aria-label="evento" required>
						<option  selected > Seleccione evento </option>
						<?php foreach (($eventos?:[]) as $item): ?>
							<option value="<?= ($item['idEvento']) ?>" >
								<?= ($item['lugarEvento']) ?> | <?= ($item['fechaEvento']) ?> 
							</option>
						<?php endforeach; ?>

					</select>
					<label for="floatingSelect">Seleccione evento</label>
				</div>
				<div class="d-grid gap-2 col-6 mx-auto">
					<button class="btn btn-success" type="submit" onclick="ir()"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
				</div>
			</div>
		</div>
	</div>
