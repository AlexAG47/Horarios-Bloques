<!-- LA RUTA DEBE SER DESDE DONDE SE INCLUYE EL FORM Y EL MODAL -->
<form method="POST" action="../Funciones/Php/Func_Ciclos/Reg_ciclo.php"> 
    <div class="mb-3">
        <strong><label for="recipient-name" class="col-form-label">Mes Inicio:</label></strong>
        <select class="form-select" aria-label="Default select example" id="mesInicio" name="mes_inicio" onchange="creaDscCiclo()">
            <option value="ENERO">ENERO</option>
            <option value="FEBRERO">FEBRERO</option>
            <option value="MARZO">MARZO</option>
            <option value="ABRIL">ABRIL</option>
            <option value="MAYO">MAYO</option>
            <option value="JUNIO">JUNIO</option>
            <option value="JULIO">JULIO</option>
            <option value="AGOSTO">AGOSTO</option>
            <option value="SEPTIEMBRE">SEPTIEMBRE</option>
            <option value="OCTUBRE">OCTUBRE</option>
            <option value="NOVIEMBRE">NOVIEMBRE</option>
            <option value="DICIEMBRE">DICIEMBRE</option>
        </select>
        <strong><label for="recipient-name" class="col-form-label">Mes Fin:</label></strong>
        <select class="form-select" aria-label="Default select example" id="mesFin" name="mes_fin" onchange="creaDscCiclo()">
            <option value="ENERO">ENERO</option>
            <option value="FEBRERO">FEBRERO</option>
            <option value="MARZO">MARZO</option>
            <option value="ABRIL">ABRIL</option>
            <option value="MAYO">MAYO</option>
            <option value="JUNIO">JUNIO</option>
            <option value="JULIO">JULIO</option>
            <option value="AGOSTO">AGOSTO</option>
            <option value="SEPTIEMBRE">SEPTIEMBRE</option>
            <option value="OCTUBRE">OCTUBRE</option>
            <option value="NOVIEMBRE">NOVIEMBRE</option>
            <option value="DICIEMBRE">DICIEMBRE</option>
        </select>
        <strong><label for="recipient-name" class="col-form-label">Año:</label></strong>
        <input class="form-control text-uppercase" type="number" min="2021" max="2099" step="1" value="2022" id="año" name="año" oninput="creaDscCiclo()"/>                                                     
        <strong><label for="recipient-name" class="col-form-label">Descripcion Ciclo:</label></strong>
        <input readonly type="text" class="form-control text-uppercase" name="descripcion" id="descripcion" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success" id="botonModal">Registrar</button>
    </div>
</form>



