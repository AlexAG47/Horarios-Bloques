<?php
       if(!$_SESSION['registrado']){
        header("location:../Vistas/Login.php");
        die;
     }
?>