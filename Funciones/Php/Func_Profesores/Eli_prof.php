<?php 
    require ("../../../conexion.php");
    //Capturamos el id del profesor para borrar el registro correspondiente

    $id_profesor = $_POST['id_profesor'];
    //Primero se borran los registros de la tabla de disponibilidad que tenga ese profesor
    $consulta="DELETE FROM prof_tiene_disp WHERE id_profesor = '$id_profesor'";
   
    if($resultado = mysqli_query($conexion, $consulta)){

        //Se borra las materias que imparte el profesor
        $consulta="DELETE FROM prof_imparte_mat WHERE id_profesor = '$id_profesor'";

        $resultado = mysqli_query($conexion, $consulta)
        //Despues se procede a borrar al profesor 
        $consulta = "DELETE FROM profesores WHERE id_profesor = '$id_profesor'";
        
        $resultado = mysqli_query($conexion, $consulta)
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Eliminar'";
        header("location:../../../Vistas/Profesores.php");              
             
        
    } else {
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Error'";
        header("location:../../../Vistas/Profesores.php");
    }
    
?>