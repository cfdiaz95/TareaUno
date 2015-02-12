<?php 
	include_once 'includes/connection.php'; //INCLUYO ARCHIVO DE CONEXIÓN

		$materiaEscogida=$_POST['cursos'];
		//======== Unir consultas de distintas tablas ========= // 
		//inner Join es igual a Join";
		$selectJoin = "SELECT estudiantes.id_estudiante, estudiantes.nombre, estudiantes.apellidos,curso.nombre_curso FROM estudiantes 
			INNER JOIN estudiante_materia ON estudiantes.id_estudiante = estudiante_curso.id_estudiante
			INNER JOIN cursos            ON cursos.id_curso        = estudiante_curso.id_materia WHERE cursos.id_curso=$materiaEscogida";

		$resultQueryJoin = mysqli_query($con,$selectJoin);

		while ($row = mysqli_fetch_array($resultQueryJoin)) {

			echo "  
				<form action='notas.php' method='post'>
					<select name='usuario'>
						<option value='".$row['id_estudiante']."'>".$row['id_estudiante'] ."</option>
					</select>"
					
					." ".

					$row["nombre"]." ".$row["apellidos"]

					." ".
				
					"<select name='cursos'>
						<option value='".$materiaEscogida."'>".$row['nombre_curso'] ."</option>
					</select>"
					
					." ".
					
					"<input type='submit' value='Ver notas'>

				</form>
			"
			;
 		}
			
 ?>