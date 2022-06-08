<?php 
    require ("../../../conexion.php");
    //Capturamos el id del profesor para borrar el registro correspondiente

    $id_usuario = $_POST['id_usuario'];

    $consulta = "DELETE FROM usuarios WHERE id_usuario = '$id_usuario'";
    
    if($resultado = mysqli_query($conexion, $consulta)){
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Eliminar'";
        header("location:../../../Vistas/Usuarios.php");
    } else {
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Error'";
        header("location:../../../Vistas/Usuarios.php");
    }
?>