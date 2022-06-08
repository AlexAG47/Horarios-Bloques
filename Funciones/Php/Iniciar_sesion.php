<?php 

	require('../../conexion.php');

	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];

	$consulta = "SELECT * FROM usuarios ";
	$resultado= mysqli_query($conexion,$consulta);

	$acceso = 0;
		foreach ($resultado as $row){
			if($row['correo'] == $correo && $row['contraseña'] == $contraseña){
				$acceso = 1;
				break;
			}
		}

		if($acceso == 1){
			session_start();
			$_SESSION['registrado'] = true;
			header("location:../../Vistas/Inicio.php");
		} 

		else{
			session_start();
			$_SESSION['tipo_alerta'] = "'ErrorLogin'";
			header("location:../../Vistas/Login.php");
		}

?>