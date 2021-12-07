<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UPS!</title>
	<meta name="author" content="Hugo Eduardo Zetina Gutiérrez" />
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Helvetica:300,400,600,700">
	<!-- Bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
	<!-- Font Awesome -->
	<link
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
	rel="stylesheet"
	/>
</head>
<body >
</head>
<body>


	<div class="container mt-5 text-center">
		<div class="row mt-5">
			<div class="col-md-12">
				<img src="<?= ($BASE) ?>/assets/img/Menu/no disponible.png" alt="">
			</div>
			<div class="col-md-4">
				<h1 class="align-content-center" style="font-size: 100px"><?= ($ERROR['code']) ?></h1>
			</div>
			<div class="col-md-8 mt-10">
      <p><?= ($ERROR['text']) ?></p>
				<h2 class="font-weight-normal lead" id="desc" style="font-size: 50px"><?= ($ERROR['status']) ?>.</h2>
			</div>
			<div class="col-md-12">
				<button class="btn btn-prmary" onclick="goBack()">Regresar</button>
			</div>
		</div>
	</div>
	<script>
		function goBack() {
			window.history.back();
		}
	</script>

	<!--Scripts-->
<!-- JQUERY-->
	<script src="<?= ($BASE) ?>/assets/js/jquery.js"></script>
	<!-- Bootstrap-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>