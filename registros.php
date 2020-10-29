<?php 

include 'template/header.php'; 
include 'conexion.php';

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<div class="container">
	<div class="row">
		<div class="col-sm text-center mt-4 pt-4 h4 p-3 mb-2 bg-dark text-white shadow p-3 mb-4">
			<h1>Registro de autos</h1>
		</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="col-sm mt-4 pt-4 shadow p-3 mb-5 bg-light rounded border border-dark">
			<?php 

				$sql = "SELECT * FROM autos";
				$result = $conexion->query($sql);

				if ($result->num_rows > 0) {
				  
				  while($row = $result->fetch_assoc()) {
				    echo "ID: " . $row['ID']. " | Marca: " . $row['Marca']. " | Modelo: " . $row['Modelo']. " | Color: ". $row['Color']. " | Cantidad de puertas: " . $row['CantidadPuertas']. " | Fecha de alta: " . $row['Fecha_Alta']. " | Fecha de baja: " . $row['Fecha_Baja']. " | Precio: " . $row['Precio']. " | Estatus: " . $row['Estatus']. "<br>" ;
				    echo "-------------------------------------------------------------------------------------------------------------------------------------------------------------------------- <br>";
				  }
				} else {
				  echo "No hay información en la tabla";
				}

				$conexion->close();

				?>
		</div>	
	</div>

	<ul class="nav justify-content-end">
	  <li class="nav-item">
	    <a class="nav-link active bg-warning text-white shadow p-3 mb-4" href="http://localhost/parcial1/Indice.php">Formulario</a>
	  </li>
	</ul>
	
</div>

</body>
</html>