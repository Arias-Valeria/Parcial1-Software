<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
	<img id="fondito" style="position: absolute; top: 0; left: 0; width: 100%; height: 230%" src="fondo3.jpg" />
	
	<div class="container">
		<div class="row">
			<div class="col-sm">
			<h1 class="text-center mt-3 pt-3 text-white shadow p-3 mb-4">Deluxe-Cars!</h1>	
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<p class="text-center text-white">Valeria Arias Méndez - Al02813249</p>
			</div>
		</div>
	</div>

	
	<?php date_default_timezone_set('America/Mexico_City'); ?>
	<div class = "container">
		<div class = "row">
			<div class="col-md-12 mt-3 pt-3 text-white"> ¡Bienvenido! - 
				<?php 
					echo date("Y-m-d H:i:s"); 
					echo "<br>";
						?>
					</div>

				<div class="col-md-6">
					<form action="procesamiento.php" method="POST">

						<ul class="nav mt-3 pt-3">
						  <li class="nav-item">
						    <a class="nav-link active bg-warning text-white shadow p-3 mb-4" href="http://localhost/parcial1/registros.php">Registros</a>
						  </li>
						</ul>

						<div class="form-group bg-dark text-white shadow p-3 mb-4">
					    	<label for="inputMarca">Marca:</label>
					    	<input type="text" class="form-control" id="inputMarca" name="Marca">
						</div>

						<div class="form-group bg-dark text-white shadow p-3 mb-4">
						    <label for="inputModelo">Modelo:</label>
						    <input type="text" class="form-control" id="inputModelo" name="Modelo">
						</div>

						<div class="form-group bg-dark text-white shadow p-3 mb-4">
						    <label for="inputColor">Color:</label>
						    <input type="text" class="form-control" id="inputColor" name="Color">
						</div>

						<div class="form-group bg-dark text-white shadow p-3 mb-4">
						    <label for="selectPuertas">Cantidad de puertas: </label>
						    <select class="form-control" id="selectPuertas" name="CantidadPuertas">
						      <option>1</option>
						      <option>2</option>
						      <option>3</option>
						      <option>4</option>
						    </select>
						 </div>

						 <div class="form-group bg-dark text-white shadow p-3 mb-4">
						    <label for="inputPrecio">Precio:</label>
						    <input type="text" class="form-control" id="inputPrecio" name="Precio">
						</div>

						<div class="form-group bg-dark text-white shadow p-3 mb-4">
						    <label for="inputFechaAlta">Fecha de alta:</label>
						    <input type="text" class="form-control calendario" id="inputFechaAlta" name="Fecha_Alta">
						</div>

						<div class="form-group bg-dark text-white shadow p-3 mb-4">
						    <label for="inputFechaBaja">Fecha de baja:</label>
						    <input type="text" class="form-control calendario" id="inputFechaBaja" name="Fecha_Baja">
						</div>

					  	<fieldset class="form-group bg-dark text-white shadow p-3 mb-4">
						    <div class="row">

						    <label for="gridRadios1">Estatus del automovil:</label>

						      <div class="col-sm-10">
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Disponible" checked>
						          <label class="form-check-label" for="gridRadios1">
						            Disponible
						          </label>
						        </div>

						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Vendido">
						          <label class="form-check-label" for="gridRadios2">
						            Vendido
						          </label>
						        </div>

						      </div>
						    </div>
						 </fieldset>

						<input type="submit" class="btn btn-warning shadow p-3 mb-4dark">

					</form>
				</div>
		</div>
	</div>

	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>

	<script type="text/javascript">
		$('.calendario').datepicker({
			format: 'dd-mm-yyyy',
			//startDate: '-0d'
		});
	</script>

</body>
</html>