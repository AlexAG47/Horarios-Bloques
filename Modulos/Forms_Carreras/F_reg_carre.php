
<!-- LA RUTA DEBE SER DESDE DONDE SE INCLUYE EL FORM Y EL MODAL -->
<form method="POST" action="../Funciones/Php/Func_Carreras/Reg_carre.php"> 
    <div class="mb-3">                                                     
        <strong><label for="recipient-name" class="col-form-label">Nombre Carrera:</label></strong>
        <input type="text" class="form-control text-uppercase" name="nombre" required>
    </div>
    <div class="mb-3">                                                     
        <strong><label for="recipient-name" class="col-form-label">Abreviatura para la carrera:</label></strong>
        <input type="text" class="form-control text-uppercase" name="abreviatura" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success" id="botonModal">Registrar</button>
    </div>
</form>