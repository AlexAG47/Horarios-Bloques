//INSERTA UN TITULO DEPENDIENDO DE EN QUE PAGINA SE ENCUENTRE EL USUARIO
function insertaTitulo(origen_titulo){
    switch(origen_titulo){
        case 'Inicio':
            $("#titulo").html("Inicio")
            break;
        case 'Profesores':
            $("#titulo").html("Profesores")
            break;
         case 'Materias':
            $("#titulo").html("Materias")
            break;
        case 'Carreras':
            $("#titulo").html("Carreras")
            break;
        case 'Ciclos':
            $("#titulo").html("Ciclos");
            break;
        case 'Usuarios':
            $("#titulo").html("Usuarios");
            break;
        case 'Horarios':
            $("#titulo").html("Horarios");
            break;
        default:
            $("#titulo").html("Error al insertar titulo");
    }
}


/*Ciclos*/

//Crea una descripcion automatica de un ciclo, tomando como recursos los demas campos select
function creaDscCiclo(){
    $('#descripcion').val($('#mesInicio').val() + ' - ' + $('#mesFin').val() + ' ' + $('#año').val());
}

//Establece los options seleccionados dependiendo de los parametros recibidos
function valoresDefectoCiclo(mes_inicio,mes_fin){
    $('#mesInicio').val(mes_inicio);
    $('#mesFin').val(mes_fin);
}