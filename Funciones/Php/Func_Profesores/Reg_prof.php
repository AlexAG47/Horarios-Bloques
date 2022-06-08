<?php
    require ("../../../conexion.php");
    
    error_reporting(0); //DESACTIVAR NOTICES

    /* OBTENCION DE DATOS POR POST */
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $nombre = $_POST['nombre'];

    /* REGISTRO DE DATOS DE MAESTRO */
    $consulta = "INSERT INTO profesores(
            id_profesor,ap_paterno,
            ap_materno,nombre) 
            VALUES('',
            UPPER('$ap_paterno'),
            UPPER('$ap_materno'),
            UPPER('$nombre'))";

    if($resultado= mysqli_query($conexion,$consulta)){

         /*OBTENER ID DE PROFESOR PARA EL REGISTRO DE SUS BLOQUES Y MATERIAS*/
         $consulta = "SELECT id_profesor 
         FROM profesores 
         WHERE ap_paterno = '$ap_paterno' 
         AND ap_materno = '$ap_materno'
         AND nombre = '$nombre'";
 
         $resultado= mysqli_query($conexion,$consulta);
         $row = mysqli_fetch_assoc($resultado);
         $id_profesor = $row['id_profesor']; //Guardamos el id del profesor en una variable
 

        /* OBTENCION DE MATERIAS QUE DA EL PROFESOR */
        foreach($_POST['materia'] as $key => $value) {
            $consulta = "INSERT INTO prof_imparte_mat(
                        id_profesor,id_materia)
                        VALUES(
                        '$id_profesor',
                        '$value')";

            $resultado= mysqli_query($conexion,$consulta);
        }

        /* VERIFICACION DE LOS BLOQUES QUE HAN SIDO SELECCIONADOS */

        if($_POST['bloque1']){ 
            $bloque1 = $_POST['bloque1'];
            $consulta = "INSERT INTO prof_tiene_disp(
                    id_profesor,id_disponibilidad)
                    VALUES(
                    '$id_profesor','$bloque1')";

            $resultado= mysqli_query($conexion,$consulta); 
            }

        if($_POST['bloque2']){
            $bloque2 = $_POST['bloque2'];
            $consulta = "INSERT INTO prof_tiene_disp(
                id_profesor,id_disponibilidad)
                VALUES(
                '$id_profesor','$bloque2')";
        
            $resultado= mysqli_query($conexion,$consulta); 
            }
        
        if($_POST['bloque3']){
            $bloque3 = $_POST['bloque3'];
            $consulta = "INSERT INTO prof_tiene_disp(
                id_profesor,id_disponibilidad)
                VALUES(
                '$id_profesor','$bloque3')";
        
            $resultado= mysqli_query($conexion,$consulta); 
        }
        
        if($_POST['bloque4']){
            $bloque4 = $_POST['bloque4'];
            $consulta = "INSERT INTO prof_tiene_disp(
                id_profesor,id_disponibilidad)
                VALUES(
                '$id_profesor','$bloque4')";
        
            $resultado= mysqli_query($conexion,$consulta); 
        }
        
        if($_POST['bloque5']){
            $bloque5 = $_POST['bloque5'];
            $consulta = "INSERT INTO prof_tiene_disp(
                id_profesor,id_disponibilidad)
                VALUES(
                '$id_profesor','$bloque5')";
        
            $resultado= mysqli_query($conexion,$consulta); 
        }

        if($_POST['bloque6']){
            $bloque6 = $_POST['bloque6'];
            $consulta = "INSERT INTO prof_tiene_disp(
                id_profesor,id_disponibilidad)
                VALUES(
                '$id_profesor','$bloque6')";
        
            $resultado= mysqli_query($conexion,$consulta); 
        }
        
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Registrar'";
        header("location:../../../Vistas/Profesores.php");
            
            
    } else {
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Error'";    
        header("location:../../../Vistas/Profesores.php");
    }  

?>