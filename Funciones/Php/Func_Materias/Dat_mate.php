<?php //Se hace consulta a los datos de la materia en especifico para traerlos
    require('../../conexion.php');

    error_reporting(0); //DESACTIVAR NOTICES

    $id_materia = $_POST['id_elemento']; 
    $consulta = "SELECT carreras.id_carrera, carreras.nom_carrera,
                        semestres.id_semestre, semestres.dsc_semestre,
                        materias.id_materia, materias.nom_materia,
                        materias.clave, materias.bool_mat_doble,
                        materias.id_carrera as carrera_prof,
                        materias.id_semestre as semestre_prof
                        FROM materias
                        INNER JOIN carreras ON materias.id_carrera = carreras.id_carrera
                        INNER JOIN semestres ON materias.id_semestre = semestres.id_semestre
                        WHERE id_materia = '$id_materia'"; 

    $resultado = mysqli_query($conexion,$consulta);
    $row = mysqli_fetch_assoc($resultado);

    //Consulta de carreras
    $consulta2 = "SELECT * FROM carreras";

    $resultado2 = mysqli_query($conexion,$consulta2);

    //Consulta de semestres
    $consulta3 = "SELECT * FROM semestres";

    $resultado3 = mysqli_query($conexion,$consulta3);

    

?>