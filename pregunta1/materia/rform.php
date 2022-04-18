<?php
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
echo "Nombre".$nombre;
echo "Apellido".$apellido;
if (isset($_GET["ok"]))
	echo "acepto";
else
	echo "cancelo";
?>