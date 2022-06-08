<!-- Traemos una consulta de datos para el profesor especifico -->
<?php require('../../Funciones/Php/Func_profesores/Dat_prof.php'); ?>

<form> 
    <div class="mb-3">                                                     
        <strong><label for="recipient-name" class="col-form-label">Apellido Paterno:</label></strong>
        <br><label for="recipient-name" class="col-form-label"><?php echo $row['ap_paterno']; ?></label>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Apellido Materno:</label></strong>
        <br><label for="recipient-name" class="col-form-label"><?php echo $row['ap_materno']; ?></label>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Nombre:</label></strong>
        <br><label for="recipient-name" class="col-form-label"><?php echo $row['nombre']; ?></label>
    </div>

    <!-- LISTA DE MATERIAS -->
    <strong><label for="recipient-name" class="col-form-label">Materias que imparte:</label></strong>
    <ul class="list-group">
    <?php while($row = mysqli_fetch_assoc($resultado5)){ ?>
        <li class="list-group-item">
            <?php echo $row['nom_materia'];?>
        </li>
    <?php } ?>
    </ul>

    <br>

    <!-- TABLA DE DISPONIBILIDAD -->
    <table class="table table-bordered">
        <thead>
            <tr class="table-primary">
                <th scope="col">Primer Periodo</th>
                <th scope="col">Segundo Periodo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col">
                    <div class="form-check">
                        <?php
                            $verifica = 0; //Permite generar el Checkbox sin checked en dado caso que no cuente con ese bloque
                            $bandera = 1; //Permite el reconocimiento de bloque para ser comparado
                            foreach ($resultado2 as $bloque){  //Se hace un recorrido por cada bloque registrado
                                if($bloque['id_disponibilidad'] == $bandera){ // En dado que se encuentre marcara el bloque marcado
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1'>";
                            }
                        ?>
                        <label class="form-check-label" for="flexCheckChecked">
                            Bloque 1 <br>(7:30AM - 10:30AM)
                        </label>
                    </div>
                </td>
                <td scope="col">
                    <div class="form-check">
                        <?php
                            $verifica = 0; //Permite generar el Checkbox sin checked en dado caso que no cuente con ese bloque
                            $bandera = 2; //Permite el reconocimiento de bloque para ser comparado
                            foreach ($resultado2 as $bloque){  //Se hace un recorrido por cada bloque registrado
                                if($bloque['id_disponibilidad'] == $bandera){ // En dado que se encuentre marcara el bloque marcado
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1'>";
                            }
                        ?>
                        <label class="form-check-label" for="flexCheckChecked">
                            Bloque 2 <br> (7:30AM - 10:30AM)
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td scope="col">
                    <div class="form-check">
                        <?php
                            $verifica = 0; //Permite generar el Checkbox sin checked en dado caso que no cuente con ese bloque
                            $bandera = 3; //Permite el reconocimiento de bloque para ser comparado
                            foreach ($resultado2 as $bloque){  //Se hace un recorrido por cada bloque registrado
                                if($bloque['id_disponibilidad'] == $bandera){ // En dado que se encuentre marcara el bloque marcado
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1'>";
                            }
                        ?>
                        <label class="form-check-label" for="flexCheckChecked">
                            Bloque 3 <br> (11:00AM - 14:00PM)
                        </label>
                    </div>
                </td>
                <td scope="col">
                    <div class="form-check">
                        <?php
                            $verifica = 0; //Permite generar el Checkbox sin checked en dado caso que no cuente con ese bloque
                            $bandera = 4; //Permite el reconocimiento de bloque para ser comparado
                            foreach ($resultado2 as $bloque){  //Se hace un recorrido por cada bloque registrado
                                if($bloque['id_disponibilidad'] == $bandera){ // En dado que se encuentre marcara el bloque marcado
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1'>";
                            }
                        ?>
                        <label class="form-check-label" for="flexCheckChecked">
                            Bloque 4 <br> (11:00AM - 14:00PM)
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td scope="col">
                    <div class="form-check">
                        <?php
                            $verifica = 0; //Permite generar el Checkbox sin checked en dado caso que no cuente con ese bloque
                            $bandera = 5; //Permite el reconocimiento de bloque para ser comparado
                            foreach ($resultado2 as $bloque){  //Se hace un recorrido por cada bloque registrado
                                if($bloque['id_disponibilidad'] == $bandera){ // En dado que se encuentre marcara el bloque marcado
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1'>";
                            }
                        ?>
                        <label class="form-check-label" for="flexCheckChecked">
                            Bloque 5 <br> (15:00PM - 19:00PM)
                        </label>
                    </div>
                </td>
                <td scope="col">
                    <div class="form-check">
                        <?php
                            $verifica = 0; //Permite generar el Checkbox sin checked en dado caso que no cuente con ese bloque
                            $bandera = 6; //Permite el reconocimiento de bloque para ser comparado
                            foreach ($resultado2 as $bloque){  //Se hace un recorrido por cada bloque registrado
                                if($bloque['id_disponibilidad'] == $bandera){ // En dado que se encuentre marcara el bloque marcado
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input disabled class='form-check-input' type='checkbox' value='1' name='bloque1'>";
                            }
                        ?>
                        <label class="form-check-label" for="flexCheckChecked">
                            Bloque 6 <br> (15:00PM - 19:00PM)
                        </label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
    </form>