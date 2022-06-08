<?php 
    require ("../../../conexion.php");
    //Capturamos el id del profesor para borrar el registro correspondiente

    $id_materia = $_POST['id_materia'];

    $consulta = "DELETE FROM materias WHERE id_materia = '$id_materia'";
    
    if($resultado = mysqli_query($conexion, $consulta)){
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Eliminar'";
        header("location:../../../Vistas/Materias.php");
    } else {
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Error'";
        header("location:../../../Vistas/Materias.php");
    }
?>