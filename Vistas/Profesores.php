<?php session_start();?> <!-- Crea sesion para la verificacion de tipo_alerta -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/Profesores.css" rel="stylesheet">

    <!-- Importacion de recursos generales -->
    <?php 
        require('../Librerias/Graficos.php'); 
        require('../conexion.php');  
    ?>

    <title>Profesores</title>
</head>
<body>

    <!-- Importacion de modulos -->
    <?php require('../Modulos/Menu_lateral_izq.php'); ?>
    <?php require('../Modulos/Menu_superior.php'); ?>
    
     <!-- Tabla de contenido -->
    <div class="container-sm row d-flex justify-content-center">
        <div class="col-sm-12" id="cuerpoContenedor">
        <div id="alerta"></div>
            <table class="table table-hover">
                <thead>
                    <tr class="table-primary">
                        <th scope="col" class="">#ID</th>
                        <th scope="col">AP PATERNO</th>
                        <th scope="col">AP MATERNO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">BLOQUE DISP.</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Importacion de funcion para mostrar los profesores -->
                   
                    <?php
                        //$tipo_modal - Se refiere al sentido del modal general (Registrar, Actualizar, etc.)
                        $origen_modal = "'Profesores'"; //Se refiere a quien pertenece el proceso anterior (Profesores, Materias, etc.) 
                        require('../Funciones/Php/Func_Profesores/Mos_prof.php');
                    ?>               
                </tbody> 
            </table>
        </div>  
    <div>

    <!-- Cargamos la ventana modal que mandaremos a llamar cada vez que sea necesario -->
    <?php require('../Modulos/Ventana_modal.php'); ?>

    <!-- Importación de ventana modal correspondiente al registro de sus tablas -->
    <?php require('../Modulos/Boton_agregar.php'); ?>

    <!--  Funciones  -->
    <script type="text/javascript" src="../Funciones/Js/Funciones_especificas.js"></script>
    <script type="text/javascript" src="../Funciones/Js/Funciones_modales.js"></script>
    <script type="text/javascript" src="../Funciones/Js/Funciones_alertas.js"></script>
    <script type="text/javascript" src="../Funciones/Js/Funciones_validar.js"></script>
    <script>insertaTitulo(<?php echo "'Profesores'" ?>);</script>

    <!-- Verifica si puede mostrar la alerta al hacer una operacion exitosa -->
    <?php require('../Funciones/Php/Sesion_alerta.php'); ?> 
    
    

</body>
</html>