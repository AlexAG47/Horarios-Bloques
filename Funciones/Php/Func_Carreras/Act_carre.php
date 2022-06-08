<?php
    require ("../../../conexion.php");
    error_reporting(0); //DESACTIVAR NOTICES

    /* OBTENCION DE DATOS POR POST */
    $id_carrera = $_POST['id_carrera'];
    $nombre = $_POST['nombre'];
    $abreviatura = $_POST['abreviatura'];

    /*REGISTRO DE DATOS DE CARRERA*/
    $consulta = "UPDATE carreras
            SET nom_carrera = UPPER('$nombre'),
                abrev_carrera = UPPER('$abreviatura')
                WHERE id_carrera = '$id_carrera'";

    if($resultado= mysqli_query($conexion,$consulta)){
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Actualizar'";  
        header("location:../../../Vistas/Carreras.php");
       
    } else{
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Error'";
        header("location:../../../Vistas/Carreras.php");
    }
       
    

?>