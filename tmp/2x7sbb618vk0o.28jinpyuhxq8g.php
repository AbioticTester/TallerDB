	<!-- JQUERY-->
	<script src="<?= ($BASE) ?>/assets/js/jquery.js"></script>
	<!-- Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<!-- DataTable -->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

	<script>
		$(document).ready(function() {
			$('#inventarioTable').DataTable(
			{
		       	language: 
		       	{
		           	url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es-mx.json'
		       	}
	    	});

		});
	</script>
</body>
</html>