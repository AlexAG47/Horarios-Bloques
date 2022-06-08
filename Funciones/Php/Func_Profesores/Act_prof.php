<?php
    require ("../../../conexion.php");
    error_reporting(0); //DESACTIVAR NOTICES

    /* OBTENCION DE DATOS POR POST */
    $id_profesor = $_POST['id_profesor'];
    $ap_paterno = $_POST['ap_paterno'];
    $ap_materno = $_POST['ap_materno'];
    $nombre = $_POST['nombre'];

    /*REGISTRO DE DATOS DE MAESTRO*/
    $consulta = "UPDATE profesores
            SET ap_paterno = UPPER('$ap_paterno'),
                ap_materno = UPPER('$ap_materno'),
                nombre = UPPER('$nombre')
                WHERE id_profesor = '$id_profesor'";

    if($resultado= mysqli_query($conexion,$consulta)){

        
        /* OBTENCION DE MATERIAS QUE DA EL PROFESOR */
        $consulta = "DELETE FROM prof_imparte_mat WHERE id_profesor = '$id_profesor'";
        $resultado = mysqli_query($conexion, $consulta);

        foreach($_POST['materia'] as $key => $value) {
            $consulta = "INSERT INTO prof_imparte_mat(
                        id_profesor,id_materia)
                        VALUES(
                        '$id_profesor',
                        '$value')";

            $resultado= mysqli_query($conexion,$consulta);
        }

        /* VERIFICACION DE LOS BLOQUES QUE HAN SIDO SELECCIONADOS */

            //Eliminamos todos los bloques para registrar de nuevo los deseados
            $consulta = "DELETE FROM prof_tiene_disp WHERE id_profesor = '$id_profesor'";
            $resultado = mysqli_query($conexion, $consulta);

            if($_POST['bloque1']){ //Verificamos si el campo es diferente de null
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
            $_SESSION["tipo_alerta"] = "'Actualizar'";
            header("location:../../../Vistas/Profesores.php");
           
    
    } else{
        session_start(); //SE CREA SESION PARA ENVIAR PARAMETRO DE LA FUNCION DE ALERTA
        $_SESSION["tipo_alerta"] = "'Error'";  
        header("location:../../../Vistas/Profesores.php");
    }
       
    

?>