<?php
    require ("../../../conexion.php");
    
    /* OBTENCION DE DATOS POR POST */
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $carrera = $_POST['carrera'];
    $semestre = $_POST['semestre'];
    $doble = $_POST['doble'];

    if($doble != 1){ //LE PASA UN VALOR NULO O FALSE PARA PODER SER REGISTRADO EN CASO DE QUE NO TENGA VALOR
        $doble = 0;
    }

    /*REGISTRO DE DATOS DE MATERIA*/
    $consulta = "INSERT INTO materias(
            id_materia,nom_materia,
            clave,bool_mat_doble,
            id_carrera,id_semestre) 
            VALUES('',
            UPPER('$nombre'),
            UPPER('$clave'),
            $doble,$carrera,
            $semestre)";

    if($resultado= mysqli_query($conexion,$consulta)){

        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Registrar'";
        header("location:../../../Vistas/Materias.php");
         
        } else{
            session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
            $_SESSION["tipo_alerta"] = "'Error'";    
            //header("location:../../../Vistas/Materias.php");
            echo $doble;
            
        }
?>