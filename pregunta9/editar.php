<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();
#var_dump($_GET['id']);
$id = $_GET['id'];

/*$activo = 1;
*/
$query = $con->prepare("SELECT ci, ap_paterno, ap_materno, departamento, fecha_nacimiento, nombe FROM person WHERE ci = :id");

/*$query = $con->prepare("INSERT INTO persona (ci, departamento, fecha_nac, nombre_completo) VALUES (:ci, :departamento, :fecha_nac, :nombre_completo)");*/
#$query->execute(['id' => $id, 'activo' => $activo]);
$query->execute(['id' => $id]);
$num = $query->rowCount();
if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4>Editar</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guarda.php" autocomplete="off">

                        <div class="col-md-3">
                            <label for="ci" class="form-label">CI</label>
                            <input type="text" id="ci" value="<?php echo $id; ?>" name="ci" class="form-control"  required autofocus>
                        </div>

                        <div class="col-md-3">
                            <label for="nombe" class="form-label">Nombre</label>
                            <input type="text" id="nombre" value="<?php echo $row['nombe']; ?>" name="nombre" class="form-control" required>
                        </div>

                        <div class="col-md-3">
                            <label for="nombe" class="form-label">Apellido paterno</label>
                            <input type="text" id="apelido_paterno" value="<?php echo $row['ap_paterno']; ?>" name="apelido_paterno" class="form-control" required>
                        </div>

                        <div class="col-md-3">
                            <label for="nombe" class="form-label">Apellido materno</label>
                            <input type="text" id="apelido_materno" value="<?php echo $row['ap_materno']; ?>" name="apelido_materno" class="form-control" required>
                        </div>

                        <div class="col-md-3">
                            <label for="fecha_nac" class="form-label">Fecha Nacimiento</label>
                            <input type="date" id="fecha_nac" name="fecha_nac" class="form-control" required autofocus value="<?php echo $row['fecha_nac']; ?>">
                        </div>

                        <div class="col-md-3">
                            <label for="departamento" class="form-label">Departamento</label>
                            <?php 
                                $dp=$row['departamento'];
                             ?>
                            <select class="form-control" name="departamento" required>
                                <option value="CH-01"
                                    <?php 
                                        if ($dp == 'CH-01')
                                            echo("selected");            
                                    ?>
                                >
                                Chuquisaca</option>
                                <option value="LP-02"
                                    <?php 
                                        if ($dp == 'LP-02')
                                            echo("selected");            
                                    ?>
                                >    
                                La Paz</option>
                                <option value="CB-03"
                                    <?php 
                                        if ($dp == 'CB-03')
                                            echo("selected");            
                                    ?>
                                >
                                Cochabamba</option>
                                <option value="OR-04"
                                    <?php 
                                        if ($dp == 'OR-04')
                                            echo("selected");            
                                    ?>
                                >
                                Oruro</option>
                                
                                <option value="PT-05"
                                    <?php 
                                        if ($dp == 'PT-05')
                                            echo("selected");            
                                    ?>
                                >
                                Potosi</option>
                                <option value="TJ-06"
                                    <?php 
                                        if ($dp == 'TJ-06')
                                            echo("selected");            
                                    ?>
                                >
                                Tarija</option>
                                <option value="SC-07"
                                    <?php 
                                        if ($dp == 'SC-07')
                                            echo("selected");            
                                    ?>
                                >Santa Cruz</option>
                                <option value="BE-08"
                                    <?php 
                                        if ($dp == 'BE-08')
                                            echo("selected");            
                                    ?>
                                >
                                Beni</option>
                                <option value="PD-09"
                                    <?php 
                                        if ($dp == 'PD-09')
                                            echo("selected");            
                                    ?>
                                >
                                Pando</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <a class="btn btn-dark" href="index.php">Regresar</a>
                            <button type="submit" class="btn btn-dark" name="registro">Actualizar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>