<?php
    require ("../../../conexion.php");
    
    /* OBTENCION DE DATOS POR POST */
    $nombre = $_POST['nombre'];
    $abreviatura = $_POST['abreviatura'];

    /*REGISTRO DE DATOS DE MATERIA*/
    $consulta = "INSERT INTO carreras(
            id_carrera,nom_carrera,abrev_carrera) 
            VALUES('',
            UPPER('$nombre'),
            UPPER('$abreviatura'))";

    if($resultado= mysqli_query($conexion,$consulta)){

        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Registrar'";
        header("location:../../../Vistas/Carreras.php");
         
        } else{
            session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
            $_SESSION["tipo_alerta"] = "'Error'";    
            header("location:../../../Vistas/Carreras.php");
        }
?>