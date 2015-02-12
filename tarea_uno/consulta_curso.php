<?php 
	include 'connection.php'; //INCLUYO ARCHIVO DE CONEXIÓN

		$idMateria=$_POST['cursos'];
		//======== Unir consultas de distintas tablas ========= // 
		//inner Join es igual a Join";
		$selectJoin = "SELECT estudiantes.id_estudiante, estudiantes.nombre, estudiantes.apellido,cursos.nombre_curso FROM estudiantes 
			INNER JOIN estudiante_curso ON estudiantes.id_estudiante = estudiante_curso.id_estudiante
			INNER JOIN cursos            ON cursos.id_curso        = estudiante_curso.id_curso WHERE cursos.id_curso=$idMateria";

		$resultQueryJoin = mysqli_query($con,$selectJoin);

		while ($row = mysqli_fetch_array($resultQueryJoin)) {

			echo "  
				<form action='consulta_notasa.php' method='post'>
					<select name='usuario'>
						<option value='".$row['id_estudiante']."'>".$row['id_estudiante'] ."</option>
					</select>"
					
					." ".

					$row["nombre"]." ".$row["apellido"]

					." ".
				
					"<select name='cursos'>
						<option value='".$idMateria."'>".$row['nombre_curso'] ."</option>
					</select>"
					
					." ".
					
					"<input type='submit' value='Ver notas'>

				</form>
			"
			;
 		}
			
 ?>