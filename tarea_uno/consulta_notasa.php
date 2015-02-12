
<?php 
	include 'connection.php'; //INCLUYO ARCHIVO DE CONEXIÓN
	
	//======== CONSULTAR ========= //

	$id_materia = $_POST['cursos'];
	$id_estudiante= $_POST ['usuario'];

	$selectJoin = "SELECT * FROM estudiantes 
			INNER JOIN estudiante_nota ON estudiantes.id_estudiante = estudiante_nota.id_estudiante
			INNER JOIN notas             ON notas.id_notas             = estudiante_nota.id_notas
			INNER JOIN cursos          ON cursos.id_curso        = estudiante_nota.id_curso WHERE cursos.id_curso=$id_materia AND estudiantes.id_estudiante=$id_estudiante";


	$resultQuery = mysqli_query($con,$selectJoin);
?>


<table border="1">
	 <tr>
	   <td>Nombre Nota</td>
	   <td>Nota</td> 
	   <td>Porcentaje nota</td>
	   <td>Total</td>
	 </tr>

	<?php
		$varAumento=0;
		$nombre;
		while ($row = mysqli_fetch_array($resultQuery)) {
			$nombre=$row['nombre']." ".$row['apellido'];
			$nombre_curso=$row['nombre_curso'];
				echo "

				  <tr>
				    <td>".$row['nombre_nota']."</td>
				    <td>".$row['nota']."</td> 
				    <td>".$row['porcentaje']."</td>
				    <td>".$row['nota'] * $row['porcentaje']."</td>
				  </tr>
				";

			$varAumento++;

			$arrayNota[$varAumento]=$row['nota'] * $row['porcentaje'];
		}

	?>
</table>

<?php 

	echo $nombre_curso.":";
	echo$arrayNota[1]+$arrayNota[2];
	echo "</br>";
	echo  $nombre;

?>