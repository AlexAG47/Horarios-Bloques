//Valida los chekbox que corresponden a los bloques de disponibilidad de los profesores
function validaCheck(){    
    if ($('input[type=checkbox]:checked').length<1){       
       alert("Seleccione al menos un bloque");
       return false;
    }
   }

//Validad que las contraseñas coincidan en el registro de un usuario
function validaContraseñas(){
    if($('#contr').val() != $('#contr2').val()){
        alert("Contraseñas no coinciden, intentalo de nuevo");
        return false;
    }
}
