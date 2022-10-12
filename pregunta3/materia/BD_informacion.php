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

		if ($resultado->num_rows != 0) {

			session_start();
		
			echo "la contraseña y usuaio es correcto";

			echo "<table>";
			echo "<tr>";
				echo "<td>CI</td>";
				echo "<td>USUARIO</td>";
				echo "<td>ROL</td>";
			echo "</tr>";

			while($fila=mysqli_fetch_array($resultado))
			{
		  	echo "<tr>";
				echo "<td>".$fila['ci']."</td>";
				echo "<td>".$fila['usuario']."</td>";
				echo "<td>".$fila['rol']."</td>";
				//echo '<a href="editar.php?ci='.$fila["ci"].'">Editar</a> ';
				//echo '<a href="eliminar.php?ci='.$fila["ci"].'">Eliminar</a>';
			echo "</tr>";
			}
		
			echo "</table>";
		}
		else{

			echo 'El email o password es incorrecto, <a href="/">vuelva a intenarlo</a>.<br/>';
		}
	?>

</body>

