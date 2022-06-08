<?php //Se hace consulta a los datos de el usuario en especifico para traerlos
    require('../../conexion.php');

    error_reporting(0); //DESACTIVAR NOTICES

    $id_usuario = $_POST['id_elemento']; 
    $consulta = "SELECT * FROM usuarios
                 WHERE id_usuario = '$id_usuario'";

    $resultado = mysqli_query($conexion,$consulta);
    $row = mysqli_fetch_assoc($resultado);

?>