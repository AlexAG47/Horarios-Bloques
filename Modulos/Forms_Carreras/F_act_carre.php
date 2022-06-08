<!-- Traemos una consulta de datos para la carrera en especifico -->
<?php require('../../Funciones/Php/Func_Carreras/Dat_carre.php'); ?>

<!-- LA RUTA DEBE SER DESDE DONDE SE INCLUYE EL FORM Y EL MODAL -->
<form method="POST" action="../Funciones/Php/Func_Carreras/Act_carre.php">
    
<input id="id_carrera" name="id_carrera"type="hidden" value="<?php echo $_POST['id_elemento']; ?> "></input>

    <div class="mb-3">                                                     
        <strong><label for="recipient-name" class="col-form-label">Nombre:</label></strong>
        <input type="text" class="form-control text-uppercase" name="nombre" 
        value="<?php echo $row['nom_carrera']; ?>" required>
    </div>

    <div class="mb-3">                                                     
        <strong><label for="recipient-name" class="col-form-label">Abreviatura para la carrera:</label></strong>
        <input type="text" class="form-control text-uppercase" name="abreviatura" 
        value="<?php echo $row['abrev_carrera']; ?>" required>
    </div>
    
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="botonModal">Actualizar</button>
    </div>
</form>