<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if (isset($_POST['id'])) {

    var_dump($_POST['ci']);
    $ci = $_POST['ci'];
    $departamento = $_POST['departamento'];
    $fecha_nac = $_POST['fecha_nac'];
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['apelido_paterno'];
    $ap_materno = $_POST['apelido_materno'];
    /*$inventariable = isset($_POST['inventariable']) ? $_POST['inventariable'] : 0;*/

    /*if ($stock == '') {
        $stock = 0;
    }*/

    $query = $con->prepare("UPDATE person SET ci=?, ap_paterno=?, ap_materno=?, departamento=?, fecha_nac=?, nombe=? WHERE ci=?");
    $resultado = $query->execute(array($ci, $ap_paterno, $ap_materno, $departamento, $fecha_nac, $nombre));

    if ($resultado) {
        $correcto = true;
    }
} else {
    //var_dump($_POST['ci']);
    $ci = $_POST['ci'];
    $departamento = $_POST['departamento'];
    $fecha_nac = $_POST['fecha_nac'];
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['apelido_paterno'];
    $ap_materno = $_POST['apelido_materno'];

/*    $inventariable = isset($_POST['inventariable']) ? $_POST['inventariable'] : 0;
*/
    /*if ($stock == '') {
        $stock = 0;
    }*/

    $query = $con->prepare("INSERT INTO person (ci, ap_paterno, ap_materno, departamento, fecha_nacimiento, nombe) VALUES (:ci, :ap_paterno, :ap_materno, :departamento, :fecha_nacimiento, :nombe)");
    $resultado = $query->execute(array('ci' => $ci, 'ap_paterno' => $ap_paterno, 'ap_materno' => $ap_materno, 'departamento' => $departamento, 'nombe' => $nombre, 'fecha_nacimiento' => $fecha_nac));

    if ($resultado) {
        $correcto = true;
/*        echo $con->lastInsertId();
*/    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <?php if ($correcto) { ?>
                        <h3>Registro guardado</h3>
                    <?php } else { ?>
                        <h3>Error al guardar</h3>
                    <?php }  ?>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a class="btn btn-dark" href="index.php">Regresar</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>