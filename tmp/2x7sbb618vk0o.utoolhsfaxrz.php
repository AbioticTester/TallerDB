	<!-- JQUERY-->
	<script src="<?= ($BASE) ?>/assets/js/jquery.js"></script>
	<!-- Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<!-- DataTable -->
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

	<!-- Chart js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- Validate forms-->
	<script src="<?= ($BASE) ?>/assets/js/validateBootstrap.js"></script>
	<script>
		$(document).ready(function() {
			$('#patrocinador').DataTable(
			{
				language: 
				{
					url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es-mx.json'
				}
			});

			$('#empleados').DataTable(
			{
				language: 
				{
					url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es-mx.json'
				}
			});
			$("#fecha").html("Fecha: <b>"+Date()+"</b>");
		});
	</script>

	<script>
		//eventos
		$("#eventosform").submit(function(e) {

	    e.preventDefault(); // avoid to execute the actual submit of the form.

	    var form = $(this);
	    var url = "inventario/"+$("#evento").val()
	    
	    $.ajax({
	           	type: "GET",
	           	url: url,
	           	data: form.serialize(), // serializes the form's elements.
	           	success: function(data)
           		{
               		
               		$(location).attr('href',url);
           		}
         	});
		});
	</script>


		
</body>
</html>