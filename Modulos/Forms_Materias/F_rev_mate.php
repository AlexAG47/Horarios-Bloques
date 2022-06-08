<!-- Traemos una consulta de datos para la materia en especifico -->
<?php require('../../Funciones/Php/Func_Materias/Dat_mate.php'); ?>

<!-- LA RUTA DEBE SER DESDE DONDE SE INCLUYE EL FORM Y EL MODAL -->
<form> 
    <div class="mb-3">                                                     
        <strong><label for="recipient-name" class="col-form-label">Nombre:</label></strong>
        <br><label for="recipient-name" class="col-form-label"><?php echo $row['nom_materia']; ?></label>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Clave:</label></strong>
        <br><label for="recipient-name" class="col-form-label"><?php echo $row['clave']; ?></label>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Carrera:</label></strong>
        <br><label for="recipient-name" class="col-form-label"><?php echo $row['nom_carrera']; ?></label>
        </select>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Semestre:</label></strong>
        <br><label for="recipient-name" class="col-form-label"><?php echo $row['dsc_semestre']; ?></label>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Materia de doble bloque:</label></strong>
        <br><label for="recipient-name" class="col-form-label">
            <?php
                if($row['bool_mat_doble'] == 1){
                    echo "SI";
                } else {
                    echo "NO";
                }
            ?>
        </label>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    </div>
</form>