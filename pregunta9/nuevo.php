<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4>Nuevos registro</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guarda.php" autocomplete="off">

                        <div class="col-md-2">
                            <label for="ci" class="form-label">CI</label>
                            <input type="text" id="ci" name="ci" class="form-control" required autofocus>
                        </div>

                        <div class="col-md-4">
                            <label for="nombre_completo" class="form-label">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" required>
                        </div>

                        <div class="col-md-3">
                            <label for="apelido_paterno" class="form-label">apelido paterno</label>
                            <input type="text" id="apelido_paterno" name="apelido_paterno" class="form-control" required>
                        </div>

                        <div class="col-md-3">
                            <label for="apelido_materno" class="form-label">apelido materno</label>
                            <input type="text" id="apelido_materno" name="apelido_materno" class="form-control" required>
                        </div>

                        <div class="col-md-3">
                            <label for="fecha_nac" class="form-label">Fecha Nacimiento</label>
                            <input type="date" id="fecha_nac" name="fecha_nac" class="form-control" required autofocus>
                        </div>

                        <div class="col-md-2">
                            <label for="departamento" class="form-label">Departamento</label>
                            <!-- <input type="text" id="departamento" name="departamento" class="form-control" required> -->
                            <select class="form-control" name="departamento" required>
                                <option value="CH-01">Chuquisaca</option>
                                <option value="LP-02">La Paz</option>
                                <option value="CB-03">Cochabamba</option>
                                <option value="OR-04">Oruro</option>
                                <option value="PT-05">Potosi</option>
                                <option value="TJ-06">Tarija</option>
                                <option value="SC-07">Santa Cruz</option>
                                <option value="BE-08">Beni</option>
                                <option value="PD-09">Pando</option>   
                                
                            </select>
                        </div>


                        <div class="col-md-12">
                            <a class="btn btn-dark" href="index.php">Regresar</a>
                            <button type="submit" class="btn btn-dark" name="registro">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>