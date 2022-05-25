function updateUsuario() {
    let nombre = '#form1'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize();  //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST",   //Método de petición HTTP
        url: "CRUDs/usuario/updateUsuario.php",     //Página PHP para hacer la Query
        data: datos,      //Datos serializados para mandar a la URL PHP
        success: function(r) {      //Despúes de correr la página PHP
            if (r == 1) {      //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) {  //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar actualizar el Usuario, intenta de nuevo");
            }
        }
    });
}

//Funciones DELETE
function deleteCamara() {
    let nombre = '#form2'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize();  //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST",   //Método de petición HTTP
        url: "CRUDs/usuario/deleteCamara.php",     //Página PHP para hacer la Query
        data: datos,      //Datos serializados para mandar a la URL PHP
        success: function(r) {      //Despúes de correr la página PHP
            if (r == 1) {      //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) {  //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar la cámara, intenta de nuevo");
            }
        }
    });
}
function deleteSensor() {
    let nombre = '#form3'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize();  //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST",   //Método de petición HTTP
        url: "CRUDs/usuario/deleteSensor.php",     //Página PHP para hacer la Query
        data: datos,      //Datos serializados para mandar a la URL PHP
        success: function(r) {      //Despúes de correr la página PHP
            if (r == 1) {      //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) {  //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar el sensor, intenta de nuevo");
            }
        }
    });
}

