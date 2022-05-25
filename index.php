<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <h1>Vamos a hacer una consulta</h1>
    <div>
        <form id="form1" method="POST">
            <input type="text" name="idUsuario" placeholder="IDUsuario">
            <input type="text" name="nombresUsuario" placeholder="Nombre Usuario">
            <button type="button" onclick="updateUsuario();" class="btn btn-primary">Hacer consulta</button>
        </form>
    </div>
    <h1>Borremos una cámara:</h1>
    <div>
        <form id="form2" method="POST">
            <input type="text" name="idCamara" placeholder="Id de la cámara a borrar">
            <button type="button" onclick="deleteCamara();" class="btn btn-primary">Borrar camara</button>
        </form>
    </div>
    <h1>Borremos un sensor</h1>
    <div>
        <form id="form3" method="POST">
            <input type="text" name="idSensor" placeholder="Id del sensor a borrar">
            <button type="button" onclick="deleteSensor();" class="btn btn-primary">Borrar sensor</button>
        </form>
    </div>
</body>

<script src = "funcionesCRUD.js"></script>

</html>