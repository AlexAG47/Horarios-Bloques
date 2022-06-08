<!-- Traemos una consulta de datos para la materia en especifico -->
<?php require('../../Funciones/Php/Func_Materias/Dat_mate.php'); ?>

<!-- LA RUTA DEBE SER DESDE DONDE SE INCLUYE EL FORM Y EL MODAL -->
<form method="POST" action="../Funciones/Php/Func_Materias/Act_mate.php">
    
<input id="id_materia" name="id_materia"type="hidden" value="<?php echo $_POST['id_elemento']; ?> "></input>

    <div class="mb-3">                                                     
        <strong><label for="recipient-name" class="col-form-label">Nombre:</label></strong>
        <input type="text" class="form-control text-uppercase" name="nombre" 
        value="<?php echo $row['nom_materia']; ?>" required>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Clave:</label></strong>
        <input type="text" class="form-control text-uppercase" name="clave" 
        value="<?php echo $row['clave']; ?>" required>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Carrera:</label></strong>
        <select class="form-select" aria-label="Default select example" name="carrera">
        <!-- Ciclo que trae todas las carreras -->
        <?php foreach($resultado2 as $carrera){ 
            if($carrera['id_carrera'] == $row['carrera_prof']){?> 
                <option selected value="<?php echo $carrera['id_carrera']?>"><?php echo $carrera['nom_carrera']?></option>";
           <?php } else { ?>
               <option value="<?php echo $carrera['id_carrera']?>"><?php echo $carrera['nom_carrera']?></option>";
          <?php }?>
       <?php } ?>

        </select>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Semestre:</label></strong>
        <select class="form-select" aria-label="Default select example" name="semestre">
            <!-- Ciclo que trae todos los semestres -->
            <?php foreach($resultado3 as $semestre){ 
            if($semestre['id_semestre'] == $row['semestre_prof']){?> 
                <option selected value="<?php echo $semestre['id_semestre']?>"><?php echo $semestre['dsc_semestre']?></option>";
           <?php } else { ?>
               <option value="<?php echo $semestre['id_semestre']?>"><?php echo $semestre['dsc_semestre']?></option>";
          <?php }?>
       <?php } ?>
    
        </select>
    </div>

    <div class="form-check"> 
        <?php if($row['bool_mat_doble'] == 1){ ?>
            <input class="form-check-input" type="checkbox" value="1" name="doble" checked>
       <?php } else { ?>
            <input class="form-check-input" type="checkbox" value="1" name="doble">
       <?php } ?>
        
        <label class="form-check-label" for="flexCheckChecked">
            <strong>Materia de doble bloque</strong>
        </label>
    </div>

    <br>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="botonModal">Actualizar</button>
    </div>
</form>