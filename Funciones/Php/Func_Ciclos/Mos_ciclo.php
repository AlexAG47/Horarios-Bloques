<?php 
    /*Consulta de datos de materias, junto a INNER JOIN para recoger nombres de carreras y semestres*/
    $consulta = "SELECT * FROM ciclos"; 

    $resultado = mysqli_query($conexion,$consulta);


    while($row = mysqli_fetch_assoc($resultado)){ ?>
        <tr class="">

           <?php $id_ciclo =$row['id_ciclo']; ?>

            <th scope="col"><?php echo $row['id_ciclo'];?></th>
            <th scope="col"><?php echo $row['mes_inicio'];?></th>
            <th scope="col"><?php echo $row['mes_fin'];?></th>
            <th scope="col"><?php echo $row['año'];?></th>
            <th scope="col"><?php echo $row['dsc_ciclo'];?></th>
            <th>
                <button class="btn btn-primary" onclick="obtenTipoModal('Actualizar',<?php echo $origen_modal; ?>,<?php echo $id_ciclo;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-pencil"></i></button>
                
                <button class="btn btn-danger" onclick="obtenTipoModal('Eliminar',<?php echo $origen_modal; ?>,<?php echo $id_ciclo;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-trash"></i></button>
            </th>           
        </tr>
    <?php } ?>


