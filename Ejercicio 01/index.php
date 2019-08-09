<!DOCTYPE html>
<html lang="en">
<head>
	<title>Curso - Algoritmos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php 
	require_once "calculo.php";
	?>
</head>
<body>
	<div class="container-fluid">
		<div class="container-title-course">
			<div class="title-course">
				<div class="row">
					<div class="col-md-12">
						<div class="alert alert-primary" role="alert">
							<h4 class="alert-heading">Curso de algoritmos - Clase 01</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="number-case">
				<div class="row">
					<div class="col-md-2">
						<button type="button" class="btn btn-primary">
							<b>Caso:</b> <span class="badge badge-light">01</span>
						</button>
					</div>
				</div>
			</div>
			<div class="content-case">
				<div class="row">
					<div class="col-md-12">
						<div class="alert alert-dark" role="alert">
							Dada las horas trabajadas de una persona y el valor por hora.
							Calcular su salario e imprimirlo.
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="development-container">
			<div class="row">
				<div class="col-md-3">
					<form id="frm">
						<div class="form-group">
							<label for="formGroupExampleInput">Horas trabajas:</label>
							<input type="text" name="txtHoras" class="form-control" placeholder="Ingresar las horas trabajas">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Ingresar el valor por hora:</label>
							<input type="text" name="txtCosto" class="form-control" placeholder="Ingrese el costo por hora">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Resultado:</label>
							<input type="text" name="txtResultado" class="form-control" value="">
						</div>
						<button type="submit" id="calcular" class="btn btn-primary">Calcular</button>
					</form>
				</div>
			</div>
			
		</div>
	</div>


	<script src="../js/jquery-3.4.1.js" type="text/javascript"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			enviarDatos();
		});

		function enviarDatos(){
			$("#frm").on("submit", function(e){
				e.preventDefault();
				var frm = $(this).serialize();
				$.ajax(
				{
					"method": "POST",
					"url" : "calculo.php",
					"data" : frm
				})
				.done(function(data) {
					$( "input[name='txtResultado']" ).val(data);
				})
				.fail(function(data) {
					alert( "error" );
				})
				.always(function(data) {
					alert( "complete" );

				});
			});
		}
	</script>
</body>
</html>