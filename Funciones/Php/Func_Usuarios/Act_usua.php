<?php
    require ("../../../conexion.php");
    error_reporting(0); //DESACTIVAR NOTICES

    /* OBTENCION DE DATOS POR POST */
    $id_usuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contr'];

    /*REGISTRO DE DATOS DE MATERIA*/
    $consulta = "UPDATE usuarios
            SET nombre = UPPER('$nombre'),
                ap_paterno = UPPER('$ap_paterno'),
                ap_materno = UPPER('$ap_materno'),
                correo = '$correo',
                contraseña = '$contraseña'
                WHERE id_usuario = '$id_usuario'";

    if($resultado= mysqli_query($conexion,$consulta)){
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Actualizar'";  
        header("location:../../../Vistas/Usuarios.php");
       
    } else{
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Error'";
        header("location:../../../Vistas/Usuarios.php");
    }
       
    

?>