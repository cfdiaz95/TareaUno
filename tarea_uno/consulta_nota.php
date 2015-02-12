<?php 
	include 'connection.php';
	$id_nota = $_POST['notas'];

$selectJoin = "SELECT * FROM estudiante 
			INNER JOIN estudiante_curso ON estudiante.idestudiante = estudiante_curso.id_estudiante_curso;
			INNER JOIN cursos ON cursos.idcurso = estudiante_curso.idcurso WHERE cursos.idcurso = $id_curso";

$resultQueryJoin = mysqli_query($con,$selectJoin);

while ($row = mysqli_fetch_array($resultQueryJoin)) {
			echo "  
				<form action='notas.php' method='post'>
					<select name='usuario'>
						<option value='".$row['idestudiante']."'>".$row['idestudiante'] ."</option>
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