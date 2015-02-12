<?php 
	include_once 'connection.php'; //INCLUYO ARCHIVO DE CONEXIÓN
	$query = "SELECT * FROM cursos ORDER BY id_curso ASC";
	$resultQuery = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<!-- Select -->
		<form action="consulta_curso.php" method="post">
		  Estudiantes:<br/> 
		   <select name="cursos">
		   <?php
			   	while ($row = mysqli_fetch_array($resultQuery)) {  
				/*<option value="<?php echo $row['id_estudiante'] ?>"> <?php echo $row['nombre'] ?> </option>*/
					echo "<option value='".$row['id_curso']."'>".$row['nombre_curso'] ."</option>";
				}
			?>
		   </select>
		   <input type="submit" value="Enviar">		
		</form>
	</body>
</html>