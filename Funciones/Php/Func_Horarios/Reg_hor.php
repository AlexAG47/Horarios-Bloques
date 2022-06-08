<?php 

    require('../../../conexion.php');
    require('../../../librerias/graficos.php');

    $carrera = $_POST['carrera'];
    $semestre = $_POST['semestre'];
    $ciclo = $_POST['ciclo'];

    //INICIAMOS UN ARRAY PARA COMPROBAR LOS BLOQUES Y PROFESORES PARA
    //GUARDAR SUS VALORES CORRRESPONDIENTES
    $bloques = array(
            1 => "",
            2 => "",
            3 => "",
            4 => "",
            5 => "",
            6 => "",
            7 => "",
            8 => ""
            );
    $profesores = array(
            1 => "",
            2 => "",
            3 => "",
            4 => "",
            5 => "",
            6 => "",
            7 => ""
            );


    //OBTENEMOS PRIMERO LAS MATERIAS QUE CORRESPONDAN A LA CARRERA Y SEMESTRE 
    $resultado = mysqli_query($conexion,obtenMaterias($carrera,$semestre));
    $num_materia = 1; //CONTADOR DE MATERIAS

    //OBTENEMOS A LOS PROFESORES QUE IMPARTEN ESAS MATERIAS
    foreach($resultado as $materia){ 
        
        $bool_doble = $materia['bool_mat_doble']; //GUARDAMOS EL VALOR DE SI ES UNA MATERIA DOBLE
        $nom_materia = $materia['nom_materia']; //GUARDAMOS EL NOMBRE DE LA MATERIA A ASIGNAR EN UN BLOQUE
        $resultado2 = mysqli_query($conexion,obtenProfesores($materia['id_materia']));
        $salir = 0; //VARIABLE QUE NOS PERMITE SALIR DE LOS CICLOS EN CASO DE QUE YA ESTE ASIGNADA LA MATERIA
       
        //OBTENEMOS A LAS DISPONIBILIDADES QUE TIENEN ESOS PROFESORES
        foreach($resultado2 as $profesor){

            if($salir == 1){
                break;
            }

            //SE GUARDA EL NOMBRE DEL PROFESOR QUE PUEDA ASIGNARSE 
            $nom_profesor = $profesor['nombre']." ".$profesor['ap_paterno']." ".$profesor['ap_materno'];
            $resultado3 = mysqli_query($conexion,obtenDisponibilidades($profesor['id_profesor']));       
            $banderaPar = 0;
            $banderaImpar = 0;

            //SI LA MATERIA NO ES DOBLE
            if($bool_doble != 1){
                    
                //RECORREMOS CADA DISPONIBILIDAD 
                foreach($resultado3 as $disponibilidad){

                    //VERIFICAMOS SI ESTA DISPONIBLE EL BLOQUE CON RESPECTO A LA DISPONIBILIDAD TOMADA
                    if($bloques[$disponibilidad['id_disponibilidad']] == ""){
                        
                        $bloques[$disponibilidad['id_disponibilidad']] = $nom_materia;
                        $profesores[$disponibilidad['id_disponibilidad']] = $nom_profesor;
                        $salir = 1;
                        break;

                    } else {  
                        continue;
                    }
                     
                }   
            } else {

                foreach($resultado3 as $disponibilidad){

                    if($disponibilidad['id_disponibilidad'] % 2 == 0 && $banderaPar == 0){

                        if($bloques[$disponibilidad['id_disponibilidad']] == ""){
                            
                            $banderaPar = $disponibilidad['id_disponibilidad'];

                        } else
                            continue; 

                    } elseif($banderaImpar == 0) {

                        if($bloques[$disponibilidad['id_disponibilidad']] == ""){

                            $banderaImpar = $disponibilidad['id_disponibilidad'];

                        } else
                            continue;

                    }

                    if($banderaImpar!= 0 && $banderaPar != 0){
                        $bloques[$banderaPar] = $nom_materia;
                        $bloques[$banderaImpar] = $nom_materia;
                        $profesores[$disponibilidad['id_disponibilidad']] = $nom_profesor;
                        $salir = 1;
                        break;
                    }


                }   
            }
               
        }
    }

    function obtenMaterias($carrera, $semestre){
        $consulta = "SELECT * FROM materias
                        WHERE id_carrera = '$carrera' AND id_semestre = '$semestre'";
        return $consulta;
    }

    function obtenProfesores($id_materia){
        $consulta = "SELECT profesores.id_profesor,
                        profesores.nombre,
                        profesores.ap_paterno,
                        profesores.ap_materno,
                        prof_imparte_mat.id_profesor
                        FROM prof_imparte_mat
                        INNER JOIN profesores ON prof_imparte_mat.id_profesor = profesores.id_profesor
                        WHERE id_materia = '$id_materia'"; 
        return $consulta;
    }

    function obtenDisponibilidades($id_profesor){
        $consulta = "SELECT prof_tiene_disp.id_disponibilidad
                        FROM prof_tiene_disp
                        WHERE id_profesor = '$id_profesor'";
        return $consulta;    
    }

  


?>

<table class="table table-hover">
    <thead>
        <tr class="table-primary">
            <th scope="col"></th>
            <th scope="col" class="">PERIODO 1</th>
            <th scope="col">PERIODO 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="col">BLOQUE 1 / 2</th>
            <th scope="col"><?php echo $bloques[1]; ?></th>
            <th scope="col"><?php echo $bloques[2]; ?></th> 
        </tr>
        <tr>
            <th scope="col">BLOQUE 3 / 4</th>
            <th scope="col"><?php echo $bloques[3]; ?></th>
            <th scope="col"><?php echo $bloques[4]; ?></th> 
        </tr>
        <tr>
            <th scope="col">BLOQUE 5 / 6</th>
            <th scope="col"><?php echo $bloques[5]; ?></th>
            <th scope="col"><?php echo $bloques[6]; ?></th> 
        </tr>
    </tbody>
</table>

<table class="table table-hover">
    <thead>
        <tr class="table-primary">
            <th scope="col">MATERIA</th>
            <th scope="col">PROFESOR</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($bloques as $key => $bloque){ ?>
            <tr>
                <th scope="col"><?php echo $bloque ?></th>
                <?php if($key < 8){ ?>
                <th scope="col"><?php echo $profesores[$key] ?></th>
                <?php } ?>
            <tr>
        <?php } ?>
    </tbody>
</table>
