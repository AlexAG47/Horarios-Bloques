<?php //Se hace consulta a los datos de la materia en especifico para traerlos
    require('../../conexion.php');

    error_reporting(0); //DESACTIVAR NOTICES

    $id_materia = $_POST['id_elemento']; 

    //Consulta de carreras
    $consulta = "SELECT * FROM carreras";

    $resultado = mysqli_query($conexion,$consulta);

    
    //Consulta de semestres
    $consulta2 = "SELECT * FROM semestres";

    $resultado2 = mysqli_query($conexion,$consulta2);

    //Consulta de ciclos
    $consulta3 = "SELECT * FROM ciclos";

    $resultado3 = mysqli_query($conexion,$consulta3);
   


    

?>