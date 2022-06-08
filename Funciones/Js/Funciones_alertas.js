//Reconoce que tipo de alerta debe mostrar al tener una operacion
function confirmaAlerta(tipo_alerta){
    switch(tipo_alerta){
        case 'Registrar':
            $.ajax({
                url: "../Modulos/Alertas/Exito_reg.php",
                success: function(result){
                    $("#alerta").html(result);
                    desvanecerAlerta();
                }
            });
            break;

        case 'Actualizar':
            $.ajax({
                url: "../Modulos/Alertas/Exito_act.php",
                success: function(result){
                    $("#alerta").html(result);
                    desvanecerAlerta();
                }
            });
            break;

        case 'Eliminar':
            $.ajax({
                url: "../Modulos/Alertas/Exito_baja.php",
                success: function(result){
                    $("#alerta").html(result);
                    desvanecerAlerta();
                }
            });
            break;

        case 'Error':
            $.ajax({
                url: "../Modulos/Alertas/Error.php",
                success: function(result){
                    $("#alerta").html(result);
                    desvanecerAlerta();
                }
            });
            break;
        
        case 'ErrorLogin':
            $.ajax({
                url: "../Modulos/Alertas/Error_login.php",
                success: function(result){
                    $("#alerta").html(result);
                    desvanecerAlerta();
                }
            });
            break;
        
        default:
            $.ajax({
                url: "../Modulos/Alertas/Error.php",
                success: function(result){
                    $("#alerta").html(result);
                    desvanecerAlerta();
                }
            });
            break;

          
    }
}

//Desaparece la alerta despues de un determinado tiempo
function desvanecerAlerta(){
    $("#alerta").fadeTo(2000, 500).slideUp(500, function(){
        $("#alerta").slideUp(500);
    });
}

//Lanza una alerta dependiendo de si reconoce las alertas coinciden o no
function contrIguales(){
   if( $("#contr").val() == $("#contr2").val()){
       $("#msj_error").hide();
       $("#msj_ok").show();
       $("#msj_ok").html("Contraseñas iguales");
   } else {
       $("#msj_ok").hide()
       $("#msj_error").show()
       $("#msj_error").html("Contraseñas no coinciden");
    }
}

