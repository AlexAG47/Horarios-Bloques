<?php 
    require ("../../../conexion.php");
    //Capturamos el id de la carrera para borrar el registro correspondiente

    $id_carrera = $_POST['id_carrera'];

    $consulta = "DELETE FROM carreras WHERE id_carrera = '$id_carrera'";
    
    if($resultado = mysqli_query($conexion, $consulta)){
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Eliminar'";
        header("location:../../../Vistas/Carreras.php");
    } else {
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Error'";
        header("location:../../../Vistas/Carreras.php");
    }
?>