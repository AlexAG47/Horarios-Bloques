<?php 
    /*Consulta de datos de materias, junto a INNER JOIN para recoger nombres de carreras y semestres*/
    $consulta = "SELECT * FROM carreras"; 

    $resultado = mysqli_query($conexion,$consulta);


    while($row = mysqli_fetch_assoc($resultado)){ ?>
        <tr class="">

           <?php $id_carrera =$row['id_carrera']; ?>

            <th scope="col"><?php echo $row['id_carrera'];?></th>
            <th scope="col"><?php echo $row['nom_carrera'];?></th>
            <th scope="col"><?php echo $row['abrev_carrera'];?></th>
            <th>
                <button class="btn btn-primary" onclick="obtenTipoModal('Actualizar',<?php echo $origen_modal; ?>,<?php echo $id_carrera;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-pencil"></i></button>
                
                <button class="btn btn-danger" onclick="obtenTipoModal('Eliminar',<?php echo $origen_modal; ?>,<?php echo $id_carrera;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-trash"></i></button>
            </th>           
        </tr>
    <?php } ?>


