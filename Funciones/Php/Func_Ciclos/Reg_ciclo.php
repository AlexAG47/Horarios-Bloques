<?php
    require ("../../../conexion.php");
    
    /* OBTENCION DE DATOS POR POST */
    $mes_inicio = $_POST['mes_inicio'];
    $mes_fin = $_POST['mes_fin'];
    $año = $_POST['año'];
    $descripcion = $_POST['descripcion'];

    /*REGISTRO DE DATOS DE CICLO*/
    $consulta = "INSERT INTO ciclos(
            id_ciclo,mes_inicio,
            mes_fin,año,dsc_ciclo) 
            VALUES('',
            UPPER('$mes_inicio'),
            UPPER('$mes_fin'),
            $año, UPPER('$descripcion'))";

    if($resultado= mysqli_query($conexion,$consulta)){

        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Registrar'";
        header("location:../../../Vistas/Ciclos.php");
         
        } else{
            session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
            $_SESSION["tipo_alerta"] = "'Error'";    
            header("location:../../../Vistas/Ciclos.php");
        }
?>