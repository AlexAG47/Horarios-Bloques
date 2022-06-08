<?php
    require ("../../../conexion.php");
    error_reporting(0); //DESACTIVAR NOTICES

    /* OBTENCION DE DATOS POR POST */
    $id_materia = $_POST['id_materia'];
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $carrera = $_POST['carrera'];
    $semestre = $_POST['semestre'];
    $doble = $_POST['doble'];

    if($doble != 1){ //LE PASA UN VALOR NULO O FALSE PARA PODER SER REGISTRADO EN CASO DE QUE NO TENGA VALOR
        $doble = NULL;
    }

    /*REGISTRO DE DATOS DE MATERIA*/
    $consulta = "UPDATE materias
            SET nom_materia = UPPER('$nombre'),
                clave = UPPER('$clave'),
                bool_mat_doble = '$doble',
                id_carrera = '$carrera',
                id_semestre = '$semestre'
                WHERE id_materia = '$id_materia'";

    if($resultado= mysqli_query($conexion,$consulta)){
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Actualizar'";  
        header("location:../../../Vistas/Materias.php");
       
    } else{
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Error'";
        header("location:../../../Vistas/Materias.php");
    }
       
    

?>