<?php 
    /*Consulta de datos de materias, junto a INNER JOIN para recoger nombres de carreras y semestres*/
    $consulta = "SELECT carreras.id_carrera, carreras.nom_carrera, carreras.abrev_carrera,
                        semestres.id_semestre, semestres.dsc_semestre,
                        materias.id_materia, materias.nom_materia,
                        materias.clave, materias.bool_mat_doble, 
                        materias.id_carrera,materias.id_semestre
                        FROM materias
                        INNER JOIN carreras ON materias.id_carrera = carreras.id_carrera
                        INNER JOIN semestres ON materias.id_semestre = semestres.id_semestre"; 

    $resultado = mysqli_query($conexion,$consulta);


    while($row = mysqli_fetch_assoc($resultado)){ ?>
        <tr class="">

           <?php $id_materia =$row['id_materia']; ?>

            <th scope="col"><?php echo $row['id_materia'];?></th>
            <th scope="col"><?php echo $row['nom_materia'];?></th>
            <th scope="col"><?php echo $row['clave'];?></th>
            <th scope="col">
                <?php
                    if($row['bool_mat_doble'] == 1){
                        echo "SI";
                    } else {
                        echo "NO";
                    }
                ?>
            </th>
            <th scope="col"><?php echo $row['abrev_carrera'];?></th>
            <th scope="col"><?php echo $row['dsc_semestre'];?></th>
            <th>
                <button class="btn btn-primary" onclick="obtenTipoModal('Revisar',<?php echo $origen_modal; ?>,<?php echo $id_materia;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-magnifying-glass"></i></button>

                <button class="btn btn-primary" onclick="obtenTipoModal('Actualizar',<?php echo $origen_modal; ?>,<?php echo $id_materia;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-pencil"></i></button>
                
                <button class="btn btn-danger" onclick="obtenTipoModal('Eliminar',<?php echo $origen_modal; ?>,<?php echo $id_materia;?>);" 
                data-bs-toggle="modal" data-bs-target="#ventanaModal"><i class="fa-solid fa-trash"></i></button>
            </th>           
        </tr>
    <?php } ?>


