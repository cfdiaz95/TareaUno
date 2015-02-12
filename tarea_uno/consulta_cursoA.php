<?php 
	include 'connection.php';
	$id_curso = $_POST['cursos'];

$selectJoin = "SELECT * FROM estudiante 
			INNER JOIN estudiante_curso ON estudiante.id_estudiante = estudiante_curso.id_estudiante_curso;
			INNER JOIN cursos ON cursos.id_curso = estudiante_curso.id_curso WHERE cursos.id_curso = $id_curso";

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
				
					"<select name='materia'>
						<option value='".$id_curso."'>".$row['nombre_curso'] ."</option>
					</select>"
					
					." ".
					"<input type='submit' value='Ver notas'>
				</form>
			"
			;
 		}

 ?>