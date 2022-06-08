function obtenTipoModal(tipo_modal,origen_modal,id_elemento){       

    switch(tipo_modal){
        case "Registrar":   
            obtenModalReg(origen_modal,id_elemento);
            break;

        case "Revisar":
            obtenModalRev(origen_modal,id_elemento);
            break;

        case "Actualizar":
            obtenModalAct(origen_modal,id_elemento);
            break;

        case "Eliminar":
            obtenModalEli(origen_modal,id_elemento);
            break;

        default:
            $("#tituloModal").html("Error al insertar el tipo de modal");
            break;
    }
}

function obtenModalReg(origen_modal){

    switch(origen_modal){
        case "Profesores":
            $("#tituloModal").html("Registrar Profesor");
            $.ajax({
                url: "../Modulos/Forms_Profesores/F_reg_prof.php",
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Materias":
            $("#tituloModal").html("Registrar Materia");
            $.ajax({
                url: "../Modulos/Forms_Materias/F_reg_mate.php",
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Carreras":
            $("#tituloModal").html("Registrar Carrera");
            $.ajax({
                url: "../Modulos/Forms_Carreras/F_reg_carre.php",
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Ciclos":
            $("#tituloModal").html("Registrar Ciclo");
            $.ajax({
                url: "../Modulos/Forms_Ciclos/F_reg_ciclo.php",
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Usuarios":
            $("#tituloModal").html("Registrar Usuario");
            $.ajax({
                url: "../Modulos/Forms_Usuarios/F_reg_usua.php",
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;
        
        case "Horarios":
            $("#tituloModal").html("Registrar Horario");
            $.ajax({
                url: "../Modulos/Forms_Horarios/F_reg_hor.php",
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;
    }
}

function obtenModalRev(origen_modal,id_elemento){
    switch(origen_modal){
        case "Profesores":
            $("#tituloModal").html("Ver Profesor");
            $.ajax({
                url: "../Modulos/Forms_Profesores/F_rev_prof.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Materias":
            $("#tituloModal").html("Ver Materia");
            $.ajax({
                url: "../Modulos/Forms_Materias/F_rev_mate.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Carreras":
            $("#tituloModal").html("Ver Carrera");
            $.ajax({
                url: "../Modulos/Forms_Carreras/F_rev_carre.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Ciclos":
            $("#tituloModal").html("Ver Ciclo");
            $.ajax({
                url: "../Modulos/Forms_Ciclos/F_rev_ciclo.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Usuarios":
            $("#tituloModal").html("Ver Usuario");
            $.ajax({
                url: "../Modulos/Forms_Usuarios/F_rev_usua.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;
    }
}

function obtenModalAct(origen_modal,id_elemento){
    switch(origen_modal){
        case "Profesores":
            $("#tituloModal").html("Actualizar Profesor");
            $.ajax({
                url: "../Modulos/Forms_Profesores/F_act_prof.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Materias":
            $("#tituloModal").html("Actualizar Materia ");
            $.ajax({
                url: "../Modulos/Forms_Materias/F_act_mate.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Carreras":
            $("#tituloModal").html("Actualizar Carrera");
            $.ajax({
                url: "../Modulos/Forms_Carreras/F_act_carre.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Ciclos":
            $("#tituloModal").html("Actualizar Ciclo");
            $.ajax({
                url: "../Modulos/Forms_Ciclos/F_act_ciclo.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Usuarios":
            $("#tituloModal").html("Actualizar Usuario");
            $.ajax({
                url: "../Modulos/Forms_Usuarios/F_act_usua.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;
    }
}

function obtenModalEli(origen_modal,id_elemento){
    switch(origen_modal){
        case "Profesores":
            $("#tituloModal").html("Eliminar Profesor");
            $.ajax({
                url: "../Modulos/Forms_Profesores/F_eli_prof.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Materias":
            $("#tituloModal").html("Eliminar Materia");
            $.ajax({
                url: "../Modulos/Forms_Materias/F_eli_mate.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Carreras":
            $("#tituloModal").html("Eliminar Carrera");
            $.ajax({
                url: "../Modulos/Forms_Carreras/F_eli_carre.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Ciclos":
            $("#tituloModal").html("Eliminar Ciclo");
            $.ajax({
                url: "../Modulos/Forms_Ciclos/F_eli_ciclo.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        case "Usuarios":
            $("#tituloModal").html("Eliminar Usuario");
            $.ajax({
                url: "../Modulos/Forms_Usuarios/F_eli_usua.php",
                type: "POST",
                data: {id_elemento:id_elemento},
                success: function(result){
                    $("#cuerpoModal").html(result);
                }
            });
            break;

        
    }
}

