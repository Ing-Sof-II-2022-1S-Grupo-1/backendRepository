<?php
require "../../resources/dbSelect.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron&display=swap">
    <title>Ejercicio Clase</title>
</head>

<body>
<div class="col-9">
                <?php
                //Conectamos para obtener la lista de personas
                $query = "SELECT * FROM cctv";
                $result = $conn->query($query);
                $numfilas = $result->num_rows;
                if ($numfilas > 0) {
                ?>
                    <!-- Tabla de Registros -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <center>ID</center>
                                </th>
                                <th scope="col">
                                    <center>Alias</center>
                                </th>
                                <th scope="col">
                                    <center>IP</center>
                                </th>
                                <th scope="col">
                                    <center>Estado</center>
                                </th>
                                <th scope="col">
                                    <center>Usuario Asociado</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < $numfilas; $i++) {
                                $aux = $result->fetch_object();
                            ?>
                                <tr>
                                    <form id="formVivienda<?php echo $aux->idCCTV; ?>" method="POST">
                                        <input type="hidden" name="idVivienda" value="<?php echo $aux->idCCTV; ?>">
                                        <th class="align-middle" scope="row"><?php echo $i + 1; ?></th>
                                        <td class="align-middle"><input name="Alias" id="Alias" class="form-control" form="formVivienda<?php echo $aux->idCCTV; ?>" type="text" value="<?php echo $aux->aliasCCTV; ?>"></td>
                                        <td class="align-middle"><input name="IP" id="IP" class="form-control" form="formVivienda<?php echo $aux->idCCTV; ?>" type="text" value="<?php echo $aux->direccionIPCCTV; ?>"></td>
                                        <td class="align-middle"><input name="Estado" id="Estado" class="form-control" form="formVivienda<?php echo $aux->idCCTV; ?>" type="number" value="<?php echo $aux->estadoCCTV; ?>"></td>
                                        <td class="align-middle"><input name="UsuarioAsociado" id="UsuarioAsociado" class="form-control" form="formVivienda<?php echo $aux->idCCTV; ?>" type="number" value="<?php echo $aux->Usuario_idUsuario; ?>"></td>
                                    </form>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                <?php
                } else {
                ?>
                    <h3>Upps... No hay Viviendas registradas</h3>
                <?php
                }
                cerrarConexion();
                ?>
            </div>



    
</body>