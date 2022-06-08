<?php //Se hace consulta a los datos de la carrera en especifico para traerlos
    require('../../conexion.php');

    error_reporting(0); //DESACTIVAR NOTICES

    $id_carrera = $_POST['id_elemento']; 
    $consulta = "SELECT * FROM carreras WHERE id_carrera = '$id_carrera'";
    
    $resultado = mysqli_query($conexion,$consulta);
    $row = mysqli_fetch_assoc($resultado); 

?>