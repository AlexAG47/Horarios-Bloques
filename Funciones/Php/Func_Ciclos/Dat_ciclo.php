<?php //Se hace consulta a los datos de el ciclo en especifico para traerlos
    require('../../conexion.php');

    error_reporting(0); //DESACTIVAR NOTICES

    $id_ciclo = $_POST['id_elemento']; 
    $consulta = "SELECT * FROM ciclos WHERE id_ciclo = '$id_ciclo'";
    
    $resultado = mysqli_query($conexion,$consulta);
    $row = mysqli_fetch_assoc($resultado); 

    //Se guardan estos datos en variable para enviarlos a la funcion de seleccionar options
    $mes_inicio = $row['mes_inicio'];
    $mes_fin = $row['mes_fin'];
?>