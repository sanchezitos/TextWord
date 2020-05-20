function validarEspacio(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8)
        return true; //Tecla de retroceso (para poder borrar) 
    // dejar la línea de patron que se necesite y borrar el resto 
    patron = /\w/; // Acepta números y letras 
    //patron = /\D/; // No acepta números 
    // 
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
function validarNumero(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8)
        return true; //Tecla de retroceso (para poder borrar) 
    // dejar la línea de patron que se necesite y borrar el resto 
    patron = /\w/; // Acepta números y letras 
    patron = /\D/; // No acepta números 
    // 
    te = String.fromCharCode(tecla);
    return patron.test(te);
}
function validarLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}
function registro() {

    $("#contenedor").load("registro.php");
}
function edtperf() {

    $("#derecho").load("edtperf.php");
}
function miperf() {

    $("#derecho").load("miperf.php");
}
function eliperf() {

    $("#derecho").load("elmperf.php");
}




