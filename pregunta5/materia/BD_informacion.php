<!DOCTYPE html>
<html>
<head>
	<style>
		table{
		  
		  border-collapse: collapse;
		  width: 60%;
		}

		th, td {
			
		  padding: 8px;
		  text-align: left;
		  border-bottom: 1px solid #ddd;
		}

		tr:hover {background-color: coral;}
	</style>
</head>
<body>

	<?php
		
		include "rform.php";


		$user = $_POST['user'];
  		$password = $_POST['pasword'];


		$sql="select * from acceso where usuario='$user' and pasword='$password'";
		$resultado=mysqli_query($con, $sql);
		$ads=mysqli_fetch_array($resultado);

		if ($resultado->num_rows != 0) {
			

			session_start();
		
			echo "la contraseña y usuaio es correcto";
			
			if($ads['rol']=='director')
			{
				$sql_rol="select person.ci, person.nombe, person.ap_paterno, person.ap_materno, person.departamento, inscripcion.sigla, 
				CASE person.departamento 
				WHEN 'CH-01' THEN inscripcion.nota_final
				WHEN 'LP-02' THEN inscripcion.nota_final
				WHEN 'CB-03' THEN inscripcion.nota_final
				WHEN 'OR-04' THEN inscripcion.nota_final
				WHEN 'PT-05' THEN inscripcion.nota_final
				WHEN 'TJ-06' THEN inscripcion.nota_final
				WHEN 'SC-07' THEN inscripcion.nota_final
				WHEN 'BE-08' THEN inscripcion.nota_final
				WHEN 'PD-09' THEN inscripcion.nota_final
				ELSE 'no esta inscrito' END AS promedio 
				FROM person, inscripcion WHERE person.ci = inscripcion.ci";

				$resultado_rol=mysqli_query($con, $sql_rol);
				echo "<table>";
				echo "<tr>";
					echo "<td>CI</td>";
					echo "<td>NOMBRE</td>";
					echo "<td>PATERNO</td>";
					echo "<td>MATERNO</td>";
					echo "<td>DEPARTAMENTO</td>";
					echo "<td>SIGLA</td>";
					echo "<td>PROMEDIO</td>";
				echo "</tr>";

				while($fila_rol=mysqli_fetch_array($resultado_rol))
				{

				echo "<tr>";
					echo "<td>".$fila_rol['ci']."</td>";
					echo "<td>".$fila_rol['nombe']."</td>";
					echo "<td>".$fila_rol['ap_paterno']."</td>";
					echo "<td>".$fila_rol['ap_materno']."</td>";
					echo "<td>".$fila_rol['departamento']."</td>";
					echo "<td>".$fila_rol['sigla']."</td>";
					echo "<td>".$fila_rol['promedio']."</td>";
					//echo '<a href="editar.php?ci='.$fila["ci"].'">Editar</a> ';
					//echo '<a href="eliminar.php?ci='.$fila["ci"].'">Eliminar</a>';
				echo "</tr>";
				}
				echo "</table>";
				
			}
			else{
				echo "<table>";
				echo "<tr>";
					echo "<td>CI</td>";
					echo "<td>USUARIO</td>";
					echo "<td>ROL</td>";
				echo "</tr>";
				$resultado=mysqli_query($con, $sql);
				while($fila3=mysqli_fetch_array($resultado))
				{
			
				echo "<tr>";
					echo "<td>".$fila3['ci']."</td>";
					echo "<td>".$fila3['usuario']."</td>";
					echo "<td>".$fila3['rol']."</td>";
					//echo '<a href="editar.php?ci='.$fila["ci"].'">Editar</a> ';
					//echo '<a href="eliminar.php?ci='.$fila["ci"].'">Eliminar</a>';
				echo "</tr>";
				}
			
				echo "</table>";
			}
		}
		else{

			echo 'El email o password es incorrecto, <a href="/">vuelva a intenarlo</a>.<br/>';
		}
	?>

</body>

