<?php 
    /*Consulta de datos de materias, junto a INNER JOIN para recoger nombres de carreras y semestres*/
    $consulta = "SELECT * FROM usuarios "; 

    $resultado = mysqli_query($conexion,$consulta);


    while($row = mysqli_fetch_assoc($resultado)){ ?>
        <tr class="">

           <?php $id_usuario =$row['id_usuario']; ?>

            <th scope="col"><?php echo $row['id_usuario'];?></th>
            <th scope="col"><?php echo $row['ap_paterno'];?></th>
            <th scope="col"><?php echo $row['ap_materno'];?></th>
            <th scope="col"><?php echo $row['nombre'];?></th>
            <th scope="col"><?php echo $row['correo'];?></th>
            <th>
                <button class="btn btn-primary" onclick="obtenTipoModal('Actualizar',<?php echo $origen_modal; ?>,<?php echo $id_usuario;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-pencil"></i></button>
                
                <button class="btn btn-danger" onclick="obtenTipoModal('Eliminar',<?php echo $origen_modal; ?>,<?php echo $id_usuario;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-trash"></i></button>
            </th>           
        </tr>
    <?php } ?>


