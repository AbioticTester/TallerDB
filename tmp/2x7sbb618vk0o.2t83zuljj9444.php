<div class="row">
	<div class="col-2">
		<a href="<?= ($BASE) ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
				<img src="<?= ($BASE) ?>/assets/img/file.png" height="50px" alt="">
				<span class="fs-4">Rent A Car</span>
			</a>
			<hr>
			<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Registro Usuarios</button>
				<button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Oficinas</button>				
				<button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Aseguradoras</button>
				<button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Automoviles</button>
			</div>
	</div>
	<div class="col-10 container">
		<div class="tab-content" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
				<?php echo $this->render('administrador/seccion1.htm',NULL,get_defined_vars(),0); ?>
			</div>
			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<?php echo $this->render('administrador/seccion2.htm',NULL,get_defined_vars(),0); ?>
				
			</div>
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<?php echo $this->render('administrador/seccion3.htm',NULL,get_defined_vars(),0); ?>
			</div>
			<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
				<?php echo $this->render('administrador/seccion4.htm',NULL,get_defined_vars(),0); ?>
			</div>
		</div>
		
	</div>
</div>
