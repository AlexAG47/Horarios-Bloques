<?php
    require ("../../../conexion.php");
    error_reporting(0); //DESACTIVAR NOTICES

    /* OBTENCION DE DATOS POR POST */
    $id_ciclo = $_POST['id_ciclo'];
    $mes_inicio = $_POST['mes_inicio'];
    $mes_fin = $_POST['mes_fin'];
    $año = $_POST['año'];
    $descripcion = $_POST['descripcion'];

    /*REGISTRO DE DATOS DE CICLO*/
    $consulta = "UPDATE ciclos
            SET mes_inicio = UPPER('$mes_inicio'),
                mes_fin = UPPER('$mes_fin'),
                año = $año,
                dsc_ciclo = UPPER('$descripcion')
                WHERE id_ciclo = '$id_ciclo'";

    if($resultado= mysqli_query($conexion,$consulta)){
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Actualizar'";  
        header("location:../../../Vistas/Ciclos.php");
       
    } else{
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Error'";
        header("location:../../../Vistas/Ciclos.php");
    }
       
    

?>