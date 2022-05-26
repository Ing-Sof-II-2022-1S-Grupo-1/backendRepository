function updateUsuario() {
    let nombre = '#form1'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/usuario/updateUsuario.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar actualizar el Usuario, intenta de nuevo");
            }
        }
    });
}

//Funciones DELETE
function deleteCamara() {
    let nombre = '#form2'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/camara/deleteCamara.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar la cámara, intenta de nuevo");
            }
        }
    });
}

function deleteSensor() {
    let nombre = '#form3'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/sensor/deleteSensor.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar el sensor, intenta de nuevo");
            }
        }
    });
}

function deleteUsuario() {
    let nombre = '#form4'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/usuario/deleteUsuario.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar el sensor, intenta de nuevo");
            }
        }
    });
}

function deleteSwitch() {
    let nombre = '#form5'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/switch/deleteSwitch.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar el sensor, intenta de nuevo");
            }
        }
    });
}

function deleteCCTV() {
    let nombre = '#form11'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/cctv/deleteCCTV.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar el sensor, intenta de nuevo");
            }
        }
    });
}

//FUNCIONES CREATE

function createUsuario() {
    let nombre = '#form6'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/usuario/createUsuario.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar el sensor, intenta de nuevo");
            }
        }
    });
}

function createCCTV() {
    let nombre = '#form7'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/cctv/createCCTV.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar el sensor, intenta de nuevo");
            }
        }
    });
}

function createCamara() {
    let nombre = '#form8'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/camara/createCamara.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar el sensor, intenta de nuevo");
            }
        }
    });
}

function createSensor() {
    let nombre = '#form9'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/sensor/createSensor.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar el sensor, intenta de nuevo");
            }
        }
    });
}

function createSwitch() {
    let nombre = '#form10'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/switch/createSwitch.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar el sensor, intenta de nuevo");
            }
        }
    });
}

//FUNCIONES UPDATE

function updateUsuario() {
    let nombre = '#form12'; //Nombre del formulario del cual deseamos extraer la información
    let datos = $(nombre).serialize(); //Serializamos la información para pasarla por PHP
    $.ajax({
        type: "POST", //Método de petición HTTP
        url: "CRUDs/usuario/updateUsuario.php", //Página PHP para hacer la Query
        data: datos, //Datos serializados para mandar a la URL PHP
        success: function(r) { //Despúes de correr la página PHP
            if (r == 1) { //Nos devuelve 1 si es exitosa la Query
                alert("Cambios Guardados con exito");
                window.location.reload();
                return 0;
            } else if (r == 2) { //Nos devuelve 2 si NO es exitosa la Query
                alert("Upps ha ocurrido un error al intentar borrar el sensor, intenta de nuevo");
            }
        }
    });
}