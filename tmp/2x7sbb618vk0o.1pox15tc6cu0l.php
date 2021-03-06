<nav class="navbar fixed-bottom navbar-light bg-light">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Taller de Base de Datos</a>
		<div class="row">
			<div class="col-3">
				Zetina Gutierrez Hugo Eduardo | 19211755
			</div>
			<div class="col-3">
				Mojica Vidal Jonathan Jafet | 19211688 
			</div>
			<div class="col-3">
				Figueroa Parra Francisco Manuel  | 19211639  
			</div>
			<div class="col-3">
				Bautista Domínguez Miguel Ángel  | 19211599   
			</div>
		</div>
	</div>
</nav>



<!-- JQUERY-->
<script src="<?= ($BASE) ?>/assets/js/jquery.js"></script>
<!-- Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
	/* global bootstrap: false */
	(function () {
		'use strict'
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
		tooltipTriggerList.forEach(function (tooltipTriggerEl) {
			new bootstrap.Tooltip(tooltipTriggerEl)
		})
	})()

	$(document).ready( function () {
		$('#Usuarios').DataTable(
			{
				language: 
				{
					url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es-mx.json'
				}
			}
		);
		$('#Oficinas').DataTable(
			{
				language: 
				{
					url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es-mx.json'
				}
			}
		);
		$('#Vehiculos').DataTable(
			{
				language: 
				{
					url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es-mx.json'
				}
			}
		);
		$('#Seguros').DataTable(
			{
				language: 
				{
					url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es-mx.json'
				}
			}
		);
	} );

</script>
</body>
</html>