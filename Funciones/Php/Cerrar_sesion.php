<?php
      session_start();
      if($_SESSION['registrado']){
        session_destroy();
        header("location:../../Vistas/Login.php");
     }
?>