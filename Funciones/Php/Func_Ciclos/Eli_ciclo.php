<?php 
    require ("../../../conexion.php");
    //Capturamos el id de la carrera para borrar el registro correspondiente

    $id_ciclo= $_POST['id_ciclo'];

    $consulta = "DELETE FROM ciclos WHERE id_ciclo = '$id_ciclo'";
    
    if($resultado = mysqli_query($conexion, $consulta)){
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Eliminar'";
        header("location:../../../Vistas/Ciclos.php");
    } else {
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Error'";
        header("location:../../../Vistas/Ciclos.php");
    }
?>