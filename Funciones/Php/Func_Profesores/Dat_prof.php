<?php //Se hace consulta a los datos del profesor en especifico para traerlos
    require('../../conexion.php');

    error_reporting(0); //DESACTIVAR NOTICES

    $id_profesor = $_POST['id_elemento']; 
    $consulta = "SELECT * FROM 
                profesores 
                WHERE id_profesor = '$id_profesor'";

    $resultado = mysqli_query($conexion,$consulta);
    $row = mysqli_fetch_assoc($resultado);

    //Consulta de bloques de disponibilidad
    $consulta2 = "SELECT 
                    prof_tiene_disp.id_disponibilidad
                    FROM prof_tiene_disp
                    WHERE id_profesor = '$id_profesor'";

    $resultado2 = mysqli_query($conexion,$consulta2);

    //Consulta de carreras
    $consulta3 = "SELECT * FROM carreras";

    $resultado3 = mysqli_query($conexion,$consulta3);

    //Consulta de materias
    $consulta4 = "SELECT * FROM materias";

    $resultado4 = mysqli_query($conexion,$consulta4);

    //Consulta de materias que imparte el profesor//
    $consulta5 = "SELECT  materias.id_materia, materias.nom_materia,
                    prof_imparte_mat.id_profesor,
                    prof_imparte_mat.id_materia
                    FROM prof_imparte_mat
                    INNER JOIN materias ON materias.id_materia = prof_imparte_mat.id_materia
                    WHERE id_profesor = '$id_profesor'";

    $resultado5 = mysqli_query($conexion,$consulta5);
?>