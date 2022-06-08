<?php 
    /*Consulta de datos de profesores*/
    $consulta = "SELECT * FROM profesores";    
    $resultado = mysqli_query($conexion,$consulta);


    while($row = mysqli_fetch_assoc($resultado)){ ?>
        <tr class="">
            <th scope="col"><?php echo $row['id_profesor'];?></th>
            <th scope="col"><?php echo $row['ap_paterno'];?></th>
            <th scope="col"><?php echo $row['ap_materno'];?></th>
            <th scope="col"><?php echo $row['nombre'];?></th>
            <th scope="col" class="col-dispo">
                <?php
                    //Consulta de bloques disponibles por profesor//
                    $id_profesor = $row['id_profesor']; //Sirve para capturar el id del prof
                    $consulta2 = "SELECT 
                               prof_tiene_disp.id_disponibilidad
                               FROM prof_tiene_disp
                               WHERE id_profesor = '$id_profesor'";
                    $resultado2 = mysqli_query($conexion,$consulta2);

                    while($row = mysqli_fetch_assoc($resultado2)){ ?>
                        <div class="casilla"> <?php echo $row['id_disponibilidad'];?> </div>
                <?php } ?>
            </th>
            <th>
                <button class="btn btn-primary" onclick="obtenTipoModal('Revisar',<?php echo $origen_modal; ?>,<?php echo $id_profesor;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-magnifying-glass"></i></button>

                <button class="btn btn-primary" onclick="obtenTipoModal('Actualizar',<?php echo $origen_modal; ?>,<?php echo $id_profesor;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-pencil"></i></button>
                
                <button class="btn btn-danger" onclick="obtenTipoModal('Eliminar',<?php echo $origen_modal; ?>,<?php echo $id_profesor;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-trash"></i></button>
            </th>           
        </tr>
    <?php } ?>


