

function main() {
    const fechaInicio = $('#txt_fecha_inicio').val();
    const fechaFin = $('#txt_fecha_fin').val();
    if (!validacion_campos(fechaInicio, fechaFin)) return;
    obtener_datos(fechaInicio, fechaFin);
    console.log("SI PASA__")
}

function validacion_campos(fechaInicio, fechaFin) {
    let validation = false;
    if (fechaInicio !== '' && fechaFin !== '') validation = true;
    else {
        alert("por favor, ingreser los campos");
        validation = false;
    }
    return validation;
}

function obtener_datos(fechaInicio, fechaFin) {
    try {
        var datos={
            "fechaInicio":fechaInicio,
            "fechaFin":fechaFin,
        };
        console.log(datos)
        $.ajax(
            {
                type: "GET",
                url: "controlador.php",
                data: datos,
                success: function (response)
                {

                    console.log("SI LLEGA AQUI")
                    console.log(response)
                    /* if(typeof(response.Mensaje)!="undefined")
                    {
                        if(response.Ejecucion)
                        {
                            if(typeof(response.Mensaje.Mensaje)!="undefined")
                            {
                                
                                    $("#Fm_Mayor").trigger("submit");
                                   alert(response.Mensaje.Mensaje);
                                window.location.replace(window.location);
                               
                               
                            }
                            else
                            {
                               
                                alert(response.Mensaje);
                                window.location.replace(window.location);
                            }
                        }
                        else alert(response.Mensaje);
                    } */
                }
            }); 
    } catch (error) {
        console.log(error);
    }
}

