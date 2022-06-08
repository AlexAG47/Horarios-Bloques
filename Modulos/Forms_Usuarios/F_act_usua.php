<!-- Traemos una consulta de datos para el profesor especifico -->
<?php require('../../Funciones/Php/Func_Usuarios/Dat_usua.php'); ?>

<!-- LA RUTA DEBE SER DESDE DONDE SE INCLUYE EL FORM Y EL MODAL -->
<form method="POST" action="../Funciones/Php/Func_Usuarios/Act_usua.php" onsubmit="return validaContraseñas();"> 
    
<input id="id_usuario" name="id_usuario" type="hidden" value="<?php echo $_POST['id_elemento']; ?> "></input>

<div class="mb-3">                                                     
        <strong><label for="recipient-name" class="col-form-label">Apellido Paterno:</label></strong>
        <input type="text" class="form-control text-uppercase" name="ap_paterno" 
        value="<?php echo $row['ap_paterno']; ?>" required>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Apellido Materno:</label></strong>
        <input type="text" class="form-control text-uppercase" name="ap_materno"
        value="<?php echo $row['ap_materno']; ?>" required>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Nombre:</label></strong>
        <input type="text" class="form-control text-uppercase" name="nombre"
        value="<?php echo $row['nombre']; ?>" required>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Correo:</label></strong>
        <input type="email" class="form-control" name="correo"
        value="<?php echo $row['correo']; ?>" required>
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Contraseña:</label></strong>
        <input type="password" class="form-control" id="contr"name="contr" 
        value="<?php echo $row['contraseña']; ?>"Onchange= "contrIguales()" pattern=".{6,8}" required title="6 Caracteres minimo, 8 Maximo" >
    </div>
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Confirmar contraseña:</label></strong>
        <input type="password" class="form-control" id="contr2" name="contr2" Onchange= "contrIguales()" pattern=".{6,8}" required title="6 Caracteres minimo, 8 Maximo" >
    </div>

     <!-- MENSAJES DE VERIFICACION DE PASSWORDS -->
    <div style="display:none" name="error" id="msj_error" class="alert alert-danger" role="alert"></div>
    <div style="display:none" name="ok" id="msj_ok" class="alert alert-success" role="alert"></div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="botonModal">Actualizar</button>
    </div>
</form>