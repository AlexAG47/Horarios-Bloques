<!-- Traemos una consulta de datos para la materia en especifico -->
<?php require('../../Funciones/Php/Func_Horarios/Dat_hor.php'); ?>

<!-- LA RUTA DEBE SER DESDE DONDE SE INCLUYE EL FORM Y EL MODAL -->
<form method="POST" action="../Funciones/Php/Func_Horarios/Reg_hor.php"> 

    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Carrera:</label></strong>
        <select class="form-select" aria-label="Default select example" name="carrera">
        <!-- Ciclo que trae todas las carreras -->
        <?php foreach($resultado as $carrera){ ?>
            <option value="<?php echo $carrera['id_carrera']?>"><?php echo $carrera['nom_carrera']?></option>";
       <?php } ?>

        </select>
    </div>

    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Semestre:</label></strong>
        <select class="form-select" aria-label="Default select example" name="semestre">
            <!-- Ciclo que trae todos los semestres -->
            <?php foreach($resultado2 as $semestre){ ?>
                <option value="<?php echo $semestre['id_semestre']?>"><?php echo $semestre['dsc_semestre']?></option>";
            <?php } ?>
    
        </select>
    </div>

    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Ciclo:</label></strong>
        <select class="form-select" aria-label="Default select example" name="ciclo">
            <!-- Ciclo que trae todos los semestres -->
            <?php foreach($resultado3 as $ciclo){ ?>
                <option value="<?php echo $ciclo['id_ciclo']?>"><?php echo $ciclo['dsc_ciclo']?></option>";
            <?php } ?>
    
        </select>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success" id="botonModal">Registrar</button>
    </div>
</form>