<?php
    require ("../../../conexion.php");
    
    /* OBTENCION DE DATOS POR POST */
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contr'];
    

    /*REGISTRO DE DATOS DE MATERIA*/
    $consulta = "INSERT INTO usuarios(
            id_usuario,nombre,
            ap_paterno,ap_materno,
            correo,contraseña) 
            VALUES('',
            UPPER('$nombre'),
            UPPER('$ap_paterno'),
            UPPER('$ap_materno'),
            '$correo', '$contraseña')";

    if($resultado= mysqli_query($conexion,$consulta)){

        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Registrar'";
        header("location:../../../Vistas/Usuarios.php");
         
        } else{
            session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
            $_SESSION["tipo_alerta"] = "'Error'";
            echo $nombre;
            echo $ap_paterno;
            echo $ap_materno;
            echo $correo;
            echo $contraseña;
            //header("location:../../../Vistas/Usuarios.php");
        }
?>