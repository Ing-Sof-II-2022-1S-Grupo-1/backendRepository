<!DOCTYPE html>
<html lang="en">

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
    Vamos a hacer una consulta
    <div>
        <form id="form1" method="POST">
            <input type="text" name="idUsuario" placeholder="IDUsuario">
            <input type="text" name="nombresUsuario" placeholder="Nombre Usuario">
            <button type="button" onclick="updateUsuario();" class="btn btn-primary" form="formCreate">Hacer consulta</button>
        </form>
    </div>

</body>
<script>
    function updateUsuario() {
        let nombre = '#form1';
        let datos = $(nombre).serialize();
        $.ajax({
            type: "POST",
            url: "CRUDs/usuario/updateUsuario.php",
            data: datos,
            success: function(r) {
                if (r == 1) {
                    alert("Cambios Guardados con exito");
                    window.location.reload();
                    return 0;
                } else if (r == 2) {
                    alert("Upps ha ocurrido un error al intentar actualizar el Usuario, intenta de nuevo");
                }
            }
        });
    }
</script>

</html>