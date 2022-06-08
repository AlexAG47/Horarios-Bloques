<!-- Traemos una consulta de datos para el profesor especifico -->
<?php require('../../Funciones/Php/Func_profesores/Dat_prof.php'); ?>
<!-- LA RUTA DEBE SER DESDE DONDE SE INCLUYE EL FORM Y EL MODAL -->
<form method="POST" action="../Funciones/Php/Func_profesores/Act_prof.php" onsubmit="return valida();"> 
    
<input id="id_profesor" name="id_profesor"type="hidden" value="<?php echo $_POST['id_elemento']; ?> "></input>
    
    <div class="mb-3">                                                     
        <strong><label for="recipient-name" class="col-form-label">Apellido Paterno:</label></strong>
        <input type="text" class="form-control text-uppercase" name="ap_paterno" 
        value="<?php echo $row['ap_paterno'];?>" required >
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Apellido Materno:</label></strong>
        <input type="text" class="form-control text-uppercase" name="ap_materno" 
        value="<?php echo $row['ap_materno'];?>" required >
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Nombre:</label></strong>
        <input type="text" class="form-control text-uppercase" name="nombre" 
        value="<?php echo $row['nombre'];?>" required >
    </div>


    <!-- MATERIAS -->
    <strong><label for="recipient-name" class="col-form-label">Materias que imparte en:</label></strong>
    <ul class="list-group list-group-flush"">
        <?php foreach($resultado3 as $carrera) {?>
            <li class="list-group-item">
                <div class="dropdown">
                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $carrera['nom_carrera'] ?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <?php foreach($resultado4 as $materia) { ?>     
                                <?php if($materia['id_carrera'] == $carrera['id_carrera']){?>     
                                    <li>
                                        <div class="form-check" style="margin-left: 10px;">
                                            <?php
                                                $verifica = 0; //Permite generar el Checkbox sin checked en dado caso que no cuente con ese bloque
                                                $bandera = $materia['id_materia']; //Permite el reconocimiento de bloque para ser comparado

                                                foreach ($resultado5 as $bloque){  //Se hace un recorrido por cada bloque registrado
                                                    if($bloque['id_materia'] == $bandera){ ?> <!-- En dado que se encuentre marcara el bloque marcado -->
                                                        <input class="form-check-input" type="checkbox" value="<?php echo $materia['id_materia']; ?>" 
                                                        name="materia[]" checked>
                                                   <?php $verifica = 1; //Evita que se genere el Checkbox vacio
                                                    break;
                                                    } 
                                                }
                                                
                                                if($verifica == 0){ ?> <!-- Prueba si puede imprimir el Checkbox vacio -->
                                                    <input class="form-check-input" type="checkbox" value="<?php echo $materia['id_materia']; ?>" 
                                                    name="materia[]" >
                                            <?php } ?>
                                        
                                            <label class="form-check-label" for="flexCheckChecked" style="margin-right: 10px;">
                                                <?php echo $materia['nom_materia']; ?>
                                            </label>
                                        </div>
                                    </li>
                                <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            </li>
        <?php } ?>
    </ul>

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
                                echo "<input class='form-check-input' type='checkbox' value='1' name='bloque1' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input class='form-check-input' type='checkbox' value='1' name='bloque1'>";
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
                                echo "<input class='form-check-input' type='checkbox' value='2' name='bloque2' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input class='form-check-input' type='checkbox' value='2' name='bloque2'>";
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
                                echo "<input class='form-check-input' type='checkbox' value='3' name='bloque3' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input class='form-check-input' type='checkbox' value='3' name='bloque3'>";
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
                                echo "<input class='form-check-input' type='checkbox' value='4' name='bloque4' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input class='form-check-input' type='checkbox' value='4' name='bloque4'>";
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
                                echo "<input class='form-check-input' type='checkbox' value='5' name='bloque5' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input class='form-check-input' type='checkbox' value='5' name='bloque5'>";
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
                                echo "<input class='form-check-input' type='checkbox' value='6' name='bloque6' checked>";
                                $verifica = 1; //Evita que se genere el Checkbox vacio
                                break;
                                } 
                            }
                            
                            if($verifica == 0){ //Prueba si puede imprimir el Checkbox vacio
                                echo "<input class='form-check-input' type='checkbox' value='6' name='bloque6'>";
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
            <button type="submit" class="btn btn-primary" id="botonModal">Actualizar</button>
        </div>
    </form>