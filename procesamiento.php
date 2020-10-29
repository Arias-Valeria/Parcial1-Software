<!DOCTYPE html>
<html>
	<head>
		
		<title>Bienvenido</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	</head>
	<body>
		<?php include 'template/header.php'; ?>

		<?php
			include 'conexion.php'; // reutilizarlo
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "ventas_autos";

			$sql = "SELECT * FROM autos";
			$result = $conexion->query($sql);

			$Marca = $_POST['Marca'];
			$Modelo = $_POST['Modelo'];
			$Color = $_POST['Color'];
			$CantidadPuertas = $_POST['CantidadPuertas'];
			$Precio = $_POST['Precio'];
			$Fecha_Alta = $_POST['Fecha_Alta'];
			$Fecha_Baja = $_POST['Fecha_Baja'];
			$Estatus = $_POST['gridRadios'];


			$sql = "INSERT INTO autos (Marca, Modelo, Color, CantidadPuertas, Precio, Fecha_Alta, Fecha_Baja, Estatus)
			VALUES ('".$Marca."', '".$Modelo."', '".$Color."', '".$CantidadPuertas."', '".$Precio."', '".$Fecha_Alta."', '".$Fecha_Baja."', '".$Estatus."')";

			if ($conexion->query($sql) === TRUE) {
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conexion->error;
			}

			$conexion->close();
		?>

		<h1 class="display 1 mt-3 pt-3 text-center">¡Bienvenido!</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<p class="h4 text-center">Se han registrado los siguientes datos: </p>
				</div>
			</div>
		</div>



		<div class="container">
			<div class="row">
				<div class="col-sm text-center">
					<table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Marca</th>
					      <th scope="col">Modelo</th>
					      <th scope="col">Color</th>
					      <th scope="col">Cantidad de puertas</th>
					      <th scope="col">Precio</th>
					      <th scope="col">Fecha de alta</th>
					      <th scope="col">Fecha de baja</th>
					      <th scope="col">Estatus</th>

					    </tr>
					  </thead>
					  <tbody>

					    <tr>
					      <th scope="row">Datos</th>
					      <td> <?php echo $Marca?> </td>
					      <td> <?php echo $Modelo?> </td>
					      <td> <?php echo $Color?> </td>
					      <td> <?php echo $CantidadPuertas?> </td>
					      <td> <?php echo $Precio?> </td>
					      <td> <?php echo $Fecha_Alta?> </td>
					      <td> <?php echo $Fecha_Baja?> </td>
					      <td> <?php echo $Estatus?> </td>
					    </tr>

					  </tbody>
					</table>

				</div>
			</div>
		</div>


		<div class="container">
			<div class="row">
				<div class="col-sm">
					<p class="h5 text-center text-justify">¡Estos nuestros modelos más vendidos! </p>
				</div>
			</div>
		</div>

		<div class="container">
		  <div class="row">

		    <div data-aos="flip-left" class="col-md-4 mt-3 pt-3" style="background: white">
		      <a data-fancybox="gallery" href="imgs/auto1.jpg">
		      	<img src="imgs/auto1.jpg" width="100%">
		      </a>
		    </div>

		    <div data-aos="flip-left" class="col-md-4 mt-3 pt-3" style="background: white">
		      <a data-fancybox="gallery" href="imgs/auto2.jpg">
		      	<img src="imgs/auto2.jpg" width="100%">
		      </a>
		    </div>

		    <div data-aos="flip-left" class="col-md-4 mt-3 pt-3" style="background: white">
		      <a data-fancybox="gallery" href="imgs/auto3.jpg">
		      	<img src="imgs/auto3.jpg" width="100%">
		      </a>
		    </div>

		  </div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm mt-3 pt-3">
					<p class="h6 text-center text-justify font-italic">(Para más información visita nuestra pagina www.DeluxeCars/info.com)</p>
				</div>
			</div>
		</div>

		<!-- FancyBox -->
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	</body>
</html>